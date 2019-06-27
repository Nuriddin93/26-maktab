 <!-- Content --> 
 <?php use yii\widgets\LinkPager;?>
   <div class="page-content">
    
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                   
                                    </ul>
                                    <h3 class="post-title"><a href="#"><?=$qonun->title?></a></h3>
                               
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
                            
                           
                              <table>
                                <?php foreach ($qonun as $qonun):?>
                                 
                                
                                  <tr>
                                      <td>
                                        <?= $qonun->title;?></td>
                                  </tr>
                                   <td><?=str_replace('.','<br>',$qonun->text);?><hr></td> 
                                
                              <?php endforeach;?>
                              </table>
                                
                           
                           

                          <!--   <div class="rdx-post-tags clear">
                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                            </div> -->
                        </div>
                       
                        <!-- blog END -->
                    </div>

                </div>
            </div>
        </div>
                    
                   
                   </div>
                   
    <!-- Content END-->
  
