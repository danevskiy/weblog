@include('header')
<div class="main-info-wrap open-news-page container">
<div class="news-block content-block">
<div class="page-title-block">
	{{$thisPost->title}}<!-- <a href="#" class="news-tag">ФОТО</a> -->
</div>
<?php
echo html_entity_decode($content);
?>



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
@include('footer')

