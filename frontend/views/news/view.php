 <!-- Content --> 
 <?php use yii\widgets\LinkPager;?>
   <div class="page-content">
     <!-- inner page banner -->
   <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white"><?=$articles->title?></h1>
                </div>
            </div>
        </div>
    <!-- inner page banner END -->
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                   
                                    </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

<div class="content-area">
            <div class="container">
                <div class="row">
   <!-- Left part start -->
   <div class="col-md-9">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                            <div class="rdx-post-title ">
                                <h3 class="post-title"><a href="#"><?=$articles->title?></a></h3>
                            </div>
                            
                            <div class="rdx-post-media rdx-img-effect zoom-slow"> <a href="#"><img src="/<?=$articles->getImage()?>" alt=""></a> </div>
                            <div class="rdx-post-text">
                              
                                <p><?=$articles->content?></p>
                                <p><?=$articles->description?></p>
                              <!--   <p><?=$articles->content?></p>
                                <blockquote></blockquote>
                           <p><?=$articles->description?></p>
                                <h5>Completely Responsive</h5>
                                <img class="alignleft" width="300" src="<?=Yii::$app->urlManager->baseUrl?>/<?=$articles->getImage()?>" alt="">
                               <p><?=$articles->content?></p>
                                <div class="rdx-divider bg-gray-dark"></div>
                                <img class="alignright" width="300" src="<?=Yii::$app->urlManager->baseUrl?>/<?=$articles->getImage()?>" alt="">
                                 <p><?=$articles->content?></p> -->
                                 <div class="rdx-post-meta m-b20">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong><?=$articles->getData()?></strong> </li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#"><?=$articles->user->ismi;?> <?=$articles->user->familyasi;?></a> </li>
                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#"> <?=$articles->viewed?></a> </li>
                                </ul>
                            </div>
                            </div>

                          <!--   <div class="rdx-post-tags clear">
                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                            </div> -->
                        </div>
                       
                        <!-- blog END -->
                    </div>
                 <?= $this->render('/partials/sidebar', [
                     
                         'popular'=> $popular,
                         'categories'=>$categories,
                     ]);
?>
                </div>
            </div>
        </div>
                    <!-- Side bar END -->
                    <!-- Left part END -->
                   
                   </div>
                   </div>
                   </div>
    <!-- Content END-->
  
