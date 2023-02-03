 <?php
/**
 * Template part for services section
 *
 */
 $richee_service_section_heading 	= get_theme_mod('service_section_heading','services');
 $richee_service_section_sub_heading= get_theme_mod('service_section_sub_heading','GET PREMIUM & HIGH QUALITY SERVICE');
 $richee_services 					= get_theme_mod('services_box');
 ?>
	<!-- SERVICE AREA STARTED -->
	<section id="services" class="service-area">
		<div class="container">
			<div class="row text-center">
				<div class="col-12 section-content mb-4">
					<h4 class="sub-heading"><?php echo esc_html($richee_service_section_sub_heading);?></h4>
					<h2 class="section-heading mb-3"><?php echo esc_html($richee_service_section_heading);?></h2>
				</div>

				<?php foreach ($richee_services as $richee_service):?>

				 <!-- SERVICE ITEM START -->
				<div class="col-12 col-lg-4 col-md-6 mb-5">
					<div class="service-box">
						<i class="<?php echo esc_attr($richee_service['service_icon']);?>"></i>
						<h3 class="mt-3 mb-2"><?php echo esc_html($richee_service['service_heading']);?></h3>
						<p><?php echo esc_html($richee_service['service_desc']);?></p>
					</div>
				</div>
				 <!-- SERVICE ITEM END -->
				<?php endforeach;?>
		
			</div>
		</div>
	</section>
	<!-- SERVICE AREA END -->