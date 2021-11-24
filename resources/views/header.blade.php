<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link rel="icon" type="image/png" href="favicon.png" />
	<title>Document</title>



    <link rel="stylesheet" href="{{asset('assets/libs/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/firaSans/firasans.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
<header class="header">
<div class="header-inner container">
<div class="header-left">

<a href="<?php if($lang == 'ua'){ echo '/';}else{echo $url;}?>" class="logo">
<div class="logo_img">
<img src="<?php echo $logo;?>" alt="logo">
<img src="<?php echo $logoScroll;?>" alt="logo" class="mini-logo">
</div>
</a>
</div>
<div class="header-middle">
<div class="menu-close-block">
	<div class="menu-close_but"></div>
</div>
<div class="header-middle-inner">
<div class="header-middle-top">
<div class="eye-help">
<div class="eye-help_icon">
	<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
		<path d="M13.2856 7.35125C13.5818 7.73875 13.5818 8.26188 13.2856 8.64875C12.3524 9.86688 10.1137 12.375 7.49995 12.375C4.8862 12.375 2.64745 9.86688 1.71432 8.64875C1.57019 8.46321 1.49194 8.23495 1.49194 8C1.49194 7.76505 1.57019 7.53679 1.71432 7.35125C2.64745 6.13312 4.8862 3.625 7.49995 3.625C10.1137 3.625 12.3524 6.13312 13.2856 7.35125V7.35125Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M7.5 9.875C8.53553 9.875 9.375 9.03553 9.375 8C9.375 6.96447 8.53553 6.125 7.5 6.125C6.46447 6.125 5.625 6.96447 5.625 8C5.625 9.03553 6.46447 9.875 7.5 9.875Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
</div>
<div class="eye-help_text"><?php echo $eye;?></div>
</div>
<div class="language">
	
<?php if($lang == 'en'){ ?>
<a class="lang_link" href="{{$changeUrl}}">ua</a>
<?php }
else{
?>
<a class="lang_link" href="{{$changeUrl}}">en</a>
<?php } ?>
</div>
<div class="search">
<a href="#">
	<div class="magnifier">
		<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_407:196)">
			<path d="M14.8751 15.375L11.6975 12.1917L14.8751 15.375ZM13.4584 7.93746C13.4584 9.53428 12.8241 11.0657 11.695 12.1948C10.5658 13.324 9.03441 13.9583 7.43758 13.9583C5.84076 13.9583 4.30933 13.324 3.18021 12.1948C2.05108 11.0657 1.41675 9.53428 1.41675 7.93746C1.41675 6.34063 2.05108 4.80921 3.18021 3.68009C4.30933 2.55096 5.84076 1.91663 7.43758 1.91663C9.03441 1.91663 10.5658 2.55096 11.695 3.68009C12.8241 4.80921 13.4584 6.34063 13.4584 7.93746V7.93746Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
			</g>
			<defs>
			<clipPath id="clip0_407:196">
			<rect width="17" height="17" fill="white" transform="translate(0 0.5)"/>
			</clipPath>
			</defs>
			</svg>
	</div>
</a>
</div>
<div class="socials">
<a href="<?php echo $twitter;?>" target="_blank" class="social twitter">
	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M17.7324 3.70281C17.1061 3.98031 16.4334 4.16781 15.7261 4.25256C16.4559 3.8159 17.0018 3.12866 17.2621 2.31906C16.5765 2.7263 15.8261 3.01295 15.0436 3.16656C14.5174 2.60471 13.8204 2.2323 13.0609 2.10716C12.3013 1.98202 11.5217 2.11115 10.8431 2.4745C10.1644 2.83784 9.62471 3.41508 9.30775 4.11659C8.99078 4.81809 8.91428 5.60462 9.09013 6.35406C7.7009 6.28431 6.34185 5.92322 5.1012 5.29424C3.86055 4.66525 2.76601 3.78243 1.88863 2.70306C1.58863 3.22056 1.41613 3.82056 1.41613 4.45956C1.4158 5.0348 1.55746 5.60124 1.82854 6.10861C2.09962 6.61598 2.49175 7.04859 2.97013 7.36806C2.41534 7.35041 1.87279 7.2005 1.38763 6.93081V6.97581C1.38757 7.78261 1.66666 8.56459 2.17752 9.18906C2.68838 9.81352 3.39956 10.242 4.19038 10.4018C3.67572 10.5411 3.13613 10.5616 2.61238 10.4618C2.8355 11.156 3.27013 11.7631 3.85541 12.198C4.44069 12.6329 5.14732 12.8739 5.87638 12.8873C4.63876 13.8589 3.1103 14.3859 1.53688 14.3836C1.25817 14.3836 0.979688 14.3674 0.702881 14.3348C2.29999 15.3617 4.15914 15.9067 6.05788 15.9046C12.4854 15.9046 15.9991 10.5811 15.9991 5.96406C15.9991 5.81406 15.9954 5.66256 15.9886 5.51256C16.6721 5.01829 17.2621 4.40623 17.7309 3.70506L17.7324 3.70281Z" fill="white"/>
		</svg>
</a>
<a href="<?php echo $facebook;?>" target="_blank"  class="social facebook">
	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0_407:204)">
		<path d="M3.1041 0C1.38456 0 0 1.46601 0 3.28669V14.7133C0 16.534 1.38456 18 3.1041 18H8.95317V10.9631H7.19579V8.42963H8.95317V6.26513C8.95317 4.56458 9.99151 3.00319 12.3834 3.00319C13.3519 3.00319 14.068 3.10163 14.068 3.10163L14.0117 5.46752C14.0117 5.46752 13.2814 5.46021 12.4844 5.46021C11.6218 5.46021 11.4835 5.88101 11.4835 6.57959V8.42965H14.0803L13.9671 10.9632H11.4835V18H13.8959C15.6154 18 17 16.534 17 14.7133V3.28671C17 1.46603 15.6154 1.8e-05 13.8959 1.8e-05H3.10408L3.1041 0Z" fill="white"/>
		</g>
		<defs>
		<clipPath id="clip0_407:204">
		<rect width="17" height="18" fill="white"/>
		</clipPath>
		</defs>
		</svg>
</a>
<a href="<?php echo $youtube;?>" target="_blank" class="social youtube">
	<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0_407:206)">
		<path d="M10.5669 2.74866H10.6838C11.7626 2.75278 17.2292 2.79403 18.7031 3.20928C19.1487 3.33601 19.5547 3.58304 19.8806 3.92567C20.2066 4.2683 20.4409 4.69453 20.5603 5.16178C20.6929 5.68428 20.7861 6.37591 20.8491 7.08953L20.8622 7.23253L20.8911 7.59003L20.9016 7.73303C20.9869 8.98978 20.9974 10.1668 20.9987 10.4239V10.527C20.9974 10.7938 20.9856 12.0505 20.8911 13.3595L20.8806 13.5039L20.8687 13.6469C20.8031 14.4334 20.706 15.2144 20.5603 15.7892C20.4413 16.2566 20.207 16.683 19.8811 17.0257C19.5551 17.3684 19.1489 17.6153 18.7031 17.7417C17.1806 18.1707 11.3938 18.2009 10.5919 18.2023H10.4055C9.99994 18.2023 8.32256 18.194 6.56381 18.1308L6.34069 18.1225L6.2265 18.117L6.00206 18.1074L5.77763 18.0978C4.32075 18.0304 2.93344 17.9218 2.29425 17.7403C1.84864 17.614 1.44252 17.3674 1.11658 17.0249C0.790628 16.6825 0.556299 16.2563 0.437063 15.7892C0.291375 15.2158 0.19425 14.4334 0.128625 13.6469L0.118125 13.5025L0.107625 13.3595C0.04285 12.4278 0.00695607 11.4942 0 10.56L0 10.3909C0.002625 10.0953 0.013125 9.07366 0.084 7.94616L0.0931875 7.80453L0.097125 7.73303L0.107625 7.59003L0.1365 7.23253L0.149625 7.08953C0.212625 6.37591 0.305812 5.68291 0.438375 5.16178C0.55741 4.69435 0.79165 4.26791 1.11761 3.92522C1.44357 3.58253 1.8498 3.33563 2.29556 3.20928C2.93475 3.03053 4.32206 2.92053 5.77894 2.85178L6.00206 2.84216L6.22781 2.83391L6.34069 2.82978L6.56512 2.82016C7.81424 2.77805 9.06387 2.75467 10.3136 2.75003H10.5669V2.74866ZM8.4 7.16241V13.7872L13.8561 10.4762L8.4 7.16241Z" fill="white"/>
		</g>
		<defs>
		<clipPath id="clip0_407:206">
		<rect width="21" height="22" fill="white"/>
		</clipPath>
		</defs>
		</svg>
</a>
<a href="<?php echo $telegram;?>" target="_blank" class="social telegram">
	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M18 9C18 13.9703 13.9703 18 9 18C4.02975 18 0 13.9703 0 9C0 4.02975 4.02975 0 9 0C13.9703 0 18 4.02975 18 9ZM9.3225 6.64425C8.44725 7.008 6.6975 7.76175 4.074 8.90475C3.648 9.07425 3.4245 9.24 3.40425 9.402C3.36975 9.6765 3.71325 9.7845 4.17975 9.93075C4.2435 9.951 4.3095 9.97125 4.377 9.99375C4.83675 10.143 5.45475 10.3177 5.77575 10.3245C6.0675 10.3305 6.393 10.2105 6.75225 9.9645C9.20325 8.30925 10.4685 7.473 10.548 7.455C10.6042 7.44225 10.6823 7.42575 10.7347 7.473C10.7872 7.5195 10.782 7.608 10.7768 7.632C10.7423 7.77675 9.39675 9.0285 8.69925 9.6765C8.48175 9.87825 8.328 10.0215 8.2965 10.0545C8.226 10.1272 8.154 10.197 8.085 10.2638C7.6575 10.6748 7.338 10.9838 8.103 11.4878C8.4705 11.73 8.7645 11.9303 9.05775 12.1298C9.378 12.348 9.6975 12.5655 10.1115 12.837C10.2165 12.906 10.317 12.9773 10.4152 13.047C10.788 13.3132 11.1233 13.5517 11.5373 13.5142C11.7773 13.4917 12.0262 13.266 12.1522 12.5917C12.45 10.9972 13.0365 7.54425 13.1722 6.12075C13.1805 6.00256 13.1755 5.88382 13.1572 5.76675C13.1463 5.6722 13.1003 5.5852 13.0282 5.523C12.921 5.43525 12.7545 5.4165 12.6795 5.418C12.3413 5.424 11.8223 5.60475 9.3225 6.64425Z" fill="white"/>
		</svg>
		
</a>
</div>


<div class="account-block">
<a href="#" class="account">
	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1734 0.670822C10.2341 0.923086 9.65405 1.25325 8.99382 1.91151C7.80634 3.09578 7.3239 4.87494 7.77315 6.41331L7.9845 7.13677L3.99225 11.0707C1.79654 13.2343 0 15.0621 0 15.1325C0 15.2473 1.36761 16.6603 2.06261 17.2636L2.33506 17.5L3.12557 16.7188L3.91609 15.9375L4.43453 16.4212C4.71983 16.6873 4.98198 16.9325 5.01737 16.966C5.05263 16.9996 5.20704 17.1332 5.36047 17.2629L5.6394 17.4985L6.18698 16.9626L6.73456 16.4268L7.25961 16.9406L7.78454 17.4545L8.38881 16.8427L8.99309 16.2309L7.65132 14.8887L6.30955 13.5466L8.34951 11.5176L10.3895 9.4886L10.9716 9.68628C11.9714 10.026 13.4896 9.89642 14.4727 9.38737C15.0503 9.08834 15.8266 8.3683 16.225 7.76218C18 5.06188 16.5854 1.4955 13.4128 0.671677C12.5322 0.442978 12.0225 0.442856 11.1734 0.670822ZM13.018 3.22326C14.7685 3.84574 14.9317 6.27204 13.2774 7.07755C12.3481 7.52994 11.3802 7.33372 10.6933 6.55349C10.244 6.04334 10.108 5.54761 10.2174 4.81975C10.3172 4.15625 10.9094 3.46026 11.5712 3.22851C12.1821 3.01458 12.4289 3.01373 13.018 3.22326Z" fill="white"/>
		</svg>
		
</a>
</div>
</div>
<div class="header-middle-bottom">
<div class="main-menu">
<ul>




@foreach($homeMenu as $menuItem)

<li <?php if($menuItem['sub']){?>class="has-child" <?php } ?>>
<a href="{{$menuItem['link']}}">{{$menuItem['title']}}</a>
<?php
if($menuItem['sub']){
?>
<div class="arrm"></div>

<ul class="submenu">

@foreach($menuItem['sub'] as $menuItem)
<li <?php if($menuItem['sub']){?>class="has-child" <?php } ?>>
<a href="{{$menuItem['link']}}">{{$menuItem['title']}}</a>
<?php
if($menuItem['sub']){
?>
<div class="arrm"></div>
<ul class="submenu">
    @foreach($menuItem['sub'] as $menuItemSub)
	<li><a href="{{$menuItemSub['link']}}">{{$menuItemSub['title']}}</a></li>
	@endforeach
</ul>
<?php } ?>
</li>
@endforeach


</ul>
<?php } ?>

</li>
@endforeach

</ul>
</div>
</div>
</div>

</div>

<div class="header-right">
<a href="#" class="ua_map">
<svg xmlns="http://www.w3.org/2000/svg" width="123" height="72" viewBox="0 0 123 72" fill="none">
<mask id="mask0_407:270" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="123" height="72">
<path fill-rule="evenodd" clip-rule="evenodd" d="M75.3046 0.0595345C75.2296 0.0998295 75.0188 0.335375 74.8363 0.582911C74.3461 1.24775 74.2943 1.2674 73.0333 1.26799L71.9739 1.26851L71.5695 1.02216C71.3471 0.886662 71.0874 0.758898 70.9924 0.738128C70.5966 0.651772 70.0845 1.22337 69.8265 2.03949C69.6488 2.60159 69.5794 2.66043 68.6198 3.06325C67.6746 3.45991 67.3305 3.46993 66.7316 3.11822C66.3303 2.88254 66.2765 2.86996 65.4126 2.81054C64.9173 2.7764 64.3935 2.71769 64.2487 2.68008C63.7774 2.55763 63.6124 2.59543 63.1176 2.93928C62.8583 3.11946 62.6011 3.26688 62.5461 3.26688C62.491 3.26688 62.3172 3.19062 62.1599 3.09738C61.9127 2.95081 61.8229 2.93339 61.4971 2.96864C61.2898 2.99111 60.9337 3.08952 60.7057 3.18734C60.2636 3.37696 60.3466 3.28995 58.2184 5.79747L57.5024 6.64118L57.5095 7.62398C57.5159 8.5068 57.5376 8.66235 57.722 9.1527C57.835 9.45292 57.9744 9.8938 58.0318 10.1324C58.1635 10.6797 58.1107 10.7496 57.5855 10.7229C57.2178 10.7042 57.1958 10.692 57.0171 10.4086C56.7814 10.0347 56.1476 9.47919 55.7632 9.30969C55.4372 9.166 55.1443 9.1244 53.8238 9.03418C53.0861 8.98379 52.863 8.94219 52.5191 8.79083L52.1044 8.6083L51.7885 8.76993C51.5873 8.87287 51.3084 8.94396 51.0204 8.96571L50.5681 8.99991L50.2483 9.42291C49.8497 9.95022 49.7235 10.0208 49.5371 9.82068C49.3994 9.67287 49.3346 9.50206 49.0142 8.44299C48.8343 7.84813 48.5737 7.5257 48.2728 7.5257C48.1855 7.5257 47.92 7.59561 47.6829 7.68105C47.4457 7.76649 47.0752 7.88633 46.8596 7.94739C46.4526 8.06251 46.2577 8.21852 45.7985 8.79654C45.6625 8.96774 45.5099 9.09616 45.4593 9.08201C45.4088 9.06785 45.2318 8.82333 45.0659 8.53865C44.8376 8.14664 44.7182 8.01095 44.574 7.9795C44.4692 7.95663 44.0283 7.97517 43.5941 8.02064C42.9952 8.08335 42.7792 8.08505 42.6989 8.02746C42.6408 7.98572 42.4978 7.76675 42.3812 7.54084C42.2646 7.31499 42.1198 7.11371 42.0595 7.09353C41.8872 7.03607 41.6443 7.17995 41.0086 7.71597L40.4186 8.21367L40.2576 8.01711C40.169 7.909 39.9839 7.72063 39.8461 7.59856L39.5956 7.37651L39.4184 7.52131C39.3209 7.60092 39.2007 7.80397 39.1512 7.97262C38.9971 8.4977 38.9381 8.58504 38.7528 8.5621C38.5388 8.5357 38.4972 8.32223 38.6547 8.05753C39.0239 7.43692 38.4561 7.21055 37.5791 7.62883L37.2526 7.78451L36.7877 7.61973C36.532 7.52905 36.1264 7.43129 35.8863 7.40253C35.6464 7.3737 35.4162 7.32082 35.3751 7.28505C35.3339 7.24921 35.242 7.0326 35.1708 6.80367C35.0182 6.31273 35.0524 6.32622 33.6943 6.22192C32.9061 6.16138 32.7489 6.12829 32.3753 5.94391C32.001 5.75921 31.8624 5.73005 31.1974 5.69644C30.4815 5.66027 30.4275 5.64711 30.1232 5.43443C29.8588 5.24959 29.635 5.17588 28.842 5.01267C27.8926 4.81729 27.8535 4.8148 25.5822 4.80275L23.2833 4.79063L22.5819 4.54014L21.8804 4.28966L21.5267 4.40982C19.9627 4.94093 19.7466 4.97264 18.619 4.83629L18.0516 4.76769L17.2003 5.05808C15.4454 5.65674 15.5575 5.58925 14.934 6.42346C14.112 7.52315 13.4621 7.97013 12.9073 7.8172C12.8105 7.79047 12.5822 7.66978 12.4 7.5489C11.9541 7.25301 11.5251 7.24318 11.1684 7.52066L10.9223 7.71224L10.9296 9.2882L10.937 10.8642L11.4723 11.5701C11.887 12.1167 12.0446 12.3942 12.1711 12.8001C12.4283 13.6246 12.7208 14.0411 13.3234 14.4412C13.5159 14.5689 13.6734 14.7157 13.6734 14.7675C13.6734 14.8608 13.4125 14.9509 13.2124 14.9266C12.7188 14.8667 12.7278 15.0778 13.2595 16.0343C13.5393 16.5375 13.6718 16.8559 13.6685 17.0171C13.6657 17.1482 13.5532 17.5945 13.4184 18.009L13.1732 18.7624L12.5453 18.7952L11.9175 18.828L11.5706 19.181C11.3798 19.3752 10.8816 19.8505 10.4635 20.2373C9.47406 21.1527 8.54087 22.1686 6.73284 24.2989C4.58684 26.8273 4.42343 27.0402 4.29168 27.4799C4.14659 27.964 4.14666 28.3282 4.29176 29.2045C4.4624 30.2351 4.64111 30.6913 5.03824 31.1097C5.88739 32.0046 5.3126 32.2719 4.25347 31.4746C3.88218 31.1951 3.71719 31.113 3.5268 31.113C3.19275 31.113 3.10547 31.239 2.73811 32.252C2.40308 33.1757 2.06247 33.8262 1.51625 34.5856C1.11496 35.1434 0.897287 35.8009 0.832241 36.6512L0.791992 37.177L1.12717 37.3613C1.5586 37.5986 1.72608 37.809 1.88896 38.3182C2.05418 38.8347 2.26808 39.0224 2.89247 39.1986C3.32759 39.3215 3.3848 39.358 3.44028 39.5484C3.52168 39.8279 3.70438 39.9227 4.50906 40.103C5.18341 40.2541 5.26308 40.3039 5.33951 40.6225C5.39634 40.8592 5.84088 41.0066 6.49775 41.0066C7.11129 41.0066 7.27311 40.9239 7.53314 40.4778C7.63671 40.3002 7.76409 40.1548 7.81617 40.1548C7.86825 40.1548 8.18142 40.3923 8.51208 40.6824C8.84281 40.9726 9.22488 41.2706 9.36123 41.3446L9.60913 41.479L10.239 41.3084C10.5855 41.2145 10.9063 41.1376 10.952 41.1376C10.9976 41.1376 11.174 41.2468 11.344 41.3804C11.6931 41.6546 11.7008 41.6554 13.0486 41.5675C13.8408 41.5159 13.9185 41.5218 14.2922 41.6632C14.8167 41.8616 15.5908 41.8631 16.4523 41.6674C16.7992 41.5885 17.2231 41.5328 17.3943 41.5437C17.6726 41.5614 17.7198 41.59 17.841 41.8144C18.0048 42.1179 18.8464 42.86 19.3603 43.1543C19.9288 43.4797 20.2307 43.5392 20.6341 43.4053C21.0934 43.2528 21.7059 42.7245 21.9269 42.2901C22.0263 42.0947 22.1686 41.9199 22.2433 41.9019C22.3178 41.8838 22.7689 41.85 23.2456 41.8268C24.7481 41.7538 26.2337 41.5993 26.7269 41.4648C28.0898 41.0932 30.7022 39.4344 30.9388 38.7902C31.146 38.2265 31.3299 37.9271 31.4688 37.9271C31.5456 37.9271 31.828 37.9989 32.0962 38.0867C32.5795 38.2448 32.5855 38.2452 32.7678 38.1205C32.869 38.0513 32.9719 37.9248 32.9966 37.8393C33.0359 37.7032 33.0992 37.6787 33.5086 37.6415C33.7656 37.6181 34.0533 37.5549 34.148 37.501C34.398 37.3585 34.5377 37.3789 34.8268 37.5995C34.9685 37.7076 35.1518 37.7961 35.2344 37.7961C35.3169 37.7961 35.6035 37.6189 35.8713 37.4023L36.3583 37.0085L36.768 37.0503C37.0677 37.0809 37.2767 37.0613 37.5457 36.9771C37.8804 36.8726 37.9339 36.8713 38.1373 36.9627C38.2603 37.0179 38.5544 37.0942 38.7908 37.1322C39.3119 37.216 39.5187 37.305 40.3912 37.8214C41.0622 38.2186 41.5195 38.5768 41.8413 38.9572C41.9365 39.0697 42.1056 39.1717 42.2342 39.194C42.4018 39.2232 42.5008 39.3027 42.618 39.5024C42.7834 39.7844 43.1133 39.9583 43.4826 39.9583C43.5886 39.9583 43.911 39.8551 44.1992 39.7289C44.4873 39.6028 44.7928 39.4996 44.878 39.4996C45.1997 39.4996 45.5476 39.6875 45.7484 39.9697C46.2592 40.6876 46.9503 41.1411 47.6207 41.1981C48.1104 41.2398 48.1147 41.2433 48.3467 41.8024C48.4312 42.0058 48.6345 42.3528 48.7985 42.5733L49.0967 42.9744L48.8966 43.1207C48.7865 43.2012 48.584 43.3507 48.4465 43.453L48.1965 43.639L48.2382 44.2065C48.2711 44.6534 48.249 44.868 48.1341 45.2159C47.9434 45.7935 48.0034 45.8749 48.6531 45.9203L49.1248 45.9534L49.2124 46.336C49.2606 46.5465 49.3478 46.7454 49.4064 46.7782C49.5298 46.8471 49.8758 46.7962 50.1686 46.6662C50.456 46.5386 50.6812 46.5503 50.6812 46.6928C50.6812 46.7571 50.5606 47.0668 50.4132 47.3811C50.2296 47.7725 50.1406 48.0711 50.1305 48.3289L50.1159 48.7052L50.4698 48.7977C50.7848 48.8799 50.8486 48.9305 51.0482 49.2563C51.1716 49.4577 51.3456 49.7925 51.4349 50.0002C51.6077 50.4021 51.8437 50.5725 52.2275 50.5725C52.336 50.5725 52.4987 50.6054 52.5893 50.6457C52.8609 50.7662 53.47 51.3127 53.47 51.4358C53.47 51.4989 53.4027 51.699 53.3203 51.8804C53.2059 52.1328 53.1809 52.2989 53.214 52.5872C53.2378 52.7945 53.2227 53.094 53.1805 53.2528C53.079 53.635 53.2352 53.9891 53.5843 54.1681C53.7226 54.2391 53.8949 54.3756 53.9672 54.4715C54.1386 54.6989 54.0135 54.7826 53.5611 54.7437C53.193 54.712 52.9673 54.565 52.819 54.2604C52.7053 54.027 52.5176 53.9141 52.243 53.9141C52.0326 53.9141 51.8841 54.0439 51.6998 54.3891C51.6202 54.538 51.5157 54.6348 51.4346 54.6348C51.361 54.6348 51.0991 54.5058 50.8527 54.348C50.0799 53.8535 49.91 53.8198 49.3351 54.0466C48.8382 54.2425 48.7492 54.2222 48.6898 53.8994C48.6274 53.5597 48.4615 53.3899 48.1923 53.3899C47.9599 53.3899 47.0317 53.775 46.7874 53.9729C46.5938 54.1298 46.4667 54.5933 46.4078 55.3581C46.3572 56.0144 46.4529 56.2427 46.8731 56.4684C47.0191 56.5469 47.1387 56.6518 47.1387 56.7016C47.1387 56.7514 46.9293 56.9867 46.6734 57.2246C46.2411 57.6263 46.2057 57.6823 46.1738 58.0163L46.1395 58.3757L45.667 58.562C45.144 58.7681 45.1061 58.8214 45.0349 59.448C44.9854 59.8843 45.036 59.8509 44.0305 60.11C43.7926 60.1713 43.5595 60.2618 43.5124 60.3111C43.4653 60.3604 43.3823 60.6986 43.3278 61.0627C43.2734 61.4268 43.2116 61.7395 43.1907 61.7577C43.1697 61.776 42.9129 61.8137 42.62 61.8417C41.7889 61.921 41.7205 62.0381 42.0565 62.807C42.1631 63.051 42.281 63.4105 42.3184 63.6058C42.3644 63.8456 42.4516 64.02 42.5872 64.143C42.9782 64.4978 44.5701 65.118 45.0898 65.118C45.3346 65.118 45.4296 65.0783 45.6082 64.9016C45.7285 64.7825 45.8719 64.5905 45.927 64.4748C45.9859 64.3511 46.093 64.2543 46.1873 64.2396C46.2752 64.2257 46.5518 64.1821 46.8017 64.1425C47.0516 64.1029 47.7978 63.9213 48.4599 63.7387C49.8035 63.3683 50.3651 63.285 50.6437 63.4146C50.7437 63.4612 50.9648 63.6718 51.135 63.8827C51.3051 64.0935 51.5076 64.2955 51.5849 64.3315C51.7571 64.4115 51.9437 64.3568 51.9951 64.2111C52.1488 63.7751 52.4144 62.8334 52.4145 62.7238C52.4147 62.6502 52.2946 62.4793 52.1477 62.3439C51.8317 62.0528 51.7364 61.8595 51.7364 61.5102C51.7364 61.2102 51.7977 61.1901 52.0238 61.4162C52.3662 61.7584 52.7484 61.5513 52.8889 60.9473L52.9827 60.5439L54.145 59.8698C55.6264 59.0106 56.2721 58.4899 56.6062 57.8855C56.7434 57.6373 56.8781 57.3036 56.9057 57.1438C56.9501 56.8863 56.9355 56.8414 56.7768 56.7467C56.5143 56.5899 55.6497 55.863 55.6872 55.8305C55.7487 55.7771 57.0668 56.4084 57.3794 56.641C57.6772 56.8626 57.7042 56.87 57.87 56.7755C57.9664 56.7206 58.3285 56.2385 58.6745 55.7044L59.3036 54.7331L59.3349 54.1106C59.352 53.7683 59.3993 53.4524 59.4397 53.4088C59.4803 53.3651 59.7054 53.2641 59.94 53.1843C60.3179 53.0558 60.5168 53.0384 61.6855 53.031C62.5032 53.0258 63.138 52.9904 63.3557 52.938C63.6901 52.8572 63.7238 52.8618 64.0632 53.0348L64.4197 53.2163L64.7674 53.0491C65.0141 52.9304 65.2682 52.8726 65.6426 52.8502C65.9328 52.8329 66.3488 52.7633 66.567 52.6955L66.9639 52.5722L67.2831 52.7197C67.7894 52.9537 68.3183 53.3783 68.3183 53.5508C68.3183 53.9214 67.9867 53.9257 66.0098 53.5806C65.3698 53.4689 64.794 53.395 64.7304 53.4162C64.6618 53.4391 64.6243 53.515 64.6386 53.6022C64.6701 53.7941 65.2646 54.103 66.2053 54.4162C66.6006 54.5478 66.9384 54.6659 66.9561 54.6786C67.0193 54.724 66.6918 54.8944 66.3441 54.9971C65.7116 55.1838 65.4365 55.4801 65.7114 55.6783C65.77 55.7206 66.2193 55.8272 66.7101 55.9153C67.2942 56.0201 67.7454 56.1439 68.0168 56.2737C69.0026 56.7455 70.2741 57.2582 70.6895 57.3514C71.398 57.5104 72.142 57.4801 73.2104 57.249C73.805 57.1204 74.2444 57.0592 74.4078 57.0822C74.5498 57.1022 74.976 57.2812 75.355 57.48C76.1324 57.8876 76.5782 58.042 76.9768 58.0415C77.2344 58.0412 77.3515 57.9935 77.8526 57.6852C78.0551 57.5605 78.0618 57.5604 78.1635 57.6813C78.3346 57.8847 78.2936 58.4174 78.0829 58.7301C77.7203 59.2678 76.2593 60.0677 74.6119 60.6304C74.1144 60.8003 73.5378 61.0133 73.3306 61.1037C72.8651 61.3066 72.1178 61.7657 71.846 62.0155C71.3744 62.4491 71.0931 63.4753 71.3722 63.7434C71.6156 63.9771 72.0128 64.0208 73.0741 63.9306C74.2444 63.8311 74.4521 63.8847 74.7831 64.3714C75.1535 64.9164 75.4684 65.2331 75.7131 65.3073C76.0486 65.409 76.488 65.3981 76.99 65.2757C77.3872 65.1788 77.4363 65.1793 77.666 65.2825L77.9137 65.3939L77.8632 66.7161C77.7953 68.4899 77.7482 68.7124 77.3281 69.2432C76.73 69.9988 76.7798 70.218 77.7375 71.0456L78.3363 71.5631L79.2629 71.4107C79.7725 71.3268 80.6373 71.2403 81.1847 71.2184L82.18 71.1787L82.4857 70.9189C82.654 70.7761 82.9693 70.3958 83.1864 70.0739C83.6708 69.3557 84.1336 68.922 84.6597 68.6931C84.8797 68.5974 85.5662 68.4034 86.1852 68.2622C88.0341 67.8403 90.013 67.1081 90.5785 66.6367C90.7375 66.5041 90.9501 66.2556 91.0508 66.0845C91.2204 65.7964 91.2552 65.7733 91.5181 65.7733C91.6742 65.7733 91.9974 65.8329 92.2362 65.9059C93.0759 66.1624 95.9609 66.4953 96.5342 66.4018C96.8566 66.3492 97.2931 65.9493 97.4125 65.5971C97.4714 65.4234 97.4755 65.1977 97.4262 64.856C97.3142 64.0804 97.5369 63.8076 98.282 63.8076C98.6184 63.8076 98.72 63.55 98.5281 63.1838C98.4201 62.9776 97.3767 62.3662 97.1329 62.3662C96.9142 62.3662 95.7758 62.6899 95.2134 62.9119L94.7861 63.0806L94.3369 62.8282C93.6035 62.4161 93.605 62.4165 93.2958 62.5288C93.1441 62.5839 92.7855 62.7802 92.4988 62.9649C91.4797 63.6216 90.8577 63.7315 89.7235 63.455C88.8257 63.2362 88.7279 63.1954 88.4569 62.9271C88.1788 62.6517 88.1442 62.3621 88.3345 61.8994C88.484 61.5359 88.502 61.0107 88.3741 60.7423C88.2786 60.5418 87.959 60.3268 87.1614 59.9261C86.6488 59.6686 85.3537 58.6947 85.3169 58.5391C85.2991 58.4638 85.2717 58.1413 85.2562 57.8223C85.2236 57.1529 85.1891 57.1854 86.0506 57.0721C86.3758 57.0293 86.6843 56.9377 86.9027 56.8191C87.7725 56.3467 88.3452 56.07 88.5181 56.0384C88.9549 55.9586 89.1884 55.7975 89.4015 55.429C89.5236 55.2177 89.6618 55.0637 89.7257 55.0678C89.787 55.0717 89.9836 55.0967 90.1626 55.1235C90.4794 55.1707 90.4964 55.1641 90.8063 54.8706C90.9813 54.7049 91.1603 54.5693 91.2039 54.5693C91.2476 54.5693 91.6533 54.3603 92.1054 54.1049C93.6189 53.2498 94.0762 53.1036 95.4735 53.0279C96.2297 52.987 96.3112 52.9689 96.6479 52.7675C97.0933 52.5012 97.6902 52.2406 98.5888 51.9201L99.2757 51.6752L99.7052 51.8858C100.305 52.18 100.677 52.183 100.953 51.8956C101.067 51.7774 101.253 51.4742 101.367 51.2219C101.481 50.9679 101.646 50.7236 101.735 50.6749C101.824 50.6264 102.185 50.552 102.537 50.5095C103.736 50.365 103.794 50.3426 104.499 49.746L105.141 49.2024L106.044 49.097C106.829 49.0054 107.107 49.0024 108.173 49.0734L109.399 49.1551L109.702 48.8986C109.885 48.7428 110.035 48.5388 110.084 48.3789C110.128 48.234 110.229 47.9361 110.308 47.7168C110.43 47.3807 110.44 47.2623 110.373 46.9633C110.257 46.4491 110.392 45.1611 110.614 44.6622C110.71 44.4463 110.884 44.3938 112.051 44.2264C113.537 44.0132 113.818 43.8148 114.302 42.6377C114.636 41.8281 114.668 41.8089 115.444 41.9615C116.308 42.1316 118.871 42.1374 119.505 41.9708C120.259 41.7728 120.775 41.1584 120.778 40.4541C120.779 40.3436 120.868 40.1204 120.975 39.9583C121.263 39.5259 121.531 38.8751 121.531 38.6099C121.531 38.4329 121.474 38.3332 121.289 38.1863C121.051 37.9971 121.049 37.9896 121.139 37.6976C121.283 37.2267 121.253 37.0263 120.911 36.1943C120.657 35.576 120.528 35.3576 120.298 35.1549C120.016 34.9068 120.008 34.8873 120.057 34.5679C120.115 34.1855 120.267 33.8983 120.442 33.84C120.509 33.8177 120.671 33.7991 120.802 33.7987C121.176 33.7977 121.808 33.5104 121.982 33.2624C122.164 33.0022 122.186 32.5856 122.019 32.5302C121.956 32.5091 121.739 32.5251 121.538 32.5656C121.206 32.632 121.144 32.6252 120.904 32.496C120.614 32.3403 120.174 31.8172 120.174 31.6277C120.174 31.5401 120.286 31.4824 120.608 31.4034C121.289 31.2362 121.554 31.0467 122.092 30.343C122.36 29.9917 122.675 29.6038 122.79 29.4808C122.97 29.29 123.001 29.199 123 28.8584C122.998 28.3944 122.813 27.9215 122.547 27.7044C122.286 27.4914 122.313 27.3111 122.662 26.9444C122.828 26.77 122.963 26.5911 122.963 26.5469C122.963 26.5027 122.833 26.3474 122.673 26.2017C122.219 25.7867 121.867 25.8309 121.078 26.4014L120.602 26.7456L120.294 26.4296C120.125 26.2558 119.816 25.8912 119.609 25.6195C119.133 24.9949 118.956 24.8826 118.394 24.8484C117.865 24.8161 117.316 24.5989 116.837 24.2327C116.438 23.9269 116.221 23.9059 115.388 24.0926L114.861 24.2108L114.446 23.9022C114.218 23.7325 113.921 23.5452 113.787 23.486C113.652 23.4267 113.542 23.3527 113.542 23.3213C113.542 23.29 113.443 23.1729 113.323 23.061C113.124 22.8754 113.063 22.8575 112.635 22.8575C111.85 22.8575 111.624 22.7621 110.814 22.0888C110.244 21.6144 110.037 21.4815 109.87 21.4815C109.419 21.4815 109.171 21.8237 109.171 22.45C109.17 22.7932 108.992 23.1851 108.837 23.1851C108.774 23.1851 108.558 23.0597 108.357 22.9066C108.155 22.7535 107.713 22.4405 107.375 22.2111C106.64 21.7135 106.251 21.2401 105.967 20.4999C105.797 20.0544 105.715 19.9385 105.434 19.7379C105.251 19.6078 104.957 19.2908 104.78 19.0336C104.558 18.7103 104.407 18.5595 104.291 18.5452C104.2 18.5338 103.813 18.6465 103.432 18.7956C102.745 19.0646 102.327 19.1887 100.804 19.5767C99.3389 19.9498 98.5332 19.9937 97.9081 19.7346C97.6436 19.6249 97.6104 19.6247 97.2655 19.7312C96.6628 19.9173 96.6263 19.9026 96.2837 19.3357C96.115 19.0564 95.8549 18.7141 95.7059 18.5749L95.4349 18.3219L94.6334 18.3681C93.5869 18.4285 93.1512 18.5023 92.8908 18.6634C92.7738 18.7359 92.6282 18.7952 92.5673 18.7952C92.3625 18.7952 91.4226 17.8052 91.091 17.2402C90.8805 16.8814 90.888 16.7006 91.1298 16.2984C91.3152 15.9903 91.3235 15.9426 91.2434 15.6412C91.1959 15.4625 91.0036 15.0039 90.8159 14.622C90.4439 13.8649 90.4431 13.9637 90.8254 13.5048C90.9385 13.3689 90.9385 13.3452 90.824 13.1934C90.7559 13.1031 90.4042 12.8998 90.0425 12.7417C89.2136 12.3795 89.0942 12.2589 88.9329 11.6207C88.8245 11.1917 88.4959 11.0977 87.8119 11.3003C87.3147 11.4476 86.5488 11.4033 86.1062 11.2017C85.3039 10.8361 84.8161 10.717 84.0937 10.7101C83.6607 10.7059 83.366 10.6736 83.309 10.624C83.2498 10.5726 83.2076 10.238 83.1891 9.67398C83.149 8.45085 83.1504 8.45511 82.6355 7.94811C82.3867 7.70307 82.1945 7.47093 82.2084 7.43227C82.2223 7.39355 82.5708 7.20767 82.9828 7.0191C83.7782 6.6552 84.0711 6.43204 84.0711 6.19014C84.0711 5.97595 83.6707 5.48121 83.0663 4.9484C82.4605 4.41441 82.2013 3.98584 81.8434 2.92677C81.5565 2.07756 81.2525 1.614 80.604 1.03644C80.0676 0.558865 79.5541 0.338192 78.8239 0.271558C78.4931 0.241418 78.3967 0.260943 78.1469 0.408495C77.9867 0.503106 77.8086 0.580552 77.7512 0.580552C77.6937 0.580552 77.337 0.459209 76.9584 0.310936C76.2307 0.0259229 75.5577 -0.0764201 75.3046 0.0595345ZM82.3485 56.9037C82.8337 57.2783 83.2688 57.4562 83.5781 57.4067C83.7923 57.3724 83.7993 57.3773 83.6851 57.4822C83.5979 57.5624 83.3916 57.6046 82.9635 57.6302C82.2564 57.6723 82.0475 57.6061 81.4475 57.1498C81.0318 56.8338 81.0155 56.7081 81.3821 56.646C81.8346 56.5694 81.9582 56.6024 82.3485 56.9037ZM84.2068 56.94C84.238 57.0824 83.9273 57.2404 83.8446 57.1241C83.8136 57.0803 83.8054 56.9873 83.8264 56.9173C83.8737 56.7603 84.1713 56.778 84.2068 56.94Z" fill="white"/>
</mask>
<g mask="url(#mask0_407:270)">
<rect x="-20.1267" width="165.146" height="36.332" fill="#0071BB"/>
<rect x="-20.1265" y="31.9281" width="165.146" height="40.7359" fill="#FFE200"/>
</g>
</svg>
</a>
</div>
<div class="menu-button">

</div>
</div>

</header>