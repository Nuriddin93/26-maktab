
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Iqtidorli talaba</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
                    <div class="blog-post blog-md date-style-2">
                        <div class="col-md-4 col-sm-4 m-b30"> <a href="#"><img src="/<?=$talaba->getImage()?>" alt=""></a> </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="rdx-post-title ">
                               
                                <h3 class="post-title"><?= $talaba->ismi?> <?= $talaba->familyasi?></h3>
                            </div>
                            <h2 class="m-tb10"><?= $talaba->tyli?> </h2>
                            <div class="rdx-post-text">
                                <p class="m-b10"><?= $talaba->tarf;?></p>
                            </div>
                            <table class="table table-bordered" >
                                <tr>
                                    <td>Telefo'n no'meri</td>
                                    <td><?= $talaba->phone?></td>
                                </tr>
                                <tr>
                                    <td>Emaili</td>
                                    <td><?= $talaba->email?></td>
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
                            </form> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                   <!--  <div class="col-md-12">
                        <div class="rdx-tabs border-top product-description bg-tabs">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#web-design-1"><i class="fa fa-globe"></i> <span class="title-head">Description</span></a></li>
                                <li><a data-toggle="tab" href="#graphic-design-1"><i class="fa fa-photo"></i> <span class="title-head">Additional Information</span></a></li>
                                <li><a data-toggle="tab" href="#developement-1"><i class="fa fa-cog"></i> <span class="title-head">Product Review</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="web-design-1" class="tab-pane active">
                                    <p class="m-b10"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br>
                                        Suspendisse et justo. 
                                        Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis 
                                        commyolk augue aliquam ornare augue.</p>
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                                    <ul class="list-check-circle primary">
                                        <li>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>
                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
                                        <li>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</li>
                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                        <li>Dorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                                <div id="graphic-design-1" class="tab-pane">
                                    <table class="table table-bordered" >
                                        <tr>
                                            <td>Pricing</td>
                                            <td>$52.00</td>
                                        </tr>
                                        <tr>
                                            <td>Stock Availability</td>
                                            <td>AVAILABLE</td>
                                        </tr>
                                        <tr>
                                            <td>Rating</td>
                                            <td><span class="rating-bx"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </span> </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="developement-1" class="tab-pane">
                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star-o" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic2.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic3.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                <form class="comment-form" method="post" >
                                                    <div class="comment-form-author">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                    </div>
                                                    <div class="comment-form-email">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                    </div>
                                                    <div class="comment-form-rating">
                                                        <label>Your Rating</label>
                                                        <div class='starrr'></div>
                                                    </div>
                                                    <div class="comment-form-comment">
                                                        <label>Your Review</label>
                                                        <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                    </div>
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit" class="site-button" id="submit" name="submit">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    