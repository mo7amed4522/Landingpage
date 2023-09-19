<footer class="padding_4x" id="contact_page">
   <div class="flex">
      <section class="flex-content padding_1x">
         <h4><?= $this->home_model->get_type_name_by_id('tbl_config','1','value'); ?></h4>
         <img src="<?php echo $server_url; ?>uploads/landingpage_image/<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','54','value'); ?>">
         <p>Market your restaurant with Foodzo to increase the growth of your food stall. Expect high and advanced features frequently. The most demanding and trendy designs may increase your sales count.</p>
      </section>
      <section class="flex-content padding_1x">
         <h4>About Us</h4>
         <a href="#about">About</a>
         <a href="#foodzo_process">Foodzo</a>
         <a href="#features_page">Features</a>
         <a href="#popular_food">Food</a>
         <a href="#success_story">Stories</a>
         <a href="#app">App</a>
         <a href="#contact_page">Contact</a>
      </section>
      <section class="flex-content padding_1x">
         <h4>Resources</h4>
         <a href="#">Guides</a>
         <a href="#">Research</a>
         <a href="#">Experts</a>
         <a href="#">Agencies</a>
      </section>
      <section class="flex-content padding_1x">
         <h4>Get In Touch</h4>
         <p class="has-text-align-left">
            <!-- untuk mengganti icon, ganti fas fa-nama-icon -->
            <span class="fa fa-map-marker"></span>&nbsp;&nbsp;
				<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','40','value'); ?> <br /> <?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','47','value'); ?>
            <br>
            <span class="fa fa-phone"></span>
            &nbsp;&nbsp;<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','41','value'); ?><br>
            <span class="fa fa fa-envelope"></span>
            &nbsp;&nbsp;<a style="display:inline-block;" href="foodzo@gmail.com" class="__cf_email__" data-cfemail="a2c0c3c1c9d2cbd2c7d08cc1cdcfe2c5cfc3cbce8cc1cdcf"><?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','42','value'); ?></a>
         </p>
         <section class="flex-content2 padding_1x">
            <a href="<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','43','value'); ?>" class="so_icon"><i class="fa fa-facebook"></i></a>
            <a href="<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','44','value'); ?>" class="so_icon"><i class="fa fa-twitter"></i></a>
            <a href="<?= $this->home_model->get_type_name_by_id('tbl_landingpage_config','45','value'); ?>" class="so_icon"><i class="fa fa-dribbble"></i></a>
            
         </section>
      </section>
   </div>
   <p class="text-center">Copyright ©2023 All rights reserved by  <a style="display:inline-block;" href="http://documentation.cyanoverse.com/#/artical" target="_blank">Cyanoverse</a></p>
</footer>
