


 <!-- Content -->
    <div class="page-content">
      <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
					<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
						<div class="rdx-bnr-inr overlay-black-middle" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="rdx-bnr-inr-entry">
                    <h1 class="text-white">Maktabmiz Yangliklari.</h1>
                </div>
            </div>
        </div>
                </div>
		    </div>
		</div>
		<!-- Slider END -->
		      <!-- About Company -->
       <!--  <div class="section-full bg-white content-inner about3">
            <div class="container">
                <div class="section-content">
					<div class="row">
						<div class="col-md-3 col-sm-12 m-b30">
							<div class="m-b10">
								<h3 class="m-t0 m-b0" style="text-align: center;">26-Maktab Web saytiga <span class="text-primary" style="text-align: center;"></span></h3>
							</div>
							<p><strong>Bizning manzil Andijon viloyati Oltinko'l tumani Qo'shtepasaroy A'lam qishlog'i.</strong></p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div> -->
						<!-- <?php foreach ($tadbir as $tadbir) :?>
						<div class="col-md-3 col-sm-4 m-b30">
							<div class="rdx-box">
								<div class="rdx-media ow-portfolio-img rdx-img-overlay11 rdx-img-effect"> <a href="#"><img src="/<?=$tadbir->getImage()?>" alt=""></a> </div>
								<div class="rdx-info">
									<h4 class="rdx-title m-t20"><a href="#"><?= $tadbir->title;?></a></h4>
									<p>

						<?= $tes=substr($tadbir->description,0,93);
                ;?></p>
									<a href="<?=Yii::$app->urlManager->createUrl(['tadbir/tview','id'=>$tadbir->id]);?>" class="site-button  ">Batafsil</a>
								</div>
							</div>
						</div><?php endforeach;?>
				
					</div>
                </div>
            </div>
        </div> -->
        <!-- About Company END -->              
        <div class="section-full box-shadow bg-white content-inner" >
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h2 class="h2"><span class="text-primary">Yangliklar.</span></h2>
                            <div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
                            <div class="clear"></div>
                            <p class="m-b0">Bu yerdagi bangliklar makytab mamuryati tomonidan beriladigan va mahalliy yangliklardan iborat.</p>
                        </div>    
                    </div>      


 <!-- Event post Carousel with no margin -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-content">
                        <div class="blog-carousel mfp-gallery gallery owl-btn-center-lr">
                        	<?php foreach ($articles as $news):?>
                            <div class="item">
                                <div class="ow-event-post date-style-2">
                                    <div class="ow-event-media rdx-img-effect zoom-slow"  > <img  src="/<?=$news->getImage()?>" style="height: 280px;"  alt=""> </div>
                                    <div class="ow-event-info ">
                                        <div class="ow-event-title">
                                            <h4 class="event-title"> <a href="blog-single-sidebar.html" title="Video post"><?=$news->title?></a> </h4>
                                        </div>
                                        <div class="ow-event-text">
                                            <p ><?=substr($news->description, 0,146)?></p>
                                        </div>
    <div class="ow-event-readmore "> <a href='<?=Yii::$app->urlManager->createUrl(['news/view','id'=>$news->id]);?>' title="READ MORE" rel="bookmark" class="site-button 	"> Batafsil <i class="fa fa-angle-double-right"></i></a> <!-- <a href="<?=Yii::$app->urlManager->createUrl(['news/view','id'=>$news->id]);?>" class="site-button  ">Batafsil</a> -->


    </div>
                                        <div class="ow-event-meta">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                          </div>
                    </div>
                </div>
                <!-- Event post Carousel with no margin END -->

             </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
		<!-- Our Philosophy -->
		<div class="section-full text-white bg-img-fix content-inner bg-primary choose-us" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/patter-bg.png);">
            <div class="container">
				<div class="section-head  text-center text-white">
                    <h2 class="h2">Bizning falsafamiz</h2>
                    <div class="rdx-separator-outer "><div class="rdx-separator bg-white style-liner"></div>
                </div>
                   <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> -->
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 m-b30 ">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-primary"><i class="fa fa-book"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="rdx-tilte">SIFAT TEKSHIRUVI</h4>
								<p>Maktab matematika, fizika, axborot tex- nologiyalari va ingliz tili kabi asosiy fanlarni yetkazib berishga alohida e'tibor beradi.</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-red"><i class="fa fa-group"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="rdx-tilte">YUQORI MALAKALI O’QITUVCHILAR</h4>
								<p>Maktabimizdagi o'qituvchilarning ko'p- chiligi chet ellarda ta'lim olgan va    ta'lim bergan</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-yello"><i class="fa fa fa-hand-pointer-o"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="rdx-tilte">TA’LIM USULLARI</h4>
								<p>Korrupsiyani oldini olish va ta'lim sifatini nazorat qilish imkoniyatini aniq yoritib berish</p>
							</div>
						</div>
                    </div>
					<div class="col-md-3 col-sm-6 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 center radius-sm">
							<div class="icon-bx-md radius bg-white m-b20"> 
								<span class="icon-cell text-green"><i class="fa fa fa-lightbulb-o"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="rdx-tilte">SHAFFOFLIK</h4>
								<p>Korrupsiyani oldini olish va ta'lim sifatini nazorat qilish imkoniyatini aniq yoritib berish</p>
							</div>
						</div>
                    </div>
				</div>
				
            </div>
        </div>
		<!-- Our Philosophy End -->
		<!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="h2"> <span class="text-primary">Iqtidorli o'quvchilar bilan tanishing</span></h2>
                    <div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content text-center ">
                    <div class="row">
                        <?php foreach ($talaba as $talaba):?>
                        <div class="col-md-3 col-sm-6 m-b30">
							<div class="rdx-team">
								<div class="round-box bg-primary">
									<div class="team-mamber">
										<div class="team-mamber">
											<img src="/<?=$talaba->getImage()?>">
										</div>
									</div>
								</div> 
								<div class="sosial-icon-team">
									<ul class="rdx-social-icon border rdx-social-icon-lg">
										<li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-twitter tw-btn m-l10"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-linkedin link-btn m-l10"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
									</ul>
								</div>
								<div class="border-1 team-info text-center p-a20 p-t40">
									<a href='<?=Yii::$app->urlManager->createUrl(['site/talaba-view','id'=>$talaba->id]);?>' ><h4 class="text-primary m-t0 m-b5"><?= $talaba->ismi;?></h4>	</a>
									<span><?= $talaba->snif->name1;?></span>
								</div>
							</div>
						</div>
					<?php endforeach?>
                    </div>
                </div>
            </div>
        </div>	
		<!-- Team member END -->
       
		<!-- Our Gallery -->
        <div class="section-full content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2"><span class="text-primary">Gallerya</span></h2>
					<div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content ">
					<div class="site-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#" class="site-button outline radius-xl active"><span>Hamasini ko'rish</span></a> 
							</li>
							<li data-filter="events" class="btn">
								<input type="radio">
								<a href="#" class="site-button outline radius-xl "><span>Voqealar</span></a> 
							</li>
							<li data-filter="facilities" class="btn">
								<input type="radio">
								<a href="#" class="site-button outline radius-xl "><span>Bizning imkoniyatimiz</span></a> 
							</li>
						</ul>
					</div>
					<div class="row">
						<ul id="masonry" class="rdx-gallery-listing gallery-grid-4 gallery mfp-gallery">
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic1.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow rdx-img-effect zoom radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic2.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic3.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic4.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic5.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic5.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic6.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="facilities" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic7.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
							<li data-filter="events" class="card-container col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<div class="rdx-box rdx-gallery-box m-b0">
									<div class="rdx-media rdx-img-overlay1 rdx-img-effect zoom-slow radius-sm"> <a href="javascript:void(0);"> <img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic8.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="<?=Yii::$app->urlManager->baseUrl?>/assets/images/gallery/pic6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <!-- Our Gallery END -->
		<!-- Testimonials -->
		<div class="section-full bg-img-fix content-inner overlay-black-dark" style="background-image:url(<?=Yii::$app->urlManager->baseUrl?>/assets/images/background/bg2.jpg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="h2">Ulamolar nima deydi?</h2>
                    <div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
                    
                </div>
				<div class="section-content">
					<div>
						<div class="tab-content client-think">
							<div role="tabpanel" class="tab-pane active p-a40 fade in" id="testmonial1">
								<h5>Kimki, yolg’on so’zni birovga to’nkagay, o’z qora yuzini yog’ga bulaydi. Ozgina yolg’on ham ulug’ gunohdir; ozgina zahar ham halok qiluvchidir..</h5>
								<div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
								<h5>Alishe Navoiy</h5>
								<span>Buyuk mutafakkir olim.</span>
							</div>
							<div role="tabpanel" class="tab-pane p-a40 fade" id="testmonial2">
								<h5>Aksari hollarda yoshlarning men birovning aqli bilan yashamayman, degan gaplarini eshitasan. O’ylab ko‘rilganlarni o‘ylab o‘tirish senga ne hojat? Tayyorini olib, olg‘a ketaver. Insoniyatning qudrati shunda.</h5>
								<div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
								<h5>JLev Nikolaevich Tolstoy</h5>
								<span>Eng mashhur rus yozuvchisi </span>
							</div>
							<div role="tabpanel" class="tab-pane p-a40 fade" id="testmonial3">
								<h5>Odamning ulug’vorligi uning bo’yi bilan o’lchanmaganidek, xalqning ulug’ligi ham, uning soni bilan o’lchanmaydi, yagona o’lchovi-uning aqliy kamoloti va axloqiy barkamolligidir.</h5>
								<div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
								<h5>Viktor Gyugo</h5>
								<span> Fransuz yozuvchisi (shoir, yozuvchi va dramaturg )</span>
							</div>
						</div>
						<!-- Nav tabs -->
						<ul class="client-pic text-center m-t40" role="tablist">
							<li role="presentation" class="active">
								<a href="#testmonial1" aria-controls="testmonial1" role="tab" data-toggle="tab">
									<img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/testimonials/navoiy.jpg"/>
								</a>
							</li>
							<li role="presentation">
								<a href="#testmonial2" aria-controls="testmonial2" role="tab" data-toggle="tab">
									<img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/testimonials/talstoy.jpg"/>
								</a>
							</li>
							<li role="presentation">
								<a href="#testmonial3" aria-controls="testmonial3" role="tab" data-toggle="tab">
									<img src="<?=Yii::$app->urlManager->baseUrl?>/assets/images/testimonials/gyego.jpg"/>
								</a>
							</li>
						</ul>
						<!-- Tab panes -->
					</div>
				</div>
			</div>
		</div>		
		<!-- Testimonials End -->
		<!-- Latest News -->
		<div class="section-full content-inner box-shadow">
			<div class="container"> 
				<div class="row">
					<div class="section-head text-center">
						<h2  class="h2"><span class="text-primary">Eng yaxshi murabbiylar bilan tanishing</span></h2>
						<div class="rdx-separator-outer"><div class="rdx-separator bg-primary style-liner"></div></div>
						<p>Maktabimizda o'z ishigan masulyat bilan yondashib va ko'p yillik tajribalarni o'zidan keyingi yosh o'qtuvchilarga o'rgatib kelayoygan o'qtuvchilar.</p>
					</div>
				</div>
				<div class="row">
                    <?php foreach ($ustoz as $ustoz): ?>
					<div class="col-md-4 col-sm-4 m-b30">
						<div class="">
							<div class="rdx-media"> <a href="#"><img src="/<?=$tadbir->getImage()?>" alt=""></a> </div>
							<div class="rdx-info p-a20 border-1 text-center">
								<h2 class="rdx-title m-t0 m-b10 font-weight-900"><a href="#"><?= $ustoz->title; ?></a></h2>
								<div class="text-center news-info m-tb15">
									<ul class="icon-list">
										
 										<!-- <li class="event-date"><i class="fa fa-user text-primary m-r10"></i><?= $ustoz->ismi; ?> <?= $ustoz->familyasi; ?> </li> -->
										<!-- <li class="event-address"><i class="fa fa-map-marker text-primary m-r10"></i>south africa</li> -->
									</ul>
								</div>
								<p><?= $ustoz->tarif; ?> </p>
							</div>
						</div>
					</div>
                <?php endforeach; ?>
					
				</div>
			</div>
		</div>
		<!-- Latest News END -->
		
    </div>
    <!-- Content END-->


  <?php


                      // $this->registerJsFile('js/custom.js', yii\web\View::POS_END);
?>
