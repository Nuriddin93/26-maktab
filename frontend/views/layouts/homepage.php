<?php

use frontend\assets\AppAsset;
use common\widgets\Alert;
use comon\widgets\LinkPager;
AppAsset::register($this);
?>



<?php $this->beginPage();?>
<!DOCTYPE html>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="error-404.html" type="assets/image/x-icon" />
<link rel="shortcut icon" type="http://educare.w3itexperts.com/xhtml/image/x-icon" href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/favicon.png" />
<!-- Page Title Here --> 
<title>26-Maktab</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->head() ?>
</head>
<body id="bg">
<?php $this->beginBody() ?>
<div class="page-wraper"><div id="loading-area"></div>
<!-- header -->
    <header class="site-header header  header-style-6">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0 top-bar-curve">
                        <div class="rdx-topbar-left list-unstyled e-p-bx "> 
                            <ul>
                                <li><i class="fa fa-envelope"></i>maktab26@mail.ru</li>
                                <li><i class="fa fa-phone"></i>+998999003058</li>
                            </ul>   
                        </div>
                        <div class="rdx-topbar-right">
                          <!--   <ul class="social-bx list-inline pull-right">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                            </ul> -->
                        </div>
                        
                    </div>  
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
<div class="logo-header mostion"><a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/logo.jpg" width="193" height="89" alt=""></a></div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                     <!--    <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                            <a href="<?=Yii::$app->urlManager->createUrl(['site/login'])?>" class="site-button sign-in">Sign In</a>
                        </div> -->
                    </div>
                    <!-- Quik search -->
                    <!-- <div class="rdx-quik-search bg-primary bg-primary-dark">
                        <form action="#">
                            <input name="search" value="search" type="text" class="form-control" placeholder="Type to search">
                            <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div> -->
                    <!-- main nav -->
<div class="header-nav navbar-collapse collapse">
 <ul class=" nav navbar-nav"><li class="active"> 
    <a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>">Bosh sahifa<i class="fa fa-chevron-down"></i></a>                      
</li>
<li><a href="<?=Yii::$app->urlManager->createUrl(['news/index'])?>"> Yangliklar</a></li>
        <li> <a href="<?=Yii::$app->urlManager->createUrl(['tadbir/index'])?>">Tadbirlar</a></li>
        <li> <a href="<?=Yii::$app->urlManager->createUrl(['news/blok'])?>">Qonunlar</a></li>
<!-- <li> <a href="javascript:;">Yangliklar<i class="fa fa-chevron-down"></i></a> -->
  <!--   <ul class="sub-menu">
        <li><a href="<?=Yii::$app->urlManager->createUrl(['news/index'])?>"> Yangliklar</a></li>
        <li> <a href="<?=Yii::$app->urlManager->createUrl(['news/news'])?>">Elonlar</a></li>
        <li> <a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>">Maqolalar</a></li>
                        
    </ul>
</li> -->
<!-- <li> <a href="javascript:;">Kutubxona<i class="fa fa-chevron-down"></i></a>
 <ul class="sub-menu">
    <li> <a href="javascript:;">Darskliklar</a></li>
    <li> <a href="javascript:;">Darskliklar</a></li>
    <li> <a href="javascript:;">Darskliklar</a></li></ul> -->
<li> <a href="javascript:;">Sahifalar<i class="fa fa-chevron-down"></i></a>
  <ul class="sub-menu">
    <li> <a href="<?=Yii::$app->urlManager->createUrl(['site/ustoz'])?>">Maktab xodimlari</a></li>
    <li> <a href="javascript:;">Savollar</a></li>
    <li><a href="career.html">Ishga qabul qilish</a></li>
    <li><a href="courses.html">Kurslar</a></li>
    <li><a href="who-we-are.html">Biz kimmiz</a></li>
    <li><a href="help.html">Ma'lumot markazi</a></li>
    <li><a href="privacy-policy.html">Maxfiylik siyosati</a></li>
</ul>
 </li>
                            
<li> <a href="<?=Yii::$app->urlManager->createUrl(['site/gallery'])?>">Gallery<i class="fa fa-chevron-down"></i></a>
                              
                            </li>                            
<!-- <li> <a href="<?=Yii::$app->urlManager->createUrl(['contact/index'])?>">Biz bilan bog'lanish<i class="fa fa-chevron-down"></i></a> -->
                              
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->

<?= $content ?>

    <!-- Footer -->
    <footer class="site-footer" >
        <div class="footer-top bg-primary text-white" style="background-image: url(assets/images/footer-border-top1.png); background-size: auto auto; background-position: center top; background-repeat: repeat-x;">
            <div class="container  p-t50">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <h4 class="m-b15 ">Biz haqimizda</h4>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-white style-liner"></div></div>
                            <p class="m-t15"> Sizningcha, bu sizning e'tiboringizga. Shu bilan birga, boshqa joylarga joylashtirilmagan. Ehtimol, elit. Shu bilan birga, boshqa joylarga joylashtirilmasligi mumkin. Boshqa joyda yo'q.

</p>
                            <p class="m-t10"> Sizningcha, bu sizning e'tiboringizga.</p>
                            <ul class="rdx-social-icon border">
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 ">Foydali linklar</h4>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-white style-liner"></div></div>
                            <ul>
                                <li><a href="www.ziynet.uz">www.ziynet.uz</a></li>
                                <li><a href="www.mygov.uz">www.mygov.uz</a></li>
                                <li><a href="www.Lex.uz">www.Lex.uz</a></li>
                                <li><a href="www.umail.ru">@uMail.ru</a></li>
                                <li><a href="services-2.html">Andijon viloyati hokimligi</a></li>
                                <li><a href="services-2.html">FAQS </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_gallery">
                            <h4 class="m-b15">Maktabning galereyasi</h4>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-white style-liner"></div></div>
                            <ul>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic1.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic2.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic3.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic4.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic5.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic6.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic7.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic8.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic9.jpg" alt=""></a> </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget ">
                            <h4 class="m-b15">Biz bilan bog'lanish</h4>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-white style-liner"></div></div>
                            <ul class="widget_getintuch">
                                <li><i class="fa fa-map-marker"></i><strong class="text-white">MANZILI</strong> Andijon vilovati Oltinko'l tumani</li>
                                <li><i class="fa fa-phone"></i><strong class="text-white">Phone</strong>+998-99-9003058 (24/7 Yordam liniyasi)</li>
                                <li><i class="fa fa-fax"></i><strong class="text-white">FAX</strong>(123) 123-4567<br/>000 123 2294 089</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-info-box clearfix p-tb30 p-lr15">
                    <div class="col-md-6 col-sm-6">
                        <form role="search" method="post" class="newsletter">
                            <strong class="text-white font-18 font-weight-600">Bizning xabarnomamizga imzo qo'y
</strong>
                            <div class="input-group m-t10">
                                <input name="text" class="form-control" placeholder="Your Email Id" type="text">
                                <span class="input-group-btn">
                                <button type="submit" class="site-button font-weight-600">Obuna bo'lish</button>
                                </span> 
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="text-right">
                            <ul class="rdx-social-icon border">
                                <li><a class="fa fa-facebook text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-twitter text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-linkedin text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-pinterest-p text-primary" href="javascript:void(0);"></a></li>
                                <li><a class="fa fa-instagram text-primary" href="javascript:void(0);"></a></li>
                            </ul>
                            <p class="text-right m-t10 m-b0">Copyright © Ibragimov Nuriddin</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>