<?php 
/**
 * Template part for portfolio section
 *
 */
$richee_portfolio_heading		= get_theme_mod('portfolio_area_heading','portfolio');
$richee_portfolio_sub_heading	= get_theme_mod('portfolio_area_sub_heading','VISIT MY PORTFOLIO & SEE MY LATEST PROJECTS');
$richee_categories				= get_theme_mod('portfolio_category');
$richee_portfolio_items			= get_theme_mod('portfolio_items');
$richee_portfolio_btn_url		= get_theme_mod('portfolio_area_btn_url');
$richee_portfolio_btn_label		= get_theme_mod('portfolio_area_btn_label');

?>







<!-- PORTFOLIO AREA STARTED -->
	<section id="portfolio" class="portfolio-area">
		<div class="container">
			<div class="row text-center">
				<div class="col-12 section-content mb-5">
					<h4 class="sub-heading"><?php echo esc_html($richee_portfolio_sub_heading);?></h4>
					<h2 class="section-heading mb-3"><?php echo esc_html($richee_portfolio_heading);?></h2>
				</div>
				<!-- PORTFOLIO BUTTON START -->
				<div class="portfolio-button">
					<button type="button" data-filter="all">All</button>

				<?php foreach($richee_categories as $richee_category):
					$richee_cat_class=str_replace(' ','-',$richee_category['portfolio_category']);
				?>
					<button type="button" data-filter=".<?php echo esc_attr($richee_cat_class);?>"><?php echo esc_html($richee_category['portfolio_category']);?></button>
				<?php endforeach;?>

				</div>
				<!-- PORTFOLIO BUTTON END -->
				<div class="row portfolio-list">
				<?php foreach($richee_portfolio_items as $richee_item):
					$richee_cat_filter=str_replace(' ','-',$richee_item['portfolio_category']);
					$richee_cat_filter=str_replace('|',' ',$richee_cat_filter);
				?>
					<!-- PORTFOLIO ITEM START -->
					<div class="col-12 col-sm-6 col-lg-4 mix <?php echo esc_attr($richee_cat_filter);?>" data-order="1">
						<div class="mix-aftr">
							<h4 class="portfolio-title">
							<a href="#">
							<?php 
							$richee_cat=$richee_item['portfolio_category'];
							$richee_cat=str_replace("|"," & ",$richee_cat);
							echo esc_html($richee_cat);?>
							</a>	
							</h4>
							<img src="<?php echo esc_url($richee_item['portfolio_image']);?>" alt="<?php echo esc_attr($richee_item['portfolio_category']);?>">
						</div>
					</div>
					<!-- PORTFOLIO ITEM END -->
				<?php endforeach;?>

					

				</div>	
				<?php

					if($richee_portfolio_btn_url !== ''){

					echo '<a href="'.esc_url($richee_portfolio_btn_url).'" class="button button-primary mt-4">'.esc_html($richee_portfolio_btn_label).'</a>';

					}
				?>
				   
				
			</div>
		</div>
	</section>
	<!-- PORTFOLIO AREA END -->
