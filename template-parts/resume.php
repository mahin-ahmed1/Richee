<?php 

/**
 * Template part for resume section
 *
 */
$richee_resume_section_heading		= get_theme_mod('resume_section_heading','my resume');
$richee_resume_section_sub_heading	= get_theme_mod('resume_section_sub_heading','know about my experience & academic certificate');
$richee_tab_button1					= get_theme_mod('resume_tab1_btn_label','education');
$richee_tab_button2					= get_theme_mod('resume_tab2_btn_label','experience');
$richee_tab_button3					=get_theme_mod('resume_tab3_btn_label','awards');
$richee_tab1_content				= get_theme_mod('first_tab_btn_content');
$richee_tab2_content				= get_theme_mod('second_tab_btn_content');
$richee_tab3_content				= get_theme_mod('third_tab_btn_content');
$richee_progress_line_box_title		= get_theme_mod('line_progress_box_title','my skills');
$richee_lines_progress				= get_theme_mod('linear_progress_bar_content');
$richee_circle_progress_box_title	= get_theme_mod('circle_progress_box_title','design skills');
$richee_circle_progress				= get_theme_mod('circle_progress_bar_content');
?>






<!-- RESUME AREA STARTED -->
	<section id="resume" class="resume-area">
		<div class="container">
			<div class="row">
				<div class="col-12 section-content mb-5 text-center">
					<h4 class="sub-heading"><?php echo esc_html($richee_resume_section_sub_heading);?></h4>
					<h2 class="section-heading mb-3"><?php echo esc_html($richee_resume_section_heading);?></h2>
				</div>

				<!-- TAB LINK START -->
				<div class="col-12 col-md-12 mb-md-4 col-lg-2">
					<ul class="nav nav-tabs d-block" id="myTab" role="tablist">

					  <li class="nav-item" role="presentation">
					    <button class="nav-link active" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="true"><?php echo esc_html($richee_tab_button1);?></button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false"><?php echo esc_html($richee_tab_button2);?></button>
					  </li>
					  <li class="nav-item" role="presentation">
					    <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false"><?php echo esc_html($richee_tab_button3);?></button>
					  </li>
					</ul>
				</div>
				<!-- TAB LINK END -->

				<!-- TAB CONTENT AREA -->
				<div class="col-12 col-md-12 col-lg-5 tab-content-wrapper">
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="education" role="tabpanel" aria-labelledby="education-tab">

					  <?php foreach($richee_tab1_content as $richee_tab1):?>
					  	<div class="resume-content">
					  		<span><?php echo esc_html($richee_tab1['achieve_year']);?></span>
					  		<h3><?php echo esc_html($richee_tab1['achieve_tab_title']);?></h3>
					  		<h5><?php echo esc_html($richee_tab1['achieve_tab_from']);?></h5>
					  		<p><?php echo esc_html($richee_tab1['achieve_tab_desc']);?></p>
					  	</div>
					  <?php endforeach;?>
					  	
					  </div>

					  <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">

					  <?php foreach($richee_tab2_content as $richee_tab2):?>
					  	<div class="resume-content">
					  		<span><?php echo esc_html($richee_tab2['achieve_year']);?></span>
					  		<h3><?php echo esc_html($richee_tab2['achieve_tab_title']);?></h3>
					  		<h5><?php echo esc_html($richee_tab2['achieve_tab_from']);?></h5>
					  		<p><?php echo esc_html($richee_tab2['achieve_tab_desc']);?></p>
					  	</div>
					  <?php endforeach;?>

					  </div>

					  <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">

					  <?php foreach($richee_tab3_content as $richee_tab3):?>
					  	<div class="resume-content">
					  		<span><?php echo esc_html($richee_tab3['achieve_year']);?></span>
					  		<h3><?php echo esc_html($richee_tab3['achieve_tab_title']);?></h3>
					  		<h5><?php echo esc_html($richee_tab3['achieve_tab_from']);?></h5>
					  		<p><?php echo esc_html($richee_tab3['achieve_tab_desc']);?></p>
					  	</div>
					  <?php endforeach;?>

					  </div>
					</div>
				</div>
				<!-- TAB CONTENT END -->

				<!-- SKILLS PROGRESS BAR START -->
				<div class="col-12 col-md-12 col-lg-5 text-center">
					<div class="progress-area">
						<h3 class="mb-4"><?php echo esc_html($richee_progress_line_box_title);?></h3>
					<?php foreach($richee_lines_progress as $richee_line):?>
						<div class="progress-title row">
							<div class="col-6">
								<span><?php echo esc_html($richee_line['skills_title']);?></span>
							</div>
							<div class="col-6">
								<div class="progress-percent"><?php echo esc_html($richee_line['skills_percent']);?>%</div>
							</div>
							<div class="col-12">
								<div class="progress-bar">
								  <div class="progress" 
								       data-percent="<?php echo esc_attr($richee_line['skills_percent']);?>" 
								       data-color="#15FF49">  
								  </div>
								</div>
							</div>
						</div>
					<?php endforeach;?>				
					</div>

					<div class="design-skills-area row">
						<h3 class="mb-4"><?php echo esc_html($richee_circle_progress_box_title);?></h3>
					<?php foreach($richee_circle_progress as $richee_circle):?>
						<div class="col-12 col-sm-4 p-0">
							<div class="circlechart" data-percentage="<?php echo esc_attr($richee_circle['skills_percent']);?>">
						     <?php echo esc_html($richee_circle['skills_percent']);?>%
							</div>
							<h4><?php echo esc_html($richee_circle['skills_title']);?></h4>
						</div>
					<?php endforeach;?>
					</div>
				</div>
				<!-- SKILLS PROGRESS BAR END -->
			</div>
		</div>
	</section> 
	<!-- RESUME AREA END -->

