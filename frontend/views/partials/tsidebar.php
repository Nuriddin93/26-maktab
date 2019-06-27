
    <div class="col-md-3">
      <aside  class="side-bar">
     <div class="widget">
     <!--  <h4 class="widget-title">Qdruv</h4> -->
        <div class="search-bx">
         <!-- <form role="search" method="post">
          <div class="input-group">
           <input name="text" type="text" class="form-control" placeholder="Write your text">
             <span class="input-group-btn">
               <button type="submit" class="site-button"><i class="fa fa-search">
                   </i></button>
                    </span> </div>
                      </form> -->
                       </div>
                         </div>
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Ko'p O'qilganlar</h4>
                                <div class="widget-post-bx">
           <?php foreach ($popular as $articl):?>
           <div class="widget-post clearfix">
     <div class="rdx-post-media"> 
    <img src="/<?=$articl->getImage()?>" width="200" height="143" alt=""> </div>
        <div class="rdx-post-info">
        <div class="rdx-post-header">
         <h6 class="post-title"><a href='<?=Yii::$app->urlManager->createUrl(['tadbir/view','id'=>$articl->id]);?>'><?=$articl->title?></a></h6>
           </div>
           <div class="rdx-post-meta">
            <ul>
             <li class="post-author">Admin</li>
              <li class="post-comment"><i class="fa fa-comments"> <?=$articl->viewed?></i></li>
               </ul>
                </div>
                </div>
     
                  </div>
              <?php endforeach?>
                      </div>
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">Bo'limlar</h4>
                                <ul>
                                    <?php foreach ($categories as $category): ?>
                                    <li><a href="<?=Yii::$app->urlManager->createUrl(['tadbir/tcategory','id'=>$category->id]);?>"><?=$category->cat_title?></a>(<?=$category->getCount();?>)</li>
                                <?php endforeach ?>
                                </ul>
                            </div>
                            <!-- <div class="widget widget_gallery">
                                <h5 class="widget-title">Our services</h5>
                                <ul><?php foreach ($categories as $category):?>
                                    <li class="img-effect2"> <a href="#">
                                        <img src="/<?=$articl->getImage()?>" alt=""></a> </li>
                                    <?php endforeach ?>
                                </ul>
                            </div> -->
                        <!--     <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud">Tags</h4>
                                <div class="tagcloud"> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> </div>
                            </div> -->
                        </aside>
                    </div>
             