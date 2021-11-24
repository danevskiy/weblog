<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use A17\Twill\Repositories\SettingRepository;
use App\Models\Post;
use App\Models\Statistic;
use App\Models\Number;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use A17\Twill\Models\Feature;
use Illuminate\Http\Request;

use App\Repositories\PostRepository;

class PostpageController extends Controller
{
  

    
public function index($param = false, $post_slug = false){
    
    $lang = 'ua';
    if($param){
        app()->setLocale($param);
        $lang = $param;
    }
    $url = url('/').'/'.$lang;
    $changeLang = 'ua';
    if($lang == 'ua'){
    $changeLang = 'en';
    }
    


$news = new Post();     
$menus = new Menu();



$thisPost = new PostRepository(new Post()); 




//var_dump($thisPost);



$thisPost = $thisPost->forSlug($post_slug);
$thisPost_content = $thisPost->renderBlocks();
$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $thisPost->id)->first()->slug;

$changeUrl = url('/').'/'.$changeLang.'/posts/'.$slug;



$settings = app(SettingRepository::class)->getFormFields('settings');

$homeMenuQuery = Feature::forBucket('menu11')->all();

$footerMenu1 = Feature::forBucket('menu_footer1')->whereNotNull('title')->all();
$footerMenu2 = Feature::forBucket('menu_footer2')->whereNotNull('title')->all();
$footerMenu3 = Feature::forBucket('menu_footer3')->whereNotNull('title')->all();
$footerMenu4 = Feature::forBucket('menu_footer4')->whereNotNull('title')->all();
$footerMenu5 = Feature::forBucket('menu_footer5')->whereNotNull('title')->all();
$footerMenu6 = Feature::forBucket('menu_footer6')->whereNotNull('title')->all();

$homeMenu = array();
$loopFirst = array();

foreach($homeMenuQuery as $homeItem){



    $homeMenu[$homeItem->id]['title'] = $homeItem->title;

    $homeMenu[$homeItem->id]['link'] = '#';
    if($homeItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $homeItem->post_id)->first();
    if($slug){
	$slug = $slug->slug;
    $homeMenu[$homeItem->id]['link'] = $url.'/posts/'.$slug;
    }
    }


    

    $loopFirst = $menus->where('menu_id', $homeItem->id)->get();
    $submenu1 = array();
    foreach($loopFirst as $loopItem){
        $submenu1[$loopItem->id]['link'] = '#';
        if($loopItem->post_id){
        
        $slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $loopItem->post_id)->first();
        if($slug){
        $slug = $slug->slug;
        $submenu1[$loopItem->id]['link'] = $url.'/posts/'.$slug;
        }
        }
        $submenu1[$loopItem->id]['title'] = $loopItem->title;
        
        $loopSecond = $menus->where('menu_id', $loopItem->id)->get();
        $submenu2 = array();
        
        foreach($loopSecond as $loopItemSec){
            $submenu2[$loopItemSec->id]['link'] = '#';
            if($loopItemSec->post_id){
           
            $slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $loopItemSec->post_id)->first();
            if($slug){
            $slug = $slug->slug;
            $submenu2[$loopItemSec->id]['link'] = $url.'/posts/'.$slug;
            }
            }

            $submenu2[$loopItemSec->id]['title'] = $loopItemSec->title;
            
        }
        if($submenu2){
            $submenu1[$loopItem->id]['sub'] = $submenu2;
        }
        else{
            $submenu1[$loopItem->id]['sub'] = '';   
        }

    }
if($submenu1){
$homeMenu[$homeItem->id]['sub'] = $submenu1;
}
else{
$homeMenu[$homeItem->id]['sub'] = '';   
}
    
    
}















$advertisment = Feature::forBucket('home_primary_feature_cats_sidebar')->whereNotNull('title')->all();
$video = Feature::forBucket('home_primary_feature_cats_sidebar2')->whereNotNull('title')->all();
$regNews = Feature::forBucket('home_primary_feature_cats_sidebar3')->whereNotNull('title')->all();


     $logo = $settings['medias']['logo'][0]['original'];
     $logoScroll = $settings['medias']['logoScroll'][0]['original'];
     $twitter = $settings['twitter'][$lang];
     $facebook = $settings['facebook'][$lang];
     $youtube = $settings['youtube'][$lang];
     $telegram = $settings['telegram'][$lang];
     $eye = $settings['eye'][$lang];




     $data = [
    'lang' => $lang,
     'logo' => $logo,
     'logoScroll' => $logoScroll,
     'twitter' => $twitter,
     'facebook' => $facebook,
     'youtube' => $youtube,
     'telegram' => $telegram,
     'eye' => $eye,
     'advertisment' => $advertisment,
     'video' => $video,
     'regNews' => $regNews,
     'homeMenu' => $homeMenu,
     'footerMenu1' => $footerMenu1,
     'footerMenu2' => $footerMenu2,
     'footerMenu3' => $footerMenu3,
     'footerMenu4' => $footerMenu4,
     'footerMenu5' => $footerMenu5,
     'footerMenu6' => $footerMenu6,
     'thisPost' => $thisPost,
     'content' => $thisPost_content,
     'url' => $url,
     'lang' => $lang,
     'changeUrl' => $changeUrl
     ];
        
        return view('post', $data);
    }
    
     
}
