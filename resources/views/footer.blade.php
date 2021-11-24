<div class="footer">
<div class="footer-inner container">

<div class="footer-columns">
<div class="footer-column">
<div class="footer-column-inner">
<div class="footer-column-row">
<div class="footer_title">Прокуратура</div>
<div class="footer-links">
@foreach($footerMenu1 as $footerItem)
<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
</div>
</div>
</div>
</div>


<div class="footer-column">
	<div class="footer-column-inner">
	<div class="footer-column-row">
	<div class="footer_title">Прес-центр</div>
	<div class="footer-links">
@foreach($footerMenu2 as $footerItem)
<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
	</div>
	</div>
	<div class="footer-column-row">
		<div class="footer_title">Звернутися</div>
		<div class="footer-links">
		@foreach($footerMenu3 as $footerItem)
		<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
		</div>
	</div>



	</div>
</div>


<div class="footer-column">
	<div class="footer-column-inner">
	<div class="footer-column-row">
	<div class="footer_title">Законодавство</div>
	<div class="footer-links">
	@foreach($footerMenu4 as $footerItem)
	<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
	</div>
	</div>
	<div class="footer-column-row">
		<div class="footer_title">Сайти обласних прокуратур</div>
		<div class="footer-links">
@foreach($footerMenu5 as $footerItem)
<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
	</div>
	</div>



	</div>
</div>



<div class="footer-column">
	<div class="footer-column-inner">
	<div class="footer-column-row">
	<div class="footer_title">Працівникам прокуратури</div>
	<div class="footer-links">
@foreach($footerMenu6 as $footerItem)
<?php
$footerItem->link = '#';
if($footerItem->post_id){
	$slug = \App\Models\Slugs\PostSlug::select('slug')->where('post_id', $footerItem->post_id)->first();
	$slug = $slug->slug;
    $footerItem->link =  $url.'/posts/'.$slug;
    }
?>

<a href="{{$footerItem->link}}" class="footer-link">{{$footerItem->title}}</a>
@endforeach
	</div>
	</div>




	</div>
</div>
</div>
<div class="footer-copyright">
<div class="footer-logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
<div class="footer-socials">
	
		<a href="<?php echo $twitter;?>" target="_blank" class="social twitter">
			<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M17.7324 3.70281C17.1061 3.98031 16.4334 4.16781 15.7261 4.25256C16.4559 3.8159 17.0018 3.12866 17.2621 2.31906C16.5765 2.7263 15.8261 3.01295 15.0436 3.16656C14.5174 2.60471 13.8204 2.2323 13.0609 2.10716C12.3013 1.98202 11.5217 2.11115 10.8431 2.4745C10.1644 2.83784 9.62471 3.41508 9.30775 4.11659C8.99078 4.81809 8.91428 5.60462 9.09013 6.35406C7.7009 6.28431 6.34185 5.92322 5.1012 5.29424C3.86055 4.66525 2.76601 3.78243 1.88863 2.70306C1.58863 3.22056 1.41613 3.82056 1.41613 4.45956C1.4158 5.0348 1.55746 5.60124 1.82854 6.10861C2.09962 6.61598 2.49175 7.04859 2.97013 7.36806C2.41534 7.35041 1.87279 7.2005 1.38763 6.93081V6.97581C1.38757 7.78261 1.66666 8.56459 2.17752 9.18906C2.68838 9.81352 3.39956 10.242 4.19038 10.4018C3.67572 10.5411 3.13613 10.5616 2.61238 10.4618C2.8355 11.156 3.27013 11.7631 3.85541 12.198C4.44069 12.6329 5.14732 12.8739 5.87638 12.8873C4.63876 13.8589 3.1103 14.3859 1.53688 14.3836C1.25817 14.3836 0.979688 14.3674 0.702881 14.3348C2.29999 15.3617 4.15914 15.9067 6.05788 15.9046C12.4854 15.9046 15.9991 10.5811 15.9991 5.96406C15.9991 5.81406 15.9954 5.66256 15.9886 5.51256C16.6721 5.01829 17.2621 4.40623 17.7309 3.70506L17.7324 3.70281Z" fill="white"></path>
				</svg>
		</a>
		<a href="<?php echo $facebook;?>" target="_blank" class="social facebook">
			<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_407:204)">
				<path d="M3.1041 0C1.38456 0 0 1.46601 0 3.28669V14.7133C0 16.534 1.38456 18 3.1041 18H8.95317V10.9631H7.19579V8.42963H8.95317V6.26513C8.95317 4.56458 9.99151 3.00319 12.3834 3.00319C13.3519 3.00319 14.068 3.10163 14.068 3.10163L14.0117 5.46752C14.0117 5.46752 13.2814 5.46021 12.4844 5.46021C11.6218 5.46021 11.4835 5.88101 11.4835 6.57959V8.42965H14.0803L13.9671 10.9632H11.4835V18H13.8959C15.6154 18 17 16.534 17 14.7133V3.28671C17 1.46603 15.6154 1.8e-05 13.8959 1.8e-05H3.10408L3.1041 0Z" fill="white"></path>
				</g>
				<defs>
				<clipPath id="clip0_407:204">
				<rect width="17" height="18" fill="white"></rect>
				</clipPath>
				</defs>
				</svg>
		</a>
		<a href="<?php echo $youtube;?>" target="_blank" class="social youtube">
			<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_407:206)">
				<path d="M10.5669 2.74866H10.6838C11.7626 2.75278 17.2292 2.79403 18.7031 3.20928C19.1487 3.33601 19.5547 3.58304 19.8806 3.92567C20.2066 4.2683 20.4409 4.69453 20.5603 5.16178C20.6929 5.68428 20.7861 6.37591 20.8491 7.08953L20.8622 7.23253L20.8911 7.59003L20.9016 7.73303C20.9869 8.98978 20.9974 10.1668 20.9987 10.4239V10.527C20.9974 10.7938 20.9856 12.0505 20.8911 13.3595L20.8806 13.5039L20.8687 13.6469C20.8031 14.4334 20.706 15.2144 20.5603 15.7892C20.4413 16.2566 20.207 16.683 19.8811 17.0257C19.5551 17.3684 19.1489 17.6153 18.7031 17.7417C17.1806 18.1707 11.3938 18.2009 10.5919 18.2023H10.4055C9.99994 18.2023 8.32256 18.194 6.56381 18.1308L6.34069 18.1225L6.2265 18.117L6.00206 18.1074L5.77763 18.0978C4.32075 18.0304 2.93344 17.9218 2.29425 17.7403C1.84864 17.614 1.44252 17.3674 1.11658 17.0249C0.790628 16.6825 0.556299 16.2563 0.437063 15.7892C0.291375 15.2158 0.19425 14.4334 0.128625 13.6469L0.118125 13.5025L0.107625 13.3595C0.04285 12.4278 0.00695607 11.4942 0 10.56L0 10.3909C0.002625 10.0953 0.013125 9.07366 0.084 7.94616L0.0931875 7.80453L0.097125 7.73303L0.107625 7.59003L0.1365 7.23253L0.149625 7.08953C0.212625 6.37591 0.305812 5.68291 0.438375 5.16178C0.55741 4.69435 0.79165 4.26791 1.11761 3.92522C1.44357 3.58253 1.8498 3.33563 2.29556 3.20928C2.93475 3.03053 4.32206 2.92053 5.77894 2.85178L6.00206 2.84216L6.22781 2.83391L6.34069 2.82978L6.56512 2.82016C7.81424 2.77805 9.06387 2.75467 10.3136 2.75003H10.5669V2.74866ZM8.4 7.16241V13.7872L13.8561 10.4762L8.4 7.16241Z" fill="white"></path>
				</g>
				<defs>
				<clipPath id="clip0_407:206">
				<rect width="21" height="22" fill="white"></rect>
				</clipPath>
				</defs>
				</svg>
		</a>
		<a href="<?php echo $telegram;?>" target="_blank" class="social telegram">
			<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M18 9C18 13.9703 13.9703 18 9 18C4.02975 18 0 13.9703 0 9C0 4.02975 4.02975 0 9 0C13.9703 0 18 4.02975 18 9ZM9.3225 6.64425C8.44725 7.008 6.6975 7.76175 4.074 8.90475C3.648 9.07425 3.4245 9.24 3.40425 9.402C3.36975 9.6765 3.71325 9.7845 4.17975 9.93075C4.2435 9.951 4.3095 9.97125 4.377 9.99375C4.83675 10.143 5.45475 10.3177 5.77575 10.3245C6.0675 10.3305 6.393 10.2105 6.75225 9.9645C9.20325 8.30925 10.4685 7.473 10.548 7.455C10.6042 7.44225 10.6823 7.42575 10.7347 7.473C10.7872 7.5195 10.782 7.608 10.7768 7.632C10.7423 7.77675 9.39675 9.0285 8.69925 9.6765C8.48175 9.87825 8.328 10.0215 8.2965 10.0545C8.226 10.1272 8.154 10.197 8.085 10.2638C7.6575 10.6748 7.338 10.9838 8.103 11.4878C8.4705 11.73 8.7645 11.9303 9.05775 12.1298C9.378 12.348 9.6975 12.5655 10.1115 12.837C10.2165 12.906 10.317 12.9773 10.4152 13.047C10.788 13.3132 11.1233 13.5517 11.5373 13.5142C11.7773 13.4917 12.0262 13.266 12.1522 12.5917C12.45 10.9972 13.0365 7.54425 13.1722 6.12075C13.1805 6.00256 13.1755 5.88382 13.1572 5.76675C13.1463 5.6722 13.1003 5.5852 13.0282 5.523C12.921 5.43525 12.7545 5.4165 12.6795 5.418C12.3413 5.424 11.8223 5.60475 9.3225 6.64425Z" fill="white"></path>
				</svg>
				
		</a>
		
</div>
</div>

</div>
</div>
	<script src="{{asset('assets/libs/jquery/jquery-3.6.0.min.js')}}" ></script>
    <script src="{{asset('assets/libs/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>