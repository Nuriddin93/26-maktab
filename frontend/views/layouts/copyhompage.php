<?php

use frontend\assets\AppAsset;
use common\widgets\Alert;

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
<link rel="icon" href="error-404.html" type="image/x-icon" />
<link rel="shortcut icon" type="http://educare.w3itexperts.com/xhtml/image/x-icon" href="images/favicon.png" />
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
    <header class="site-header header  header-style-4 dark">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="rdx-topbar-left">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> <span> 8901 Marmora Road Chi Minh City, Vietnam </span> </a></li>
                        </ul>
                    </div>                        
                    <div class="rdx-topbar-right">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <div class="main-bar">
            <div class="container header-contant-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-header "><a href="index.html"><img src="assets/images/logo-white.png" width="193" height="89" alt=""></a></div>
                    </div>
                    <div class="col-md-8">
                        <ul class="contact-info clearfix">
                            <li>
                                <h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>
                                <span>+141 0800-123456</span>
                            </li>
                            <li>
                                <h6 class="text-primary"><i class="fa fa-envelope-o"></i> Send us an Email</h6>
                                <span>info@example.com</span>
                            </li>
                            <li>
                                <h6 class="text-primary"><i class="fa fa-clock-o"></i> Opening Time</h6>
                                <span>Mon -Sat: 7:00 - 17:00</span>
                            </li>
                            <li>
                                <span class="site-button m-r15 text-white text-center btn-block" type="button">  
                                    <h5 class="m-a0">Coll Toll Free</h5>
                                    <p class="m-a0">+00 980 012 3456</p>  
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="slide-up">
                    <div class="container clearfix bg-primary">
                    
                        <!-- website logo -->
                        <div class="logo-header mostion"><a href="index.html"><img src="images/logo-white.png" width="193" height="89" alt=""></a></div>
                        
                        <!-- nav toggle button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        
                        <!-- Quik search -->
                        <div class="rdx-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="search" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>
                        
                        <!-- main nav -->
                <div class="header-nav navbar-collapse collapse">
                    <ul class=" nav navbar-nav"><li class="active"> <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                            <li><a href="index-4.html">Home 4</a></li>
                            <li><a href="index-5.html">Home 5</a></li>
                            <li><a href="index-6.html">Home 6</a></li>
                            <li><a href="index-7.html">Home 7</a></li>
                            <li><a href="index-8.html">Home 8</a></li>
                            <li><a href="index-9.html">Home 9</a></li>
                            <li><a href="index-10.html">Home 10</a></li>
                        </ul>
                            
                        </li>
                        <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:;">Header Style Light</a>
                                    <ul class="sub-menu">
                                        <li><a href="header-style-1.html">Header 1</a></li>
                                        <li><a href="header-style-2.html">Header 2</a></li>
                                        <li><a href="header-style-3.html">Header 3</a></li>
                                        <li><a href="header-style-4.html">Header 4</a></li>
                                        <li><a href="header-style-5.html">Header 5</a></li>
                                        <li><a href="header-style-6.html">Header 6</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Header Style Dark</a>
                                    <ul class="sub-menu">
                                        <li><a href="header-style-1-dark.html">Header 1</a></li>
                                        <li><a href="header-style-2-dark.html">Header 2</a></li>
                                        <li><a href="header-style-3-dark.html">Header 3</a></li>
                                        <li><a href="header-style-4-dark.html">Header 4</a></li>
                                        <li><a href="header-style-5-dark.html">Header 5</a></li>
                                        <li><a href="header-style-6-dark.html">Header 6</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Footer</a>
                                    <ul class="sub-menu">
                                        <li><a href="footer-1.html">Footer 1 </a></li>
                                        <li><a href="footer-2.html">Footer 2</a></li>
                                        <li><a href="footer-3.html">Footer 3</a></li>
                                        <li><a href="footer-4.html">Footer 4</a></li>
                                        <li><a href="footer-5.html">Footer 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:;">About us</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-1.html">About us 1</a></li>
                                        <li><a href="about-2.html">About us 2</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">FAQ</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq-1.html">FAQ 1</a></li>
                                        <li><a href="faq-2.html">FAQ 2</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services-1.html">Services 1</a></li>
                                        <li><a href="services-2.html">Services 2</a></li>
                                        <li><a href="services-3.html">Services 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="career.html">Career</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="who-we-are.html">Who we are</a></li>
                                <li><a href="help.html">Help Desk</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li> <a href="javascript:;">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-1.html">Portfolio 1</a></li>
                                        <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                        <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                        <li><a href="portfolio-details.html">portfolio-details</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Galley</a>
                                    <ul class="sub-menu">
                                        <li><a href="full-page-gallery-dark.html">Gallery Full Page Style 1</a></li>
                                    <li><a href="full-page-gallery-light.html">Gallery Full Page Style 2</a></li>
                                    <li><a href="gallery-grid-2.html">Galley Grid 2</a></li>
                                        <li><a href="gallery-grid-3.html">Galley Grid 3</a></li>
                                        <li><a href="gallery-grid-4.html">Galley Grid 4</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Error</a>
                                <ul class="sub-menu">
                                    <li><a href="error-403.html">Error 403</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="error-405.html">Error 405</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Coming Soon</a>
                                <ul class="sub-menu">
                                    <li><a href="coming-soon-1.html">Coming Soon 1</a></li>
                                    <li><a href="coming-soon-2.html">Coming Soon 2</a></li>
                                    <li><a href="coming-soon-3.html">Coming Soon 3</a></li>
                                    <li><a href="coming-soon-4.html">Coming Soon 4</a></li>
                                    <li><a href="coming-soon-5.html">Coming Soon 5</a></li>
                                    <li><a href="coming-soon-6.html">Coming Soon 6</a></li>
                                    <li><a href="coming-soon-7.html">Coming Soon 7</a></li>
                                    <li><a href="coming-soon-8.html">Coming Soon 8</a></li>
                                    <li><a href="coming-soon-9.html">Coming Soon 9</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Login Page</a>
                                <ul class="sub-menu">
                                    <li><a href="login-1.html">Login 1</a></li>
                                    <li><a href="login-2.html">Login 2</a></li>
                                    <li><a href="login-3.html">Login 3</a></li>
                                    <li><a href="login-4.html">Login 4</a></li>
                                    <li><a href="login-5.html">Login 5</a></li>
                                    <li><a href="login-6.html">Login 6</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="product.html">Product</a></li>
                                <li><a href="product-details.html">Product details</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:;">Default</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-half-img.html">Half image</a></li>
                                        <li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
                                        <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
                                        <li><a href="blog-large-img.html">Large image</a></li>
                                        <li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
                                        <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-2.html">Grid 2</a></li>
                                        <li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                        <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
                                        <li><a href="blog-grid-3.html">Grid 3</a></li>
                                        <li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                        <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
                                        <li><a href="blog-grid-4.html">Grid 4</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Single</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single.html">Single</a></li>
                                    <li><a href="blog-single-sidebar.html">Single sidebar</a></li>
                                    <li><a href="blog-single-left-sidebar.html">Single sidebar right</a></li>
                                </ul>
                            </li>
                            <li> <a href="javascript:;">Full Page Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-full-grid-dark-style-1.html">Dark Style 1</a></li>
                                    <li><a href="blog-full-grid-dark-style-2.html">Dark Style 2</a></li>
                                    <li><a href="blog-full-grid-dark-style-3.html">Dark Style 3</a></li>
                                    <li><a href="blog-full-grid-light-style-1.html">Light Style 1</a></li>
                                    <li><a href="blog-full-grid-light-style-2.html">Light Style 2</a></li>
                                    <li><a href="blog-full-grid-light-style-3.html">Light Style 3</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li class="has-mega-menu "> <a href="javascript:;">Shortcodes<i class="fa fa-chevron-down"></i></a>
                            <ul class="mega-menu">
                                <li> <a href="javascript:;">Shortcodes</a>
                                    <ul>
                                        <li><a href="shortcode-buttons.html">Buttons</a></li>
                                        <li><a href="shortcode-icon-box-styles.html">Icon box styles</a></li>
                                        <li><a href="shortcode-pricing-table.html">Pricing table</a></li>
                                        <li><a href="shortcode-toggles.html">Toggles</a></li>
                                        <li><a href="shortcode-team.html">Team</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Shortcodes</a>
                                    <ul>
                                        <li><a href="shortcode-carousel-sliders.html">Carousel sliders</a></li>
                                        <li><a href="shortcode-image-box-content.html">Image box content</a></li>
                                        <li><a href="shortcode-tabs.html">Tabs</a></li>
                                        <li><a href="shortcode-counters.html">Counters</a></li>
                                        <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Shortcodes</a>
                                    <ul>
                                        <li><a href="shortcode-accordians.html">Accordians</a></li>
                                        <li><a href="shortcode-dividers.html">Dividers</a></li>
                                        <li><a href="shortcode-images-effects.html">Images effects</a></li>
                                        <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                        <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Shortcodes</a>
                                    <ul>
                                        <li><a href="shortcode-alert-box.html">Alert box</a></li>
                                        <li><a href="shortcode-icon-box.html">Icon-box</a></li>
                                        <li><a href="shortcode-list-group.html">List group</a></li>
                                        <li><a href="shortcode-title-separators.html">title-separators</a></li>
                                        <li><a href="shortcode-all-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;">Contact us <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="contact.html">Contact us 1</a></li>
                                <li><a href="contact-2.html">Contact us 2</a></li>
                                <li><a href="contact-3.html">Contact us 3</a></li>
                                <li><a href="contact-4.html">Contact us 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        
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
                                <li><a href="services-2.html">Kurs narxlari ro'yxatlari</a></li>
                                <li><a href="services-2.html">Drive School Info</a></li>
                                <li><a href="services-2.html">Bizning Avtomobilimiz List</a></li>
                                <li><a href="services-2.html">Foydali link 01</a></li>
                                <li><a href="services-2.html">Yordam jamoasi</a></li>
                                <li><a href="services-2.html">FAQS </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_gallery">
                            <h4 class="m-b15">Maktabning galereyasi</h4>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-white style-liner"></div></div>
                            <ul>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic1.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic2.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic3.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic4.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic5.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic6.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic7.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic8.jpg" alt=""></a> </li>
                                <li class="img-effect2"> <a href="javascript:void(0);"><img src="assets/images/gallery/pic1.jpg" alt=""></a> </li>
                                
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