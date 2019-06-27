<?php use yii\widgets\LinkPager; ?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Maktab xodimlari</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Bosh sahifa</a></li>
                    <!-- <li>Product Details</li> -->
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Product details -->
            <div class="container woo-entry">
                  <?php foreach ($ustoz as $ustoz):?>
                <div class="row m-b30"> <hr>
<div class="col-md-4 col-sm-4 m-b30"> <a href="#"><img src="/<?=$ustoz->getImage()?>" alt=""></a> </div>
                    <div class="blog-post blog-md date-style-2">
                        
                        <div class="col-md-8 col-sm-8">
                            <div class="rdx-post-title ">
                               
                                <h3 class="post-title"><?= $ustoz->ismi?> <?= $ustoz->familyasi?></h3>
                            </div>
                           <!--  <h2 class="m-tb10"><?= $ustoz->tyli?> </h2> -->
                            
                            <table class="table table-bordered" >
                                <tr>
                                    <td>Telefo'n no'meri</td>
                                    <td><?= $ustoz->malaka?></td>
                                </tr>
                                <tr>
                                    <td>Emaili</td>
                                    <td><?= $ustoz->mail?></td>
                                </tr>
                                <tr>
                                    <td>Rating</td>
                                    <td><span class="rating-bx"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </span> </td>
                                </tr>
                            </table>
                         <!--    <form method="post" class="cart">
                                <div class="quantity btn-quantity pull-left m-r10">
                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                </div>
                                <button class="btn btn-primary site-button pull-left"><i class="fa fa-cart-plus"></i> Add To Cart</button>
                            </form> --><div class="rdx-post-text">
                                <p class="m-b10"><?= $ustoz->tarif;?></p>
                            </div>

                        </div>
                    </div>
              </div>
             
          
            <!-- Product details -->
        <?php endforeach;?><div id="pagination-box">
       
    <?php echo LinkPager::widget(['pagination' => $pagination]) ?>
</div>
        </div>
        <!-- Pagination start -->

        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    