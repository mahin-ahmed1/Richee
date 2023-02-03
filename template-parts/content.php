<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package richee
 */

?>
<?php get_header();?>
	
	<?php while(have_posts()):the_post();?>
		<h2><?php the_title();?></h2>
		<p><?php the_content();?></p>
		<p><?php the_tags()?></p>
	<?php endwhile;?>
<?php get_footer();?>