<?php 
/**
 * Template part for contact section
 *
 */
	
$richee_contact_area_heading		= get_theme_mod('contact_area_heading','contact');
$richee_contact_area_sub_heading	= get_theme_mod('contact_area_sub_heading','contact with me');
$richee_contact_box_info			= get_theme_mod('contact_right_box');
$richee_contact_form_shortcode		= get_theme_mod('contact_form_shortcode','[contact-form-7 id="35" title="Contact form 1"]');
?>
	<!-- CONTACT AREA STARTED -->
	<section id="contact" class="contact-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 section-content text-center mb-5">
					<h4 class="sub-heading"><?php echo $richee_contact_area_sub_heading;?></h4>
					<h2 class="section-heading mb-3"><?php echo $richee_contact_area_heading;?></h2>
				</div>
				<div class="col-12 col-md-12 col-lg-7 form-box text-center order-2 order-lg-1">
					<h2 class="section-heading mb-5 d-lg-none"><?php esc_html__('get in touch','richee');?></h2>
					<?php echo do_shortcode($richee_contact_form_shortcode);?>
				</div>


				<div class="col-12 col-md-12 col-lg-5 contact-area-right order-1 order-lg-2">
					<div class="contact-box">
					<?php foreach($richee_contact_box_info as $richee_contact_right_info):?>
						<div class="icon">
							<p>
								<i class="<?php echo esc_attr($richee_contact_right_info['contact_box_icon']);?>"></i><span class="label"><?php echo esc_html($richee_contact_right_info['contact_box_title']);?> :</span> <?php echo esc_html($richee_contact_right_info['contact_box_desc']);?>
							</p>
						</div>
					<?php endforeach;?>

						<div class="contact-area-social-icons text-center">
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
	</section>
	<!-- CONTACT AREA END -->