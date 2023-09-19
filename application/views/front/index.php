<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <?php include 'top_links.php'?>
   </head>

   <body data-spy="scroll" data-target=".mainmenu-area">
      <div class="preloader">
         <span><img src="<?php echo  $server_url; ?>uploads/general_settings/favicon_77.png" /></span>
      </div>
      <?php include 'header.php'?>
      <section class="progress-area gray-bg" id="about">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-md-6">
                  <figure class="mobile-image">
                     <img data-cfsrc="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','49','value'); ?>" alt="" >

                     <noscript><img src="<?php echo base_url(); ?>assets/images/progress-phone.png" alt=""></noscript>
                  </figure>
               </div>
               <div class="col-xs-12 col-md-6">
                  <div class="page-title section-padding p_l20">
                     <h5 class="title wow fadeInUp" data-wow-delay="0.2s">About</h5>
                     <div class="space-10"></div>
                     <h3 class="black_color f_w6 wow fadeInUp" data-wow-delay="0.4s"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','4','value'); ?></h3>
                     <div class="space-20"></div>
                     <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','5','value'); ?></p>
                        <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','46','value'); ?></p>
                     </div>
                     <div class="space-50"></div>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-padding login-section" id="foodzo_process">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6">
                  <div class="page-title">
                     <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Food section </h5>
                     <div class="space-10"></div>
                     <h3 class="black_color f_w6 wow fadeInUp" data-wow-delay="0.4s"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','6','value'); ?></h3>
                  </div>
                  <div class="space-20"></div>
                  <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                     <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','7','value'); ?></p>
                     <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','8','value'); ?></p>
							<p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','9','value'); ?></p>
							<p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','10','value'); ?></p>
                  </div>
                  <div class="space-50"></div>
                  <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                  <div class="space-60 hidden visible-xs"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <!--<i class="fa fa-sign-in"></i>-->
                        <img src="<?php echo base_url(); ?>assets/images/icons/login.png" class="width44">
                     </div>
                     <h4 class="black_color f_w6">Login <?= $this->home_model->get_type_name_by_id('tbl_config','1','value'); ?></h4>
                     <p class="black_color">Create your new account or Login your <?= $this->home_model->get_type_name_by_id('tbl_config','1','value'); ?> app</p>
                  </div>
                  <div class="space_20"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/order2.png" class="width44">
                     </div>
                     <h4 class="black_color f_w6">Find Your Favourite Food and Order</h4>
                     <p class="black_color">You can search your favourite food and easy to order.</p>
                  </div>
                  <div class="space_20"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/delivery-man.png" class="width44">
                     </div>
                     <h4 class="black_color f_w6">Delivery & Pickup</h4>
                     <p class="black_color">Your Ordered favourite food is delivered in just 30 minutes</p>
                  </div>
                  <div class="space_20"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/burger.png" class="width44">
                     </div>
                     <h4 class="black_color f_w6">Enjoy Your Recipe</h4>
                     <p class="black_color">Your favourite Delicious food is delivered your doorstep and enjoy our services</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="features-shape-1">
            <img src="<?php echo base_url(); ?>assets/images/shape/shape-25.png" alt="">
         </div>
         <div class="features-shape-3">
            <img src="<?php echo base_url(); ?>assets/images/shape/shape-7.png" alt="">
         </div>
         <div class="hero-shape-1">
            <img src="<?php echo base_url(); ?>assets/images/shape/shape-26.png" alt="">
         </div>
      </section>
      <section class="section-padding eduvibe-about-one-team" id="delivery">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-md-6">
                  <div class="video-photo">
                 <!--<img data-cfsrc="http://localhost:8080/applanding_current_11-1-2023/assets/images/delivery5.png" alt="" src="http://localhost:8080/applanding_current_11-1-2023/assets/images/delivery5.png">-->  
						<img data-cfsrc="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','50','value'); ?>" style="width:90%;height:400px;" alt="" >
                  </div>
               </div>
               <div class="col-xs-12 col-md-5 col-md-offset-1">
                  <div class="space-60 hidden visible-xs"></div>
                  <div class="page-title">
                     <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Delivery</h5>
                     <div class="space-10"></div>
                     <h3 class="black_color f_w6 wow fadeInUp" data-wow-delay="0.4s"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','11','value'); ?></h3>
                     <div class="space-20"></div>
                     <div class="desc black_color wow fadeInUp" data-wow-delay="0.6s">
                        <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','12','value'); ?></p>
                     </div>
                     <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','13','value'); ?></p>
                     </div>
                     <a href=" <?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','56','value'); ?>" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Download Deliveryman App</a>
                     <div class="space-20"></div>
                   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="feature-area section-padding-top" id="features_page">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                  <div class="page-title text-center">
                     <h5 class="title black_color">Features</h5>
                     <div class="space-10"></div>
                     <h3 class="black_color f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','14','value'); ?></h3>
                     <div class="space-60"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/order2.png" class="width44">
                     </div>
                     <h4 class="black_color f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','15','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','21','value'); ?></p>
                  </div>
                  <div class="space-60"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/shield.png" class="width44">
                     </div>
                     <h4 class="f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','16','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','22','value'); ?></p>
                  </div>
                  <div class="space-60"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/delivery-man.png" class="width44">
                     </div>
                     <h4 class="f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','17','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','23','value'); ?></p>
                  </div>
                  <div class="space-60"></div>
               </div>
               <div class="hidden-xs hidden-sm col-md-4">
                  <figure class="mobile-image">
                     <img data-cfsrc="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','48','value'); ?>" alt="Feature Photo" >
                     <noscript><img src="<?php echo base_url(); ?>assets/images/feature_screen.png" alt="Feature Photo"></noscript>
                  </figure>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/pointer.png" class="width44">
                     </div>
                     <h4 class="f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','18','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','24','value'); ?></p>
                  </div>
                  <div class="space-30"></div>
                  <div class="space-60"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/shield.png" class="width44">
                     </div>
                     <h4 class="f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','19','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','25','value'); ?></p>
                  </div>
                  <div class="space-60"></div>
                  <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                     <div class="box-icon">
                        <img src="<?php echo base_url(); ?>assets/images/icons/earn.png" class="width44">
                     </div>
                     <h4 class="f_w6"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','20','value'); ?></h4>
                     <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','26','value'); ?></p>
                  </div>
                  <!--<div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                     <div class="box-icon">
                        <i class="lnr lnr-cog"></i>
                     </div>
                     <h4>Editable Layout</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                     </div>-->
                  <div class="space-60"></div>
               </div>
            </div>
         </div>
      </section>
      <div style="" class="eduvibe-about-one-team edu-team-area team-area-shape-position p_b127 bg-image bg-image--8 paralax-area" id="popular_food">
         <div class="wrapper">
            <div class="container eduvibe-animated-shape">
               <div class="row g-5">
                  <div class="page-title text-center">
                     <img data-cfsrc="<?php echo base_url(); ?>assets/images/about-logo.png" alt="About Logo" style="display:none;visibility:hidden;">
                     <noscript><img src="<?php echo base_url(); ?>assets/images/about-logo.png" alt="About Logo"></noscript>
                     <div class="space-20"></div>
                     <h5 class="title"><?= $this->home_model->get_type_name_by_id('tbl_config','1','value'); ?></h5>
                     <div class="space-30"></div>
                     <h3 class="blue-color">
                     Our Popular Food Items
                     <h3>
                  </div>
               </div>
               <div class="row row--20">
                  <!-- Start Instructor Grid  -->
                  <div class="col-lg-12 mt--45 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                     <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1 owl-carousel owl-theme" id="owl-carousel">
                        <div class="item m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/chinese.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Chinese</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/gravy.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Gravy</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/biryani.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Biryani</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/burger.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Burger</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/south_food.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">South Indian</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/chicken.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Chicken</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/pizza.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Pizza</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/soup.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Soup</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/ice_cream.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Ice Cream</a></h4>
                           </div>
                        </div>
                        <div class="item own_slide m30">
                           <div class="edu-instructor">
                              <div class="inner">
                                 <div class="thumbnail">
                                    <a href="#">
                                    <img src="assets/images/food/variety_rice.png" alt="team images">
                                    </a>
                                 </div>
                                 <div class="team-share-info">
                                    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                    <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="edu-instructor-info">
                              <h4 class="title blue-color f_w600"><a href="#">Variety Rice</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Instructor Grid  -->
                  <!-- End Instructor Grid  -->
               </div>
            </div>
         </div>
      </div>
      <section class="testimonial-section" id="success_story">
         <div class="large-container">
            <div class="sec-title">
               <span class="title">Success Story</span>
               <h2>What Our user say ?</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">
               <!-- Testimonial Block -->
               <div class="testimonial-block">
                  <div class="inner-box">
                     <div class="text"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','27','value'); ?></div>
                     <div class="info-box">
                        <div class="thumb"><img class="circle_avatar" src="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','51','value'); ?>" alt=""></div>
                        <h4 class="name"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','30','value'); ?></h4>
                        <span class="designation"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','33','value'); ?></span>
                     </div>
                  </div>
               </div>
               <!-- Testimonial Block -->
               <div class="testimonial-block">
                  <div class="inner-box">
                     <div class="text"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','28','value'); ?></div>
                     <div class="info-box">
                        <div class="thumb"><img class="circle_avatar" src="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','52','value'); ?>" alt=""></div>
                        <h4 class="name"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','31','value'); ?></h4>
                        <span class="designation"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','34','value'); ?></span>
                     </div>
                  </div>
               </div>
               <!-- Testimonial Block -->
               <div class="testimonial-block">
                  <div class="inner-box">
                     <div class="text"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','29','value'); ?></div>
                     <div class="info-box">
                        <div class="thumb"><img class="circle_avatar" src="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','53','value'); ?>" alt=""></div>
                        <h4 class="name"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','32','value'); ?></h4>
                        <span class="designation"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','35','value'); ?></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="thumb-layer paroller">
               <figure class="image"><img src="http://t.commonsupport.com/adro/images/resource/user-thumbs.png" alt=""></figure>
            </div>
         </div>
      </section>
      <div class="download-area overlay2" id="app">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-5 hidden-sm">
                  <figure class="mobile-image">
                     <img data-cfsrc="<?php echo base_url(); ?>assets/images/download_image3.png" alt="" class="width300" style="display:none;visibility:hidden;">
                     <noscript><img src="<?php echo base_url(); ?>assets/images/download-image3.png" class="width300" alt=""></noscript>
                  </figure>
               </div>
               <div class="col-xs-12 col-md-6 section-padding">
                  <h3 class="white-color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','36','value'); ?></h3>
                  <div class="space-20"></div>
                  <p><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','37','value'); ?></p>
                  <div class="space-30"></div>
                  <a href="<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','39','value'); ?>" class="bttn-white b_r10" style="font-size: 10px;padding-left: 14px;padding-right: 14px;padding-top: 9px;padding-bottom: 5px;">
                     <div class="flex">
                        <div class="">
                           <img data-cfsrc="<?php echo base_url(); ?>assets/images/apple-icon.png" alt="apple icon" style="display:none;visibility:hidden;">
                           <noscript><img src="<?php echo base_url(); ?>assets/images/apple-icon.png" alt="apple icon"></noscript>
                        </div>
                        <div>
                           <p style="margin:0;line-height:1.7;">Get it on</p>
                           <span class="f_s16">App Store</span>
                        </div>
                     </div>
                  </a>
                  <a href="<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','38','value'); ?>" class="bttn-white b_r10" style="font-size: 10px;padding-left: 14px;padding-right: 14px;padding-top: 9px;padding-bottom: 5px;">
                     <div class="flex">
                        <div class="">
                           <img data-cfsrc="<?php echo base_url(); ?>assets/images/play-store-icon.png" alt="Play Store Icon" style="display:none;visibility:hidden;">
                           <noscript><img src="<?php echo base_url(); ?>assets/images/play-store-icon.png" alt="Play Store Icon"></noscript>
                        </div>
                        <div>
                           <p style="margin:0;line-height:1.7;">Download on</p>
                           <span class="f_s16">Play Store</span>
                        </div>
                     </div>
                  </a>
                  
               </div>
            </div>
         </div>
      </div>
    
      <!-- footer -->
      <?php include 'footer.php'?>
      <script>
         (function($) {
         
         "use strict";
         
         // Testimonial Carousel
         if ($('.testimonial-carousel').length) {
         $('.testimonial-carousel').owlCarousel({
         	animateOut: 'slideOutDown',
             animateIn: 'zoomIn',
         	loop:true,
         	margin:0,
         	nav:true,
         	smartSpeed: 300,
         	autoplay: true,
         	navText: [ '<span class="arrow-left"></span>', '<span class="arrow-right"></span>' ],
         	responsive:{
         		0:{
         			items:1
         		},
         		600:{
         			items:1
         		},
         		800:{
         			items:1
         		},
         		1024:{
         			items:1
         		}
         	}
         });  		
         }
         
         })(window.jQuery);
      </script>
      <script>
         $('#owl-carousel').owlCarousel({
             loop: true,
             margin: 5,
             
             dots: true,
             nav: true,
             items: 5,
             smartSpeed: 300,
             autoplay: true,
             navText: [ '<img class="arrow_img" src="<?php echo base_url(); ?>assets/images/left_arrow.png">', '<img class="arrow_img" src="<?php echo base_url(); ?>assets/images/right_arrow.png">' ],
                  	responsive:{
                  		0:{
                  			items:1
                  		},
                        320:{
                           items:2
                        },
                        400:{
                           items:2
                        },
                        500:{
                           items:2
                        },
                  		600:{
                  			items:2
                  		},
                  		800:{
                  			items:3
                  		},
                  		1024:{
                  			items:5
                  		}
                  	}
         })
         
                  
      </script>
      
      <?php include 'bottom_links.php'?>
   </body>
</html>
