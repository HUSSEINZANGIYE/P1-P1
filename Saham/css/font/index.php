
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="keywords" content="سهام عدالت,سامانه سهام عدالت,سود سهام عدالت,سامانه رسمی سهام عدالت,مشمولین سهام عدالت,ثبت شماره شبا سهام عدالت,وضعیت سهام عدالت,سهام داران سهام عدالت,وضعیت دارایی سهام عدالت,دارندگان سهام عدالت,اصل 44 قانون اساسی,ثبت شبا سهام عدالت,شماره شبا بانکی,وزارت امور اقتصادی و دارایی">

    <meta name="description" content="سامانه الکترونیکی سهام عدالت ارائه دهنده خدمات الکترونیکی شامل: اطلاع از وضعیت سهام داری، مشاهده صورت حساب سهام عدالت، ثبت و اصلاح شماره شبا بانکی جهت دریافت سود سهام عدالت می باشد">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>سامانه سهام عدالت - سازمان خصوصی سازی</title>



    <link rel="stylesheet" href="../../css/styles.css">

    <link rel='stylesheet' href='../../css/grid.min.css'>



</head>



<body class="applayout">



    <div class="header no-print">

        <div class="logo-div hidden sm-block" style="">

            <img src="../../img/ipo_logo_white_sans.png" alt="سامانه سهام عدالت" title="سامانه سهام عدالت">

        </div>

    </div>



    <div class="content blue-shadow fixed-content">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 ipologo hidden-xs hidden-sm text-right">

                    <img src="../../img/khosoosisazi-ipo-ir2.png" alt="سازمان خصوصی سازی" title="سامانه رسمی سهام عدالت">

                </div>

                <div class="col-lg-4 center-content">



                </div>

                <div class="col-lg-4 right-logo hidden-xs hidden-sm text-left">

                    <img src="../../img/ir-logo.png" alt="وزارت امور اقتصادی و دارایی" title="وزارت امور اقتصادی و دارایی">

                </div>

            </div>

        </div>



        <div class="top-box">

    </div>



    <div class="middle-box">

        <div class="enter-panel">

            <div class="samaneh-logo">

                <img src="../../img/Flag2.png" alt="پرچم" title="سامانه الکترونیکی سهام عدالت">

                <h1 class="">سامانه الکترونیکی سهام عدالت</h1>

            </div>

            <div class="gray-row">

                <div class="btn-enter-box">

                    <a href="../../index.php" title="ورود به سامانه الکترونیکی سهام عدالت" class="enter-btn">ورود به سامانه</a>

                </div>

                <div class="row-box footer-text">آزادسازی سهام عدالت و مشاهده اطلاعات صورت وضعیت دارایی سهام</div>

            </div>

        </div>

    </div>



    <div class="gap-box">

        <div class="enter-panel">

            <div class="news-title">

                <h2>سایت اطلاع رسانی سهام عدالت</h2>

            </div>

            <div class="gray-row">

                <div class="btn-box">

                    <a href="http://news.samanese.ir/" title="سایت رسمی اطلاع رسانی سهام عدالت" class="btn">ورود به سایت</a>

                </div>

                <div class="footer-text">

                    <span>مشاهده آخرین اخبار و رویدادهای مربوط به سهام عدالت</span>

                    <span>قوانین و مقررات مربوطه و پاسخ به سوالات متداول</span>

                </div>

            </div>

        </div>

    </div>



    <div class="footer-box">



        <div class="tow-box">



        </div>

    </div>

    </div>



    <div class="footer no-print " id="footer_div">

        <div class="col-12">





            <div class="row">

                <div class="col-lg-4">

                    <div class="contact-info">

                        شماره تلفن مرکز تماس سهام عدالت: 83337 (021)

                    </div>

                    <div class="contact-info">

                        نشانی پست الکترونیکی: <a title="ارتباط با ما" href="mailto:info@samanese.ir">info@samanese.ir</a>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="cpy-right">

                        <span>سامانه الکترونیکی سهام عدالت - کلیه حقوق و مالکیت مادی و معنوی این

                            سامانه

                            متعلق به سازمان خصوصی سازی است.</span>

                    </div>

                    <div class="ver">

                        <span>طراحی و تولید توسط دفتر فناوری اطلاعات سازمان خصوصی سازی - نسخه 6.0.4</span>

                    </div>

                </div>

                <div class="col-lg-4 hidden-sm hidden-xs">

                    <div class="samane-text-logo">

                        <span><a href="https://samanese.ir" title="سامانه سهام عدالت">Samane<span style="color: #FDD835;display: inline;">se</span>.ir</a></span>

                    </div>

                </div>

            </div>

        </div>

    </div>



</body>



<script>

    control_footer();



    function hide_footer (){

        //console.log('win : ' +  win_height  , 'doc : ' + doc_heigth , 'pos : ' + scroll_position  ) ; 



        //console.log('hide');

        document.getElementById('footer_div').className = "footer no-print d-none";        

    }



    function show_footer (){

        //console.log('win : ' +  win_height  , 'doc : ' + doc_heigth ) ; 

        //console.log('show');

        document.getElementById('footer_div').className = "footer no-print";

    }



    var win_height = window.innerHeight ; 

    var doc_heigth = document.body.clientHeight ; 

    var scroll_position = document.documentElement.scrollTop || document.body.scrollTop ;  

    var offset = -20 ; 



    function control_footer(){

        win_height = window.innerHeight ; 

        doc_heigth = document.body.clientHeight ; 

        scroll_position = document.documentElement.scrollTop || document.body.scrollTop ; 



       if(scroll_position >= doc_heigth - win_height + offset || win_height >=  doc_heigth ){

        show_footer();

       }

       else{

        hide_footer();

       }

    }

    

    window.onscroll = function(){control_footer();} 

    window.onresize = function(){control_footer();}



     

</script>



</html>