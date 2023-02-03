<?php 
/**
 * Template part for achieve section
 *
 */

$richee_box1_icon	= get_theme_mod("box1_achieve_icon","fa-solid fa-people-group");
$richee_box1_number	= get_theme_mod("box1_achieve_number","2000+");
$richee_box1_title	= get_theme_mod("box1_achieve_title","active clients");
$richee_box2_icon	= get_theme_mod("box2_achieve_icon","fa-solid fa-diagram-project");
$richee_box2_number	= get_theme_mod("box2_achieve_number","3000+");
$richee_box2_title	= get_theme_mod("box2_achieve_title","completed projects");
$richee_box3_icon	= get_theme_mod("box3_achieve_icon","fa-solid fa-laptop-file");
$richee_box3_number	= get_theme_mod("box3_achieve_number","7+");
$richee_box3_title	= get_theme_mod("box3_achieve_title","years of experience");
$richee_box4_icon	= get_theme_mod("box4_achieve_icon","fa-solid fa-medal");
$richee_box4_number	= get_theme_mod("box4_achieve_number","29");
$richee_box4_title	= get_theme_mod("box4_achieve_title","awards");

?>




<!-- ACHIEVE AREA STARTED -->
	<section class="achieve-area">
		<div class="container">
			<div class="row text-center">

				<div class="col-6 col-lg-3 mb-sm-5 row counter-box">
					<div class="col-12">
						<i class="<?php echo esc_attr($richee_box1_icon);?>"></i>
					</div>
					<div class="col-12">
						<h3 class="achivement-number"><?php echo esc_html($richee_box1_number);?></h3>
						<h4><?php echo esc_html($richee_box1_title);?></h4>
					</div>						
				</div>

				<div class="col-6 col-lg-3 mb-sm-5 row counter-box">
					<div class="col-12">
						<i class="<?php echo esc_attr($richee_box2_icon);?>"></i>
					</div>
					<div class="col-12">
						<h3 class="achivement-number"><?php echo esc_html($richee_box2_number);?></h3>
						<h4><?php echo esc_html($richee_box2_title);?></h4>
					</div>						
				</div>

				<div class="col-6 col-lg-3 mb-sm-5 row counter-box">
					<div class="col-12">
						<i class="<?php echo esc_attr($richee_box3_icon);?>"></i>
					</div>
					<div class="col-12">
						<h3 class="achivement-number"><?php echo esc_html($richee_box3_number);?></h3>
						<h4><?php echo esc_html($richee_box3_title);?></h4>
					</div>							
				</div>

				<div class="col-6 col-lg-3 mb-sm-5 row counter-box">
					<div class="col-12">
						<i class="<?php echo esc_attr($richee_box4_icon);?>"></i>
					</div>
					<div class="col-12">
						<h3 class="achivement-number"><?php echo esc_html($richee_box4_number);?></h3>
						<h4><?php echo esc_html($richee_box4_title);?></h4>
					</div>							
				</div>

			</div>
		</div>
	</section>
	<!-- ACHIEVE AREA END -->