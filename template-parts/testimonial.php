<?php 
/**
 * Template part for testimonials section
 *
 */
$richee_testimonial_heading 	=get_theme_mod('testimonial_area_heading','testimonials');
$richee_testimonial_sub_heading	=get_theme_mod('testimonial_area_sub_heading','SEE WHAT OUR CLIENTS SAYS');
$richee_testimonials 			=get_theme_mod('testimonials');
?>

	<!-- TESTIMONIALS AREA STARTED -->
	<section id="testimonials" class="testimonial-area">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center section-content mb-5">
					<h4 class="sub-heading"><?php echo esc_html($richee_testimonial_sub_heading);?></h4>
					<h2 class="section-heading"><?php echo esc_html($richee_testimonial_heading);?></h2>
				</div>
				<div class="owl-carousel owl-theme">

				<?php foreach($richee_testimonials as $richee_testimonial):?>

					<!-- TESTIMONIAL ITEM START -->
				  <div class="col-12 text-center"> 
				  	<div class="testimonial-box">
				  		<span>❝</span>
				  		<p><?php echo $richee_testimonial['client_review'];?></p>
				  		<hr class="mb-3 mt-3">
				  		<img src="<?php echo $richee_testimonial['client_img'];?>" class="img-fluid" alt="<?php echo esc_attr($richee_testimonial['client_name']);?>">
				  		<h4 class="text-capitalize mt-3"><?php echo esc_html($richee_testimonial['client_name']);?></h4>
				  	</div>
				  </div>
				  <!-- TESTIMONIAL ITEM END -->

				 <?php endforeach;?>

				 
				</div>
			</div>
		</div>
	</section>
	<!-- TESTIMONIALS AREA END -->



















