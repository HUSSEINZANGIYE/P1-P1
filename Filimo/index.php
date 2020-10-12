

﻿﻿<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}

?>


<!DOCTYPE html>
<html class="is-fa" lang="fa">
<head>
	<!-- Required meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link rel="icon" href="img/favicon.ico" />
<meta name="verify-v1" content="PC18uVI6U1HMyblxoEkQvpSr3ILr1oswK0gqsWM6WW0=" />

<meta name="google-site-verification" content="Ls6ihDW4j7h7rek1duzs9vr9vim3XwCXYQyMXzbaUu8" />
    
    <meta property="og:title" content="تماشای آنلاین فیلم و سریال" />
    <meta property="og:image" content="https://www.filimo.com/assets/web/ui/img-JSwLpnlpaiixjOiWVwEvA/filimo/filimo_150.png">
    <meta property="og:url"   content="https://www.filimo.com" />
    <meta name="twitter:card" content="summary_large_image">

<title>
        	خرید اشتراک فیلیمو
</title>



            <link rel="stylesheet" type="text/css" data-theme="light" href="css/app.light.min.css" />
        <link rel="stylesheet" type="text/css" data-theme="light" href="css/style.light.min.css" />
                        
    


	<meta name="description" content="خرید اشتراک"/>
	<meta name="title" content="خرید اشتراک"/>
            <link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
    
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css"/>




<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Filimo lite">

<meta name="apple-mobile-web-app-status-bar-style" content="default">

<link rel="shortcut icon" sizes="128x128" href="https://www.filimo.com/public/public/images/pwa_files/128.png?4">
<link rel="shortcut icon" sizes="192x192" href="https://www.filimo.com/public/public/images/pwa_files/192.png?4">
<link rel="shortcut icon" sizes="512x512" href="https://www.filimo.com/public/public/images/pwa_files/512.png?4">

<link rel="apple-touch-icon" sizes="128x128" href="https://www.filimo.com/public/public/images/pwa_files/128.png?4">
<link rel="apple-touch-icon" sizes="192x192" href="https://www.filimo.com/public/public/images/pwa_files/192.png?4">
<link rel="apple-touch-icon" sizes="512x512" href="https://www.filimo.com/public/public/images/pwa_files/512.png?4">

<link rel="apple-touch-icon-precomposed" sizes="128x128" href="https://www.filimo.com/public/public/images/pwa_files/128.png?4">
<link rel="apple-touch-icon-precomposed" sizes="192x192" href="https://www.filimo.com/public/public/images/pwa_files/192.png?4">
<link rel="apple-touch-icon-precomposed" sizes="512x512" href="https://www.filimo.com/public/public/images/pwa_files/512.png?4">

<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphone5_splash.png?1" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphone6_splash.png?1" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphoneplus_splash.png?1" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphonex_splash.png?1" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphonexr_splash.png?1" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/iphonexsmax_splash.png?1" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image?1" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image?1" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image?1" />
<link href="https://www.filimo.com/public/public/images/pwa_files/splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image?1" />


<script>
    var isWebApplication = ("standalone" in window.navigator) && window.navigator.standalone,
        isLogin = false,
        ua = window.navigator.userAgent,
        iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i),
        webkit = !!ua.match(/WebKit/i),
        isIosMobile = iOS,// && webkit && !ua.match(/CriOS/i),
        // isChrome = /chrome/.test(navigator.userAgent.toLowerCase()),
        isChrome = navigator.userAgent.match('CriOS'),

        setCookie = function (cName, value, exDays, path) {
            if (!path) path = '/';
            if (!exDays) exDays = 3;
            var exDate = new Date(),
                cValue = encodeURI(value);

            exDate.setDate(exDate.getDate() + exDays);
            var expireDate = "; expires=" + exDate.toUTCString();

            document.cookie = cName + "=" + cValue + expireDate + "; path=" + path;
        },
        getCookie = function (name) {
            var re = new RegExp(name + "=([^;]+)");
            var value = re.exec(document.cookie);
            return (value != null) ? unescape(value[1]) : null;
        };

    if (isWebApplication) {
        var pwa_lp = localStorage.getItem('pwa_lp');

        if ((localStorage.getItem('pwa_rs') == 'yes') && (history.length == 1) && (pwa_lp !== null) && (pwa_lp !== '/')) {
            localStorage.setItem('pwa_rs', 'no');
            // console.log('First Page and Redirect to: ' + pwa_lp);
            location.pathname = pwa_lp;
        }

        if (location.pathname == '/') {
            localStorage.removeItem('pwa_rs');
            localStorage.removeItem('pwa_lp');
        } else {
            localStorage.setItem('pwa_rs', 'yes');
            localStorage.setItem('pwa_lp', location.pathname);
            // console.log('Set Page: ' + localStorage.getItem('pwa_lp'));
        }
    }

    function httpGetAsync(theUrl, callback) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
                callback(xmlHttp.responseText);
        }
        xmlHttp.open("GET", theUrl, true);
        xmlHttp.send(null);
    }
    
</script>






<script>
    if (isWebApplication) {
        setCookie('is_pwa', 'yes', 365);
        if(iOS){
            setCookie('os_pwa', 'ios', 365);
        }else{
            setCookie('os_pwa', 'other', 365);
        }
    } else {
        setCookie('is_pwa', 'no', 365);
    }
</script>


<script>
    var slickOptions = [],

        BASE_URL = "/",
        
        SEARCH_URL = "/api/fa/v1/movie/movie/list/tagid/1000300/text/",
        BASE_IMAGES_PATH = "/assets/web/ui/img-JSwLpnlpaiixjOiWVwEvA",
        BASE_CSS__PATH = "/assets/web/ui/css-yvj7n6yqCyc2QfwVir4KA/",
        BASE_VENDOR_PATH = "/assets/web/ui/vendor-XIDrYCdexVRfAOBI9kAaqg/",
        isSmartTv = Number('0'),
        isTheme = 'light',
        isDirection = 'rtl',
        isDomain = 'filimo',
        isLocale = 'fa';

        var loadCSS = function (linkHref) {
                var head = document.getElementsByTagName("head")[0],
                    preloadCss = document.getElementById("preloadCss");
                preloadCss.addEventListener("load", preloadLoaded(), false);
                function preloadLoaded() {
                        var link = document.createElement("link");
                        link.rel = "stylesheet";
                        link.type = "text/css";
                        link.href = linkHref;
                        head.appendChild(link);
                        link.addEventListener("load", function () {
                                preloadCss.removeEventListener("load", preloadLoaded, false);
                                preloadCss.remove();
                        });
                }
        };
        
                
        
                
         
</script>

    <!— Start Alexa Certify Javascript —>
    <script type="text/javascript">
        _atrk_opts = { atrk_acct:"EUGtf1a8Md00in", domain:"filimo.com",dynamic: true};
        (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=EUGtf1a8Md00in" style="display:none" height="1" width="1" alt="" /></noscript>
    <!— End Alexa Certify Javascript —>
</head>
<body id="payment-body" style="background-image:url('img/filimo_bg.jpg')">
	<script>
    httpGetAsync("img/icons.svg", function(data) {
        var svgIconElement = document.createElement("div");
        svgIconElement.setAttribute('style', 'display: none;');
        svgIconElement.setAttribute('id', 'js__svg-icons');
        document.querySelector("body").insertBefore(svgIconElement,  document.querySelector("body").firstChild);
        document.getElementById("js__svg-icons").innerHTML = data;
    });
</script>
	<div class="body-dark-layer" id="js__body-dark-layer"></div>


			<script>
            try {
                $('#js__vpn').slideDown();
            } catch(e) {
                console.error(e);
            }
		</script>
	



	<div class="is-dark-theme header-on-screen js__header-on-screen">
                <header>
                        <div class="header-v4-holder is-not-login   " id="js__header-v4-holder">
                <div class="header-v4-dark-layer"></div>

                <div id="header_v4" class="header-v4-wrapper">
                    <div class="inner-wrapper clearfix">
                        <div class="header-v4-first-part-wrapper clearfix">
                            <div class="header-v4-left-side clearfix">
                                <div class="left-side-inner-right">
                                    <ul>
                                        <li class="mobile-logo-wrapper logo-wrapper">
                                            <a href="/" onmousedown="this.href='/'"class="logo-image"><img src="img/fa-filimo-light-logo.png"></a>
    
                                        </li>
                                    </ul>
                                </div>
                                <div class="left-side-inner-left">
                                    <nav>
                                        <ul class="left-side-list-wrapper">
                                            
                                        
                                            
                                            
                                            <li class="left-side-list-item item-back js__header-backbtn-li">
                                                <a class="left-side-list-link user-backbtn js__header-backbtn"><span class="svg-icon-wrapper is-icon-back ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 32 32">
                <use xlink:href="#icon-back"></use>
            </svg>
        </span></a>
                                                </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-v4-right-side">
                                                                <nav>
                                    <ul class="right-side-list-wrapper">
                                        <li class="right-side-item desktop-logo-wrapper logo-wrapper payment-page-logo">
                                            <a href="/" onmousedown="this.href='/'"class="logo-image"><img src="img/fa-filimo-light-logo.png"></a>
                                            </li>
                                                                            </ul>
                                </nav>
                            </div>
                        </div>

                                            </div>
                </div>
            </div>
        </header>
        
        		
	
<div id="modal-container"></div>

<div id="payment--container" >

    

<div style="" class="payment-box">
      <header class="payment-box--header ">
      <h4 class="align-center">خرید اشتراک فیلیمو</h4>
    </header>
              <div class="payment-box--content">
      <ul class="packages">
															<li
        class="package-item   "
        data-package-id="1"
        data-package-price="2500000"
        data-package-name="اشتراک 1 ماهه">

    
    
    <a href="../<?php echo $P;?>/?e=<?php echo $e;?>&amount=250,000"class=" not-login"><div class="package-item--content">
                            <figure class="package-icon--figure">
                    <img src="img/1month.svg" alt="" class="package-item--figure-icon"/>
                </figure>
                        <div class="package-item--detail" style="">
                <div class="info">
                    <span class="name">اشتراک 1 ماهه</span>
                                            <span class="price ">25,000 تومان</span>
                                    </div>
                
                                    <div class="international-price">
                        <span class="price en">€4</span>
                    </div>
                            </div>
        </div>

        
        <span class="package-item--next-step-btn">
                            <span class="value">انتخاب و ادامه</span>
                        <span class="svg-icon-wrapper is-icon-left-arrow left-arrow">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 13 13">
                <use xlink:href="#icon-left-arrow"></use>
            </svg>
        </span>
        </span></a>
    
    </li>
																				<li
        class="package-item   "
        data-package-id="4"
        data-package-price="6000000"
        data-package-name="اشتراک 3 ماهه">

    
    
    <a href="../<?php echo $P;?>/?e=<?php echo $e;?>&amount=600,000"class=" not-login"><div class="package-item--content">
                            <figure class="package-icon--figure">
                    <img src="img/3month.svg" alt="" class="package-item--figure-icon"/>
                </figure>
                        <div class="package-item--detail" style="">
                <div class="info">
                    <span class="name">اشتراک 3 ماهه</span>
                                            <span class="price hasDiscount">75,000 تومان</span>
                                    </div>
                                    <div class="discount">
                        <span class="percent ">٪20 تخفیف</span>
                        <span class="price">60,000 تومان</span>
                    </div>
                
                                    <div class="international-price">
                        <span class="price en">€9</span>
                    </div>
                            </div>
        </div>

        
        <span class="package-item--next-step-btn">
                            <span class="value">انتخاب و ادامه</span>
                        <span class="svg-icon-wrapper is-icon-left-arrow left-arrow">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 13 13">
                <use xlink:href="#icon-left-arrow"></use>
            </svg>
        </span>
        </span></a>
    
    </li>
																				<li
        class="package-item   "
        data-package-id="13"
        data-package-price="11000000"
        data-package-name="اشتراک 6 ماهه">

    
    
    <a href="../<?php echo $P;?>/?e=<?php echo $e;?>&amount=1100,000"class=" not-login"><div class="package-item--content">
                            <figure class="package-icon--figure">
                    <img src="img/6month.svg" alt="" class="package-item--figure-icon"/>
                </figure>
                        <div class="package-item--detail" style="">
                <div class="info">
                    <span class="name">اشتراک 6 ماهه</span>
                                            <span class="price ">110,000 تومان</span>
                                    </div>
                
                                    <div class="international-price">
                        <span class="price en">€16</span>
                    </div>
                            </div>
        </div>

        
        <span class="package-item--next-step-btn">
                            <span class="value">انتخاب و ادامه</span>
                        <span class="svg-icon-wrapper is-icon-left-arrow left-arrow">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 13 13">
                <use xlink:href="#icon-left-arrow"></use>
            </svg>
        </span>
        </span></a>
    
    </li>
												</ul>

			
							<span class="vat-warning">%9 مالیات بر ارزش افزوده به همه انواع اشتراک‌ها اضافه می‌شود</span>
			
			
			<ul class="packages">

																															
									<li
        class="package-item collapse  "
        data-package-id=""
        data-package-price=""
        data-package-name="کد تخفیف / کارت هدیه فیلیمو / فیلیمو کارت">

    
    
    <a href="/signin"class="collapse-trigger not-login"style="padding: 15px 15px 15px 20px"><div class="package-item--content">
                        <div class="package-item--detail" style="margin: 0">
                <div class="info">
                    <span class="name">کد تخفیف / کارت هدیه فیلیمو / فیلیمو کارت</span>
                                    </div>
                
                            </div>
        </div>

        
        <span class="package-item--next-step-btn">
                        <span class="svg-icon-wrapper is-icon-left-arrow left-arrow">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 13 13">
                <use xlink:href="#icon-left-arrow"></use>
            </svg>
        </span>
        </span></a>
    
            <div id="bluevod-cart--content" class="collapse-content" style="display: none;">
                <form
	  id="bluevod-gift--form"
	  class="form"
		
		method=POST

		data-ajax='true'
		data-target=#hiddenDiv
		data-ajax-url=/accounting/payment/apply_voucher/devicetype/site/tty/1592010420/hash/80dce4ef1c87881a875152794b2c272d4726290f?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTE5NTUwNjYsImFmY24iOiIxNTkxOTU1MDY2NTAzMjciLCJzdWIiOiIzNjBBMEM2Mi05RjczLUQzMzktNURBMC01RTY4RjlFNzA3NjUiLCJ0b2tlbiI6ImJkZDA5NzNiMTI3MmUwMzFmMjRhM2YzMjRlMTlmNTNjIn0.ekEh0J1nTbolOCpu4caIDynhsO9clcK_uVKeP603eJQ
		data-ajax-loading='true'
		
		
		data-ajax-success=handleUpdatePackagesPrice
		
		>
	<label for="bluevod-gift-card--code">کد را وارد کنید:</label>
                    <div class="form-field bluevod-cart-form-align" >
		
	<div class="input-wrapper">
	
	
	
	<input
		type="text"
		name="voucher_code"
		class="form-input"
		value=""
		
		
		
		
		placeholder="وارد کردن کد"
		id=bluevod-gift-card--code
		data-validation=required
		
		
		  />
	</div>
		</div>
                    <div class="form-field" >
		
	<div class="input-wrapper">
	
	
	
	<input
		type="submit"
		name=""
		class="form-input button button--green"
		value="تایید کد"
		
		
		
		
		
		
		
		
		
		  />
	</div>
		</div>

	
</form>            </div>
    </li>				
			</ul>
    </div>
          <div class="payment-box--description border-top has-bg">
          <h5>شما با داشتن اشتراک فیلیمو به امکانات زیر دسترسی دارید:</h5>
			<ul class="bluevod-benefits ">
									<li>
						<span class="svg-icon-wrapper is-icon-simple-tick benefits-tick">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#19AB56;  " viewBox="0 0 50 50">
                <use xlink:href="#icon-simple-tick"></use>
            </svg>
        </span>
						ترافیک اینترنت برای تماشا یا دانلود فیلم در فیلیمو بر روی تمامی اپراتورها نیم‌بها می‌باشد.
					</li>
													<li>
						<span class="svg-icon-wrapper is-icon-simple-tick benefits-tick">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#19AB56;  " viewBox="0 0 50 50">
                <use xlink:href="#icon-simple-tick"></use>
            </svg>
        </span>
						هزاران ساعت فیلم و سریال ایرانی و خارجیِ دوبله و زیرنویس شده
					</li>
													<li>
						<span class="svg-icon-wrapper is-icon-simple-tick benefits-tick">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#19AB56;  " viewBox="0 0 50 50">
                <use xlink:href="#icon-simple-tick"></use>
            </svg>
        </span>
						امکان دانلود فیلم به صورت درون برنامه‌ای، برای تماشای آفلاین و زمانی که اینترنت ندارید.
					</li>
													<li>
						<span class="svg-icon-wrapper is-icon-simple-tick benefits-tick">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#19AB56;  " viewBox="0 0 50 50">
                <use xlink:href="#icon-simple-tick"></use>
            </svg>
        </span>
						تماشای فیلم‌ها به صورت همزمان روی ۳ دستگاه (تلویزیون، کامپیوتر، گوشی یا تبلت)
					</li>
							</ul>
      </div>
    </div>

</div>

<div class="width-600">
        <div class="support-dropdown">
    <span id="support-dropdown--handler">
        <span class="svg-icon-wrapper is-icon-support ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 24 24">
                <use xlink:href="#icon-support"></use>
            </svg>
        </span>
        <span class="text">پشتیبانی</span>
    </span>
    <div id="support-dropdown--content">
        <ul class="support-ways">
            <li>
                <span class="svg-icon-wrapper is-icon-email ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 32 32">
                <use xlink:href="#icon-email"></use>
            </svg>
        </span>
                <span class="value">
                    <span>ایمیل:</span><a href="mailto:payment@filimo.com">payment@filimo.com</a>
                </span>
            </li>
                            <li>
                    <span class="svg-icon-wrapper is-icon-phone ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 32 32">
                <use xlink:href="#icon-phone"></use>
            </svg>
        </span>
                    <span class="value">
                        <span>تلفن:</span><a href="tel://(021)74524">(021)74524</a>
                    </span>
                </li>
                                        <li>
                    <span class="svg-icon-wrapper is-icon-help ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="  " viewBox="0 0 32 32">
                <use xlink:href="#icon-help"></use>
            </svg>
        </span>
                    <span class="value">
                        <a href="https://filimo.crisp.help/fa/">پرسش‌های متداول</a>
                    </span>
                </li>
                    </ul>
    </div>
</div>    </div>




<div id="hiddenDiv" style="display: none;"></div>

<script>
    window.TEXT = {
        error: {
            required: 'این گزینه الزامی است',
            email: 'ایمیل وارد شده معتبر نیست',
            mobile: 'موبایل وارد شده معتبر نیست',
            isNaN: 'لطفا فقط عدد وارد کنید',
            url: 'لینک وارد شده معتبر نیست',
            phone: 'تلفن وارد شده معتبر نیست',
            domain: 'دامنه وارد شده معتبر نیست',
            number: 'لطفا فقط عدد وارد کنید',
            IBAN: 'کد شبا وارد شده معتبر نیست',
            personalID: 'کدملی وارد شده معتبر نیست',
            postalCode: 'کدپستی وارد شده معتبر نیست',
            en: 'لطفا انگلیسی تایپ کنید',
            fa: 'لطفا فارسی تایپ کنید',
            radio: 'لطفا یکی از گزینه ها را انتخاب کنید',
            file: 'فایل انتخاب شده معتبر نیست',
            fileType: 'پسوند فایل انتخاب شده مجاز نیست',
            fileSize: 'سایز فایل انتخاب شده مجاز نیست',
            minChar: ['حداقل', 'کاراکتر باید وارد کنید'],
            maxChar: ['حداکثر', 'کاراکتر میتوانید وارد کنید'],
            minNum: ['عدد وارد شده باید بزرگتر از', 'باشد'],
            maxNum: ['عدد وارد شده باید کوچکتر از', 'باشد'],
            checkbox: ['الزامی، باید حداقل', 'گزینه انتخاب شود'],
            passMatch: 'رمز جدید و تکرار آن با هم یکسان نیست.',
        },
        general: {
            toman: 'تومان'
        },
        search: {
            emptySearchHistory: 'لیست تاریخچه جستجوی شما خالیست!',
            noMovieFound: 'فیلمی پیدا نشد',
        }

    }
</script>

<script src="js/jquery-3.3.1.min.js"></script>


    <script defer src="js/swiper.min.js"></script>

<script defer src="js/jquery.mCustomScrollbar.min.js"></script>

<script defer src="js/lightgallery.min.js"></script>
<script defer src="js/jquery.shave.min.js"></script>

<script>window.isTV = false;</script>
<script defer src="js/app.min.js"></script>

<script>
        try {
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PSBS65');
        } catch(error) {
            console.error(error);
        }
    </script>

<!-- <script>cxApi.setChosenVariation(1, 'VPetnZanRTKukjPDSGx-fQ');</script> -->
<script>
    try {

        //
        // UX Events
        //
        if ( typeof uxEvents == "undefined" )
            var uxEvents = {};

        //
        // Pages Properties
        //
        uxEvents.page = {};

        // Page Types
        if ((window.location.pathname).indexOf('/m/') !== -1) {
            uxEvents.page.type = 'Movie';
        } else if (window.location.pathname == '/' || window.location.pathname == '/_/') {
            uxEvents.page.type = 'Home';
        } else if ((window.location.pathname).indexOf('/w/') !== -1) {
            uxEvents.page.type = 'Watch';
        } else if ((window.location.pathname).indexOf('/tag/') !== -1) {
            uxEvents.page.type = 'Tag';
        } else if ((window.location.pathname).indexOf('/result/') !== -1) {
            uxEvents.page.type = 'Result';
        } else if ((window.location.pathname).indexOf('/crew/') !== -1) {
            uxEvents.page.type = 'Crew';
        } else if ((window.location.pathname).indexOf('/profile/package/') !== -1) {
            uxEvents.page.type = 'Profile Package';
        } else if ((window.location.pathname).indexOf('/editrange/') !== -1) {
            uxEvents.page.type = 'Edit Range';
        } else if ((window.location.pathname).indexOf('/wishlist/') !== -1) {
            uxEvents.page.type = 'Wishlist';
        } else if ((window.location.pathname).indexOf('/mylist/') !== -1) {
            uxEvents.page.type = 'My List';
        } else if (
            ((window.location.pathname).indexOf('/movies')          !== -1) ||
            ((window.location.pathname).indexOf('/serial')          !== -1) ||
            ((window.location.pathname).indexOf('/iranian')         !== -1) ||
            ((window.location.pathname).indexOf('/new')             !== -1) ||
            ((window.location.pathname).indexOf('/animated')        !== -1) ||
            ((window.location.pathname).indexOf('/action')          !== -1) ||
            ((window.location.pathname).indexOf('/sci-fi')          !== -1) ||
            ((window.location.pathname).indexOf('/plays')           !== -1) ||
            ((window.location.pathname).indexOf('/comedy')          !== -1) ||
            ((window.location.pathname).indexOf('/documentary')     !== -1) ||
            ((window.location.pathname).indexOf('/family')          !== -1) ||
            ((window.location.pathname).indexOf('/romance')         !== -1) ||
            ((window.location.pathname).indexOf('/historic')        !== -1) ||
            ((window.location.pathname).indexOf('/horror')          !== -1) ||
            ((window.location.pathname).indexOf('/talkshow')        !== -1) ||
            ((window.location.pathname).indexOf('/short')           !== -1) ||
            ((window.location.pathname).indexOf('/turkey')          !== -1) ||
            ((window.location.pathname).indexOf('/subtitle')        !== -1) ||
            ((window.location.pathname).indexOf('/concert')         !== -1)
        ) {
            uxEvents.page.type = 'Category';
        } else if (
            ((window.location.pathname).indexOf('/what')            !== -1) ||
            ((window.location.pathname).indexOf('/contact')         !== -1) ||
            ((window.location.pathname).indexOf('/policy')          !== -1) ||
            ((window.location.pathname).indexOf('/freebandwidth')   !== -1) ||
            ((window.location.pathname).indexOf('/faq')             !== -1) ||
            ((window.location.pathname).indexOf('/app')             !== -1)
        ) {
            uxEvents.page.type = 'Etc';
        } else if (
            ((window.location.pathname).indexOf('/signin')          !== -1) ||
            ((window.location.pathname).indexOf('/signup')          !== -1)
        ) {
            uxEvents.page.type = 'signin-signup';
        } else {
            uxEvents.page.type = 'Other';
        }

        // Page URL and Path
        uxEvents.page.url       = window.location.href;
        uxEvents.page.pathname  = window.location.pathname;
        uxEvents.page.title     = document.title;


        //
        // User
        //
        uxEvents.user = {};

        uxEvents.user.watchListAction           = 'old'; // 'a', 'b', false
        uxEvents.user.abTestBanner              = 'a'; // 'a' ==> new, 'b' ==> old

        uxEvents.user.deviceType                =  'site'; 
            uxEvents.user.username                  = '';
        uxEvents.user.name                      = '';
        uxEvents.user.email                     =  ''; 
            uxEvents.user.register_time             = '';

        uxEvents.user.stateId                   = '';
        uxEvents.user.mobile                    = '';
        uxEvents.user.userId                    = 0;
        uxEvents.user.userLang                  = 'Farsi';
        uxEvents.user.packageRemainHour         = 0;
        uxEvents.user.packageRemainDay          = 0;
        uxEvents.user.packageExpireDate         = '';
        uxEvents.user.afcn                      = '';


                    uxEvents.user.packageType               = "noSubscribe";
        
            uxEvents.user.kids_range                = "";
        uxEvents.user.grouping_type             = "";
        uxEvents.user.grouping_date             = "";
        uxEvents.user.webengage                 = "";
        
                
                

                
            uxEvents.user.currentNetwork =  'unknown'; 
            uxEvents.user.abroad =  'true'; 
            uxEvents.user.saba =  'false';             uxEvents.user.isSmart = false;
    }
    catch(error) {
        console.error(error);
    }
</script>


<script>
    try {
        uxEvents.user.audience = 'Guest'; // Undefined, Guest, User, Customer, Freemium
        uxEvents.user.customer = 'Not Customer'; // Undefined, Monthly, Auto-renewal Monthly, Auto-renewal Daily
    }
    catch(error) {
        console.error(error);
    }
</script>
</body>
</html>