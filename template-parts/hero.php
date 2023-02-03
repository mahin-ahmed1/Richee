<?php

/**
 * Template part for hero section
 *
 */
$richee_wlcm_text			= get_theme_mod('wlcm_text',"Hi, I'm");
$richee_hero_name			= get_theme_mod('hero_name','Mahin Ahmed');
$richee_before_repeater_text= get_theme_mod('before_repeater_txt','Professional');
$richee_animate_text		= get_theme_mod('animate_type_text','Web Designer|Web Developer');
$richee_hero_desc			= get_theme_mod('hero_area_desc','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, quia blanditiis in voluptatum eligendi hic error dignissimos corporis consequatur !');
$richee_hero_btn_label		= get_theme_mod('hero_area_btn_label',"Hire Me");
$richee_hero_btn_url		= get_theme_mod('hero_area_btn_url','#');
$richee_hero_img			= get_theme_mod('hero_image_url',get_template_directory_uri().'/assets/images/hero-area.png');


?>


<!-- HERO AREA STARTED -->
	<section id="home" class="hero-area">
		<div class="container">
			<div class="row align-items-center flex-column-reverse flex-lg-row">
				<div class="col-12 col-lg-7 hero-intro">
					<h3 class="highlight-text"><?php echo esc_html($richee_wlcm_text);?></h3>
					<h1><?php echo esc_html($richee_hero_name);?></h1>
					<h3 class="text-capitalize"><?php echo esc_html($richee_before_repeater_text);?>
						<span class="animate-typing" data-animate-loop="true" data-remove-delay="2000">
						<?php echo esc_html($richee_animate_text);?>
					</span>
					</h3>    
					<p><?php echo esc_html($richee_hero_desc);?></p>
					<a href="<?php echo esc_url($richee_hero_btn_url);?>" class="button mt-3 button-primary">
						<?php echo esc_html($richee_hero_btn_label);?>		
					</a>
					
					
				</div>
				<div class="col-12 col-lg-5 text-md-center">
					<img src="<?php echo esc_url($richee_hero_img);?>" class="img-fluid" alt="<?php echo esc_attr($richee_hero_name);?>">
				</div>
			</div>
		</div>
	</section>
<!-- HERO AREA END -->