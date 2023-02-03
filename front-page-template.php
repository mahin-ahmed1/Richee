<?php
/*
  Template Name: Front Page
 */
?>

<?php get_header();?>

	<?php if(get_theme_mod('hero_switch','on')):?>

		<?php get_template_part('template-parts/hero');?>

	<?php endif;?>

	<?php if(get_theme_mod('about_switch','on')):?>
	
		<?php get_template_part('template-parts/about');?>

		<?php get_template_part('template-parts/achieve');?>

	<?php endif;?>

	<?php if(get_theme_mod('service_switch','on')):?>
	
		<?php get_template_part('template-parts/services');?>

	<?php endif;?>

	<?php if(get_theme_mod('resume_switch','on')):?>
	
		<?php get_template_part('template-parts/resume');?>

	<?php endif;?>

	<?php if(get_theme_mod('portfolio_switch','on')):?>
	
		<?php get_template_part('template-parts/portfolio');?>

	<?php endif;?>

	<?php if(get_theme_mod('testimonial_switch','on')):?>
	
		<?php get_template_part('template-parts/testimonial');?>

	<?php endif;?>

	<?php if(get_theme_mod('contact_switch','on')):?>
	
		<?php get_template_part('template-parts/contact');?>

	<?php endif;?>


<?php get_footer();?>