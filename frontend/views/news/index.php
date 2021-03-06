<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
   <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Maktabmiz Yangliklari.</h1>
                </div>
            </div>
        </div>
<div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Bosh sahifa</a></li>
                    <!-- <li>Blog single with sidebar</li> -->
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

<div class="content-area">
            <div class="container">
                <div class="row">
   <!-- Left part start -->
      <div class="col-md-9">

        <?php foreach ($articles as $news):?>
<div class="blog-post blog-md clearfix date-style-2">
                            <div class="rdx-post-media rdx-img-effect zoom-slow">
                             <a href="#">
                                <img src="/<?=$news->getImage()?>" alt=""></a> </div>
                            <div class="rdx-post-info">
                                <div class="rdx-post-title ">
                                    <h3 class="post-title">
                                        <a href="<?=Yii::$app->urlManager->createUrl(['news/category','id'=>$news->id]);?>">
                                            <?=$news->title?></a></h3>
                                </div>
                              <!--   <div class="rdx-post-meta ">
                                    <ul>
                                        <li class="post-date"> 
                                            <i class="fa fa-calendar"></i><strong><?=$news->getData()?></strong> 
                                            <span> 2016</span> </li>
                                        <li class="post-author">
                                            <i class="fa fa-user"></i>By 
                                            <a href="#">demongo</a> </li>
                                        <li class="post-comment">
                                            <i class="fa fa-comments"></i> 
                                            <a href="#">0</a> </li>
                                    </ul>
                                </div> -->
                                <div class="rdx-post-text">
                                    <p><?=$news->description?></p>
                                </div>
                                <div class="rdx-post-readmore"> 
                                    <a href='<?=Yii::$app->urlManager->createUrl(['news/view','id'=>$news->id]);?>' title="READ MORE" rel="bookmark" class="site-button-link">Batafsil<i class="fa fa-angle-double-right"></i></a> </div>
                             <div class="ow-event-meta">
                                <ul class="icon-list">
                                    <li class="event-date"><i class="fa fa-calendar"></i><?=$news->getData()?> </li>
                                     <!-- <li class="event-time"><i class="fa fa-clock-o"></i>11:52 AM</li><?=$news->user->ismi;?> <?=$news->user->familyasi;?></a> </li> -->
                                    
                                            </ul>
                                        </div>
                              
                            </div>
                         
                        
                        </div>
            <?php endforeach; ?>
                      
<!-- Pagination start -->
<div id="pagination-box">
       
    <?php echo LinkPager::widget(['pagination' => $pagination]) ?>
</div>
 
<!-- Pagination END -->

                    </div>
                    <!-- Side bar start -->
                 <?= $this->render('/partials/sidebar', [
                         'popular'=> $popular,
                         'categories'=>$categories,]);
?>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
                    
                    <!-- Left part END -->
                   
                   </div>
                   </div>
                   </div>
