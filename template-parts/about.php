<?php 
/**
 * Template part for about section
 *
 */

$richee_about_area_heading		= get_theme_mod('about_area_heading','About Myself');
$richee_about_area_sub_heading	= get_theme_mod('about_area_sub_heading','a few words');
$richee_about_area_desc			= get_theme_mod('about_area_desc','Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Eveniet consequuntur laudantium, veniam voluptas ipsam asperiores, saepe architecto velit repellat officia.');

$richee_about_area_bio_heading	= get_theme_mod('about_area_bio_heading','Personal Information');
$richee_about_bio_name			= get_theme_mod('about_bio_name','Mahin Ahmed');
$richee_about_bio_age			= get_theme_mod('about_bio_age','21');
$richee_about_bio_residence		= get_theme_mod('about_bio_residence','Bangladesh');
$richee_about_bio_address		= get_theme_mod('about_bio_address','Dhaka, Bangladesh');
$richee_about_bio_email			= get_theme_mod('about_bio_email','demo@gmail.com');
$richee_about_bio_phone			= get_theme_mod('about_bio_phone','+534 453335');
$richee_about_area_btn_label	= get_theme_mod('about_area_btn_label','Download CV');
$richee_about_area_btn_url		= get_theme_mod('about_area_btn_url','#');
$richee_about_area_img			= get_theme_mod('about_image_url',get_template_directory_uri().'/assets/images/about.png');
?>







<!-- ABOUT AREA STARTED -->
	<section id="about" class="about-area">
		<div class="container about-bg">
			<div class="row align-items-center">
				<div class="col-12 col-lg-5 text-center">
					<img src="<?php echo esc_url($richee_about_area_img);?>" class="img-fluid" alt="about-me">
				</div>
				<div class="col-12 col-lg-7 about-info">
					<h4 class="sub-heading mb-1"><?php echo esc_html($richee_about_area_sub_heading);?></h4>
					<h2 class="section-heading mb-2"><?php echo esc_html($richee_about_area_heading);?></h2>
					<p class="mb-4"><?php echo esc_html($richee_about_area_desc,);?></p>

					<div class="info-box row">
						<h3><?php echo esc_html($richee_about_area_bio_heading);?></h3>
						<hr>
						<div class="col-md-1 col-lg-12"></div>
						<div class="col-12 col-sm-5 col-md-5 left-about-info">
							<span class="d-block text-capitalize"><b><?php _e('name','richee');?> : </b><?php echo esc_html($richee_about_bio_name);?></span>
							<span class="d-block text-capitalize"><b><?php _e('age','richee');?> : </b><?php echo esc_html($richee_about_bio_age);?></span>
							<span class="d-block text-capitalize  mb-5"><b><?php _e('residence','richee');?> : </b><?php echo esc_html($richee_about_bio_residence);?></span>
							<a href="<?php echo esc_url($richee_about_area_btn_url);?>" class="button button-primary sm-screen-hide"><?php echo esc_html($richee_about_area_btn_label);?></a>
							
						</div>
						<div class="col-12 col-lg-7 col-sm-7 col-md-6 right-about-info">
							<span class="d-block text-capitalize"><b><?php _e('address','richee');?> : </b><?php echo esc_html($richee_about_bio_address);?></span>
							<span class="d-block text-capitalize"><b><?php _e('email','richee');?> : </b><?php echo esc_html($richee_about_bio_email);?></span>
							<span class="d-block text-capitalize mb-5"><b><?php _e('phone','richee');?>  : </b><?php echo esc_html($richee_about_bio_phone);?></span>

							<a href="<?php echo esc_url($richee_about_area_btn_url);?>" class="button button-primary d-sm-none mb-5"><?php echo esc_html($richee_about_area_btn_label);?></a>
							
							<div class="social-icons">
								<?php 
									$links=get_theme_mod('social_icon_link');

									foreach($links as $link){

										if($link['social_link']){
											printf('<a href="%s"><i class="fa-brands %s"></i></a>',$link['social_link'],$link['font_class']);
										}
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ABOUT AREA END -->