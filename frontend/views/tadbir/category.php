 <?php use yii\widgets\LinkPager;?>
   <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Maktabimizda O'tkazilgan tadbirlar</h1>
                </div>
            </div>
        </div>
<div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="<?=Yii::$app->urlManager->createUrl(['tadbir/index']);?>">Home</a></li>
                    <li><a href="#"><?=$category->category->cat_title?></a></li>
                  <!--  -->
                    <li></li>
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
            <img src="/<?=$news->getImage()?>" alt=""></a> 
                </div>
                     <div class="rdx-post-info">
                         <div class="rdx-post-title ">
                             <h3 class="post-title">
                                <a href="<?=Yii::$app->urlManager->createUrl(['tadbir/tcategory']);?>">
                                  <?=$news->title;?></a></h3>
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
                                    <a href='<?=Yii::$app->urlManager->createUrl(['tadbir/tview','id'=>$news->id]);?>' title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right">
                                    </i></a> 
                                </div>
                             <div class="ow-event-meta">
                                <ul class="icon-list">
                                    <li class="event-date"><i class="fa fa-calendar"></i><?=$news->getData()?> </li>
                                  
                                    
                                </ul>
                             </div>
                            </div>
                          </div>
            <?php endforeach; ?>
              <div class="pagination-bx clearfix ">
    <ul class="pagination">

         <li class="active"><?php echo LinkPager::widget(['pagination' => $pagination]) ?></li>
          
    </ul>
    </div>
                    </div>
                    <!-- Side bar start -->
                  <?= $this->render('/partials/tsidebar', [
                         'popular'=> $popular,
                         'categories'=>$categories,]);
?>
                   <!-- Side bar END -->
                                </div>
                            </div>
                          
                        </div>
                      <!-- Left part END -->
                       <!-- Pagination  -->
                        
             
                <!-- Pagination END -->
                    </div>
                </div>
            </div>
    <!-- Content END-->
  