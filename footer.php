<?php
/**
 * The template for displaying the footer
 *
 *
 * @package richee
 */

?>

	<!-- FOOTER AREA STARTED -->
	<footer class="footer-area">
		<div class="row align-items-center">
			<div class="col-12">
				<?php 
				$richee_footer_copyright=get_theme_mod('copy_text');
				if($richee_footer_copyright){
					echo '<p>'.$richee_footer_copyright.'</p>';
				}else{
					echo __('<p>© 2023. Richee — PERSONAL PORTFOLIO THEME. ALL RIGHTS RESERVED.</p>','richee');
				}
				
				?>
			</div>
		</div>
	</footer>
	<!-- FOOTER AREA END -->
	
<?php wp_footer(); ?>

</body>
</html>
