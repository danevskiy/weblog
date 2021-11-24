
    @include('header')
    <div class="slider-block-wrap container">
	<div class="slider-prev"><div class="slider-prev-arrow"></div></div>
	<div class="slider-next"><div class="slider-prev-arrow"></div></div>
<div class="slider-block">


<?php 
$sliderCounter = 1; 
$sliderCounterNotSet = 1;
?>

@foreach($slider as $newsItem)





<?php
if($sliderCounter == 1){

?>

<div class="slide-block">
	<div class="slide-inner">

<div class="slide-left">
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>


<a class="slide-item"  href="<?php echo $url.'/posts/'.$slug; ?>">
<img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}">
	
<div class="slide-item_text-wrap">
<div class="slide-item_text">
<span>{{$newsItem->title}}</span>
</div>
</div>
</a>
</div>

<?php } 
if($sliderCounter == 2){
?>
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>

<div class="slide-right">
	<a class="slide-item" href="<?php echo $url.'/posts/'.$slug; ?>">
	<img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}">
		<div class="slide-item_text-wrap">	
		<div class="slide-item_text">
		<span>{{$newsItem->title}}</span>
		</div> 
	</div>
</a>


<?php 

if(count($slider) == $sliderCounterNotSet){
?>
</div>
<?php
}


} 
if($sliderCounter == 3){

?>
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>

		<a class="slide-item"  href="<?php echo $url.'/posts/'.$slug; ?>">
		<img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}">

			<div class="slide-item_text-wrap">
			<div class="slide-item_text">
				<span>{{$newsItem->title}} </span>
			</div>
		    </div>
        </a>
</div>
<?php } ?>
<?php



if($sliderCounter == 3 || $sliderCounterNotSet == count($slider)){
	$sliderCounter = 0;

?>
</div>
</div>

<?php
}
?>

<?php 
$sliderCounter++; 
$sliderCounterNotSet++;
?>

@endforeach



</div>

</div>




<div class="main-info-wrap container">
<div class="news-block">
<div class="block-title">
<?php
$catsCounter = 0;
?>
@foreach($cats as $cat)
<span id="{{$cat['id']}}" class="block-title_text <?php if($catsCounter == 0){ echo 'active';} ?>">{{$cat['title']}}</span>
<?php $catsCounter ++;?>
@endforeach
</div>
<?php
$catsCounter = 0;
?>
@foreach($cats as $cat)

<div class="news-tab <?php if($catsCounter == 0){ echo 'active';} ?>" dataCatId="{{$cat['id']}}">
<div class="news-list">
<?php $catsCounter ++;?>

@foreach($mainNews[$cat['id']] as $newsItem)
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>

<div class="news-item">
<a href="<?php echo $url.'/posts/'.$slug; ?>" class="news-img">
<img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}">
</a>
<div class="news-info">
<div class="news_title">
<a href="<?php echo $url.'/posts/'.$slug; ?>">{{$newsItem->title}} </a> <!-- <a href="#" class="news-tag">ФОТО</a> <a href="#" class="news-tag">відео</a> -->
</div>
<a href="#" class="news_date">{{$newsItem->created_at->format('d.m.Y')}}</a>

</div>

</div>

@endforeach

</div>
<a href="{{$cat['link']}}" class="all-news-link">{{$cat['text_cat']}}</a>
</div>
@endforeach
</div>





<div class="sidebar-block">



<div class="advertisement">
	<div class="block-title">
		<span class="block-title_text">Оголошення</span>
	</div>
<div class="advertisement-blocks">



@foreach($advertisment as $newsItem)
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>
<div class="advertisement-bl">
<a href="<?php echo $url.'/posts/'.$slug; ?>" class="advertisement-bl-item">
<div class="advertisement-block-inner">
<div class="advertisement-block_icon" style="background:url({{$newsItem->image('cover')}}) no-repeat center;"></div>
<div class="advertisement-block_text">{{$newsItem->title}}</div>
</div>
</a>
</div>

@endforeach



</div>
</div>





<div class="video-news">
	<div class="block-title">
		<span class="block-title_text">Вiдео</span>
	</div>
	<div class="video-blocks">



	@foreach($video as $newsItem)
<?php
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>

	<a href="<?php echo $url.'/posts/'.$slug; ?>" class="video-block">
	<div class="video-img">

	<img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}">
	</div>
	<div class="video_text">
	{{$newsItem->title}}
	</div>
	</a>

    @endforeach




	
	</div>
</div>




<div class="regional-news">
	<div class="block-title">
		<span class="block-title_text">Регiональнi новини</span>
	</div>
	<div class="regional-list">

	@foreach($regNews as $newsItem)
	<?php



	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $newsItem->id)->first();
	$slug = $slug->slug;
?>

	<a href="<?php echo $url.'/posts/'.$slug; ?>" class="regional-item">
		<div class="regional-img"><img src="{{$newsItem->image('cover')}}" alt="{{$newsItem->title}}"></div>
		<div class="regional-text">{{$newsItem->title}}</div>
	</a>

    @endforeach



	</div>
	<a href="#" class="regional-all_link">До всiх регiональних новин</a>
</div>





</div>
</div>
<div class="statistic container">
<div class="block-title">
<span class="block-title_text">Статистика</span>
</div>
<div class="statistic-blocks">

@foreach($statistics as $statisticItem)


<div class="statistic-block">
<div class="statistic_number">
{{$statisticItem->title}}
</div>
<div class="statistic_title">{{$statisticItem->sub_title}}</div>
<div class="statistic_subtitle"><?php echo html_entity_decode($statisticItem->description); ?></div>
</div>

@endforeach





</div>


</div>

<div class="numbers container">
	<div class="block-title">
		<span class="block-title_text">Про роботу в цифрах</span>
	</div>
	<div class="numbers-blocks">

	
	@foreach($numbers as $number)
	<div class="numbers-block">
	<div class="numbers-title">{{$number->real_title}}</div>
	<div class="numbers-price-block">
	<div class="numbers-price-title">{{$number->price_title}} {{$number->price_title_prefix}}</div>
<?php if($number->price_title){
$price_title = $number->price_title;
$price_title = str_replace(" ","",$price_title);
$price_title = str_replace(",",".",$price_title);
$onePerc = $price_title / 100;



$bl1_numb = $number->bl1_numb;
$bl1_numb = str_replace(" ","",$bl1_numb);
$bl1_numb = str_replace(",",".",$bl1_numb);
$bl1_numb = (int)$bl1_numb;

$bl1_numb = $bl1_numb / $onePerc;


$bl2_numb = $number->bl2_numb;
$bl2_numb = str_replace(" ","",$bl2_numb);
$bl2_numb = str_replace(",",".",$bl2_numb);
$bl2_numb = (int)$bl2_numb;
$bl2_numb = $bl2_numb / $onePerc;

$bl3_numb = $number->bl3_numb;
$bl3_numb = str_replace(" ","",$bl3_numb);
$bl3_numb = str_replace(",",".",$bl3_numb);
$bl3_numb = (int)$bl3_numb;
$bl3_numb = $bl3_numb / $onePerc;

$bl4_numb = $number->bl4_numb;
$bl4_numb = str_replace(" ","",$bl4_numb);
$bl4_numb = str_replace(",",".",$bl4_numb);
$bl4_numb = (int)$bl4_numb;
$bl4_numb = $bl4_numb / $onePerc;

$bl5_numb = $number->bl5_numb;
$bl5_numb = str_replace(" ","",$bl5_numb);
$bl5_numb = str_replace(",",".",$bl5_numb);
$bl5_numb = (int)$bl5_numb;
$bl5_numb = $bl5_numb / $onePerc;



} ?>

	<div class="numbers-price-desc">{{$number->price_title_info}}</div>
	</div>
<?php if($number->bl1_numb || $number->bl2_numb || $number->bl3_numb || $number->bl4_numb || $number->bl5_numb){ ?>
	<div class="numbers-colors">
	<?php if($number->bl1_numb){ ?>
	<div class="numbers-color" style="background:#002944;width:<?php echo $bl1_numb ?>%;"><span>{{$number->bl1_numb}}</span> <div class="numbers-color_title <?php if($number->bl1_pos == 1){ echo 'numbers-color__top'; }else{ echo 'numbers-color__bottom';} ?>">{{$number->bl1_text}}</div></div>
	<?php } ?>
	<?php if($number->bl2_numb){ ?>
	<div class="numbers-color" style="background:#075486;width:<?php echo $bl2_numb ?>%;"><span>{{$number->bl2_numb}}</span> <div class="numbers-color_title <?php if($number->bl2_pos == 1){ echo 'numbers-color__top'; }else{ echo 'numbers-color__bottom';} ?>">{{$number->bl2_text}} </div></div>
		<?php } ?>
		<?php if($number->bl3_numb){ ?>
	<div class="numbers-color" style="background:#0071BB;width:<?php echo $bl3_numb ?>%;"><span>{{$number->bl3_numb}}</span> <div class="numbers-color_title <?php if($number->bl3_pos == 1){ echo 'numbers-color__top'; }else{ echo 'numbers-color__bottom';} ?>">{{$number->bl3_text}}</div></div>
	<?php } ?>
	<?php if($number->bl4_numb){ ?>
	<div class="numbers-color" style="background:#0394F2;width:<?php echo $bl4_numb ?>%;"><span>{{$number->bl4_numb}}</span> <div class="numbers-color_title <?php if($number->bl4_pos == 1){ echo 'numbers-color__top'; }else{ echo 'numbers-color__bottom';} ?>">{{$number->bl4_text}}</div></div>
	<?php } ?>
	<?php if($number->bl5_numb){ ?>
	<div class="numbers-color" style="background:#88D0FF;width:<?php echo $bl5_numb ?>%;"><span>{{$number->bl5_numb}}</span> <div class="numbers-color_title <?php if($number->bl5_pos == 1){ echo 'numbers-color__top'; }else{ echo 'numbers-color__bottom';} ?>">{{$number->bl5_text}}</div></div>	
	<?php } ?>
	
</div>
<?php } ?>

	</div>
	@endforeach






</div>

<div class="numbers-info-wrap">
<div class="numbers-info">
	&nbsp;&nbsp;*За даними інформаційно-аналітичної системи “Облік та статистика органів прокуратори” <br>**За даними Єдиного реєстру досудових розслідувань
</div>
<a href="#" class="numbers_link">Більше про злочинність у твоїй громаді</a>
</div>	


	

</div>


<!--
<div class="advertisment-full container">
	<div class="block-title">
		<span class="block-title_text">Оголошення</span>
	</div>
	<div class="advertisement-blocks">
		<div class="advertisement-bl">
		<a href="#" class="advertisement-bl-item">
		<div class="advertisement-block-inner">
		<div class="advertisement-block_icon" style="background:url({{asset('assets/img/svg/advertisement/ptcu.svg')}}) no-repeat center;"></div>
		<div class="advertisement-block_text">Тренінговий центр прокурорів України</div>
		</div>
		</a>
	</div>
	<div class="advertisement-bl">
		<a href="#" class="advertisement-bl-item">
		<div class="advertisement-block-inner">
			<div class="advertisement-block_icon" style="background:url({{asset('assets/img/svg/advertisement/sap.png')}}) no-repeat center;"></div>
			<div class="advertisement-block_text">Спеціалізована антикорупційна прокуратура</div>
		</div>
		</a>
	</div>
		<div class="advertisement-bl">
		<a href="#" class="advertisement-bl-item">
			<div class="advertisement-block-inner">
				<div class="advertisement-block_icon" style="background:url({{asset('assets/img/svg/advertisement/check.svg')}}) no-repeat center;"></div>
				<div class="advertisement-block_text">Контрольно дисциплинарная комиссия прокуроров</div>
			</div>
			</a>
		</div>
</div>
-->


</div>
    @include('footer')

