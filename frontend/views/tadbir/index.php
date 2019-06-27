   <!-- Content -->
    <?php

use yii\widgets\LinkPager;
?>
<div class="page-content">
        <!-- inner page banner -->
        <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Blog large image with sidebar</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="<?=Yii::$app->urlManager->createUrl(['site/index']);?>">Bosh sahifa</a></li>
                    <li>Blog large image with sidebar</li>
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
                        <div class="blog-post blog-lg date-style-2">
                            <div class="rdx-post-media rdx-img-effect zoom-slow"> <a href="#"><img src="/<?=$news->getImage()?>" alt=""></a> </div>
                            <div class="rdx-post-info">
                                <div class="rdx-post-title ">
                                    <h3 class="post-title"><a href="<?=Yii::$app->urlManager->createUrl(['tadbir/category']);?>"><?=$news->title?></a></h3>
                                </div>
                                <div class="rdx-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong><?=$news->getData()?></strong> <span> 2016</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="rdx-post-text">
                                    <p><?=$news->description?></p>
                                </div>
                                <div class="rdx-post-readmore"> <a href='<?=Yii::$app->urlManager->createUrl(['tadbir/tview','id'=>$news->id]);?>' title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="rdx-post-tags">
                                    <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
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
                    <!-- Left part END -->
                    <!-- Side bar start -->
    <?= $this->render('/partials/tsidebar', [
                         'popular'=> $popular,
                         'categories'=>$categories,]);
?>
                     <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->