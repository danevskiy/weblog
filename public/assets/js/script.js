$(window).scroll(function(e){    
	var top = $(document).scrollTop();

if(top > 1){
$('.header').addClass('scrolling');
}
else{
	$('.header').removeClass('scrolling');
}



});


$(document).ready(function () {

$('.block-title_text').click(function(){
$('.block-title_text.active').removeClass('active');
$('.news-tab.active').removeClass('active');
$('.news-tab[datacatid="'+$(this).attr('id')+'"]').addClass('active');
$(this).addClass('active');

});


if($('input[type="file"]').length > 0){
	new InputFile({
		// options
	});
}
	
	$('.slider-top').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
	});


	$('.slider-top').on('beforeChange', function(event, slick, currentSlide, nextSlide){

		$('.nav-bottom img').removeClass('active');
		$('.nav-bottom img:nth-child('+(nextSlide+1)+')').addClass('active');
	});

	$('.nav-bottom img').click(function(e) {
		$('.nav-bottom img').removeClass('active');
		e.preventDefault();
		var slideno = $(this).index();
		$('.slider-top').slick('slickGoTo', slideno);
		$(this).addClass('active');
	  });


if($(window).width() < 701){
var slides = '';
$('.slide-block').each(function(){
	slides+= $(this).find('.slide-left').html();
	slides+= $(this).find('.slide-right').html();
});

$('.slider-block').html(slides);

}


$('.slider-block').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	fade: true,
	prevArrow: $('.slider-prev'),
	nextArrow: $('.slider-next'),
	responsive: [
		{
		  breakpoint: 701,
		  settings: {
			dots: true,
		  }
		}
	  ]
});



$('.menu-button').click(function(){
$('.header-middle').addClass('show');
});

$('.menu-close_but').click(function(){
$('.header-middle').removeClass('show');
});


$('.has-child').click(function(){

if($(this).hasClass('open')){
	$(this).removeClass('open');
}
else{
	$(this).addClass('open');
}
if($(this).find('> a').attr() == '#'){
	return false;
}
});


});
