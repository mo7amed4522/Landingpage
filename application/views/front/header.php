<style>
   .header_color{
   color:#000000;
   }
</style>


<nav class="mainmenu-area" id="headscroll" data-spy="affix" data-offset-top="200">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mirage2.min.js"></script>
            <img data-cfsrc="<?php echo  $server_url; ?>uploads/general_settings/favicon_77.png" alt="Logo" style="display:none;visibility:hidden;">
            <noscript><img src="<?php echo  $server_url; ?>uploads/general_settings/favicon_77.png" alt="Logo"></noscript>
         </a>
      </div>
      <div class="collapse navbar-collapse" id="primary_menu">
         <ul class="nav navbar-nav mainmenu">
            <!--<li ><a href="#services" class="header_color">Why we are</a></li>-->
            <li class="active"><a href="#about" class="header_color">About</a></li>
            <!--<li><a href="#delivery">Delivery</a></li>-->
            <li><a href="#foodzo_process" class="header_color">Foodzo</a></li>
            <li><a href="#features_page" class="header_color">Features</a></li>
            <li><a href="#popular_food">Food</a></li>
            <li><a href="#success_story" class="header_color">Stories</a></li>
            <li><a href="#app" class="header_color">App</a></li>
            <li><a href="#contact_page" class="header_color">Contact</a></li>
         </ul>
      </div>
   </div>
</nav>
<header class="home-area overlay" id="home_page">
   <div class="container" id="startchange">
      <div class="row">
         <div class="col-xs-12 col-md-7">
            <div class="space-80 hidden-xs"></div>
            <h1 class="wow fadeInUp black_color f_w6" data-wow-delay="0.4s"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','2','value'); ?></h1>
            <div class="space-20"></div>
            <div class="desc wow fadeInUp" data-wow-delay="0.6s">
               <p class="black_color"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','3','value'); ?></p>
            </div>
            <div class="space-20"></div>
            <a href="#app" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="fa fa-download"></i>Download App</a>
         </div>
         <div class="col-xs-12 hidden-sm col-md-5">
            <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
               <img class="header_img_size" data-cfsrc="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','48','value'); ?>" alt="" >
               <noscript><img src="<?php echo base_url(); ?>assets/images/header-mobile2_2.png" alt=""></noscript>
               <div class="img-data-1">
                  <img src="<?php echo base_url(); ?>assets/images/man2.png" alt="">
                  <span>20k Users</span>
               </div>
               <div class="img-data-2">
                  <img src="<?php echo base_url(); ?>assets/images/ice.png" style="width:38px !important;" alt="" >
                  <span>Order 75 +</span>
               </div>
               <div class="img-data-3">
                  <img src="<?php echo base_url(); ?>assets/images/quick.png" alt="">
                  <span>Fast Delivery</span>
               </div>
            </figure>
         </div>
      </div>
   </div>
   <div class="features-shape-1">
      <img src="<?php echo base_url(); ?>assets/images/shape/shape-6.png" alt="">
   </div>
   <!--<div class="features-shape-9">
      <img src="<?php echo base_url(); ?>assets/images/shape/shape-7.png" alt="">
      </div>-->
   <div class="features-shape-2">
      <img src="<?php echo base_url(); ?>assets/images/shape/shape-4.png" alt="">
   </div>
   <!--<div class="features-shape-3">
      <img src="<?php echo base_url(); ?>assets/images/shape/shape-8.png" alt="">
      </div>-->
   <div class="hero-shape-1">
      <img src="<?php echo base_url(); ?>assets/images/shape/shape-2.png" alt="">
   </div>
</header>
<script>
   $(document).ready(function(){       
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
     if (startchange.length){
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $(".mainmenu-area").css('background-color', '#ffffff');
           $(".header_color").css('color', '#000000');
        } else {
           $('.mainmenu-area').css('background-color', 'transparent');
           $(".header_color").css('color', '#000000');
        }
    });
     }
   });
   
</script>
