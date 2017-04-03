<?php

get_header();

?>
<!-- for some reason the meta variable doesn't work with the header -->
<?php $prfx_stored_meta = get_post_meta( $post->ID ); ?>


		  <section id="banner" class="row">
			  
			  <div id="banner_left" class="col-md-6">
				 <!-- <p id="banner_text">We have what it takes to take your website to the</p>
				 <p id="banner_big_text">New Height of Success</p>
				 <a id="call_to_action_button">Get Started here<img id="action_arrow" src="<?php //echo URL ?>/images/arrow.png"></a> -->
				  
				<p id="banner_text"><?php echo $prfx_stored_meta['fp_caption1_txt'][0]; ?></p> 
				<p id="banner_big_text"><?php echo $prfx_stored_meta['fp_caption2_txt'][0]; ?></p>
				<a id="call_to_action_button"><?php echo $prfx_stored_meta['fp_button_txt'][0]; ?><img id="action_arrow" src="<?php echo URL ?>/images/arrow.png"></a>
	
			  </div>
			  
			  <div id="banner_right" class="col-md-6">			  
				 <div id="banner_right_background">
					 <div id="banner_right_top">
						 <p id="banner_right_title">U Design + V Code</p>
						 <ul id="dots">
							<li id="dot_1"><img src="<?php echo URL; ?>/images/white_cricle.png"></li>
							<li id="dot_2"><img src="<?php echo URL; ?>/images/blue_dot.png"></li>
							<li id="dot_3"><img src="<?php echo URL; ?>/images/blue_dot.png"></li>
							<li id="dot_4"><img src="<?php echo URL; ?>/images/blue_dot.png"></li> 
						 </ul>
					 </div>
				 <img id="right_banner_image" src="<?php echo URL; ?>/images/slider_mock.jpg" /> 
				 </div>
			  </div>
		  
		  </section> <!-- /header -->
		  
		  <section id="about_us" class="row">
		  
				<div id= "about_us_left" class="col-md-4 col-sm-12">
				  <img src="<?php echo $prfx_stored_meta['fp_limage_url_input'][0]; ?>">
				  <h4><?php echo $prfx_stored_meta['fp_left_title'][0]; ?></h4>
				  <p><?php echo $prfx_stored_meta['fp_ltext_text'][0]; ?></p>
			  </div>
			  
			  <div id= "about_us_middle" class="col-md-4 col-sm-12">
				  <img src="<?php echo $prfx_stored_meta['fp_mimage_url_input'][0]; ?>">
				  <h4><?php echo $prfx_stored_meta['fp_mid_title'][0]; ?></h4>
				  <p><?php echo $prfx_stored_meta['fp_mtext_text'][0]; ?></p>
			  </div>
			  
			  <div id= "about_us_right" class="col-md-4 col-sm-12">
				  <img src="<?php echo $prfx_stored_meta['fp_rimage_url_input'][0]; ?>">
				  <h4><?php echo $prfx_stored_meta['fp_right_title'][0]; ?></h4>
				  <p><?php echo $prfx_stored_meta['fp_rtext_text'][0]; ?></p>
			  </div>
	
			  </section> <!-- /about_us -->
		  
		  <section id="services" class="row">
			  
			  <div id="services_left" class="col-md-4">
				  <h4><?php echo $prfx_stored_meta['fp_2_left_title'][0]; ?></h4>
				  <img src="<?php echo $prfx_stored_meta['fp_2_limage_url_input'][0]; ?>" />
				  <?php echo $prfx_stored_meta['fp_2_ltext_text'][0]; ?>
			  </div>
			  
			  <div id="services_middle" class="col-md-4">
				  <h4><?php echo $prfx_stored_meta['fp_2_mid_title'][0]; ?></h4>
				  <img src="<?php echo $prfx_stored_meta['fp_2_mimage_url_input'][0]; ?>" />
				  <?php echo $prfx_stored_meta['fp_2_mtext_text'][0]; ?>
			  </div>
			  
			  <div id="services_right" class="col-md-4">
				  <h4><?php echo $prfx_stored_meta['fp_2_right_title'][0]; ?></h4>
				  <img src="<?php echo $prfx_stored_meta['fp_2_rimage_url_input'][0]; ?>" />
				  <?php echo $prfx_stored_meta['fp_2_rtext_text'][0]; ?>
			  </div>
			  <!--
			  <div id="services_right" class="col-md-4">
				  <h4>Why hire us?</h4>
				  <img src="<?php //echo URL ?>/images/Layer10.png" />
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique tristique lacus in varius. Donec nec vestibulum ligula. Aenean turpis diam, feugiat a luctus in, rhoncus eget risus. Maecenas consequat porttitor dui, vitae consequat massa imperdiet ut. Donec laoreet, elit ut tempus lobortis, eros leo molestie velit, non egestas augue nulla eget erat.</p>
				  <a href="">Read More</a>
			  </div>
			  -->
			  
		  </section> <!-- /services -->
		  
<?php

get_footer();

?>