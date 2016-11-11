<?php
/*
	Template Name: Full Page, No Sidebar
*/
get_header();  ?>
<header>

	<section class="left">
		<?php 
			$devPortfolioArgs = array(
			'post_type' => 'developer_post_type',
			);
			$devPortfolioLoop = new WP_Query($devPortfolioArgs);

			if($devPortfolioLoop->have_posts()) while($devPortfolioLoop->have_posts()) :
			$devPortfolioLoop->the_post();
		?>
		  	<a href="">
		  		<?php $devProjectImage = get_field('dev_item_image'); ?>
		  		<div class="developer-post-container" style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0.4) 20%, transparent 80%), url(<?php echo $devProjectImage['url']; ?>)">
					<div class="overlay">
						<h2><?php the_field('dev_project_title'); ?></h2>
						<p><?php the_field('dev_project_description'); ?></p>
						<svg class="right-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
					</div>
		  		</div>
		  	</a>
		  	

		  <?php endwhile; ?>
		 <?php wp_reset_postdata();?> 
		
	</section>
	<div class="main">
		<div class="developer-container">
			<div class="developer">
				<svg class="left-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
				<h3 class="developer-title">Developer</h3>
				
			</div>
		</div>
		<svg class="Z" id="bigZ" data-name="bigZ" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 436.56 551.49"><defs><style>.cls-1{fill:#ffffff;}</style></defs><title>Z</title><path class="cls-1" d="M91.59,673.17V540.88l210-273.68h-210V121.68H522.37V253.14L311.53,527.65H528.16V673.17H91.59Z" transform="translate(-91.59 -121.68)"/></svg>
		<div class="designer-container">
			<div class="designer">
				<h3 class="designer-title">Designer</h3>
				<svg class="right-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
			</div>
		</div>
	</div>
	<section class="right">
		<?php 
			$desPortfolioArgs = array(
			'post_type' => 'designer_post_type',
			);
			$desPortfolioLoop = new WP_Query($desPortfolioArgs);

			if($desPortfolioLoop->have_posts()) while ($desPortfolioLoop->have_posts()) :
			$desPortfolioLoop->the_post();
		?>

			<a href="">
				<?php $desProjectImage = get_field('design_item_image'); ?>
				<div class="developer-post-container" style="background-image:linear-gradient(to top, rgba(0, 0, 0, 0.4) 20%, transparent 80%), url(<?php echo $desProjectImage['url']; ?>)">
					<div class="overlay">
						<h2><?php the_field('design_project_title'); ?></h2>
						<p><?php the_field('design_project_description'); ?></p>
						<svg class="right-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
					</div>
				</div>
			</a>

		 <?php endwhile; ?>
		 <?php wp_reset_postdata();?> 
	
	</section>
</header>

<section class="about">
	<div class="back-to-main">
		<svg class="up-arrow" id="arrow-up" data-name="arrow-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.38 511.6"><defs><style>.cls-1{fill:#fff;}</style></defs><title>arrow</title><rect class="cls-1" x="76.77" y="399.94" width="458.95" height="45.94" transform="translate(521.6 -24.12) rotate(90)"/><path class="cls-1" d="M237.27,268.18l69-69,69,69,27.7,0.06a2,2,0,0,0,2-2l-0.13-27.7L334.63,168.4a1.9,1.9,0,0,0-.16-0.24l-26.78-26.78a2,2,0,0,0-2.18-.43,2,2,0,0,0-.72.45L278,168.17s-0.06.1-.1,0.15L207.62,238.6l-0.06,27.7a2,2,0,0,0,2,2Z" transform="translate(-207.55 -140.79)"/></svg>
		<svg class="z-logo" id="smallZ" data-name="smallZ" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 436.56 551.49"><defs><style>.cls-1{fill:#ffffff;}</style></defs><title>Z</title><path class="cls-1" d="M91.59,673.17V540.88l210-273.68h-210V121.68H522.37V253.14L311.53,527.65H528.16V673.17H91.59Z" transform="translate(-91.59 -121.68)"/></svg>
		<p>designer | developer</p>
	</div>
	<div class="wrapper">
		<h1><?php the_field('about_headline') ?></h1>
		<div class="about-container">
			<?php 
				$aboutArgs = array(
				'post_type' => 'about_post_type',
				);
				$aboutLoop = new WP_Query($aboutArgs);

				if($aboutLoop->have_posts()) while ($aboutLoop->have_posts()) :
				$aboutLoop->the_post();
			?>

			<div class="about-post">
				<?php $aboutImage = get_field('about_graphic_image'); ?>
				<div class="img-wrapper">
					<img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">
				</div>
				<div class="description">
					<p><?php the_field('about_fact_1'); ?></p>
					<p><?php the_field('about_fact_2'); ?></p>
					<p><?php the_field('about_fact_3'); ?></p>
					<p><?php the_field('about_fact_4'); ?></p>
				</div>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata();?> 
		</div>
		<hr class="rule">
		<div class="social-container">
			<div class="contact-info">
				<h2><?php the_field('call_me_title') ?></h2>
				<h5><?php the_field('email') ?></h5>
				<hr>
				<a class="pnumber" href="tel:+1-305-401-8446">305.401.8446</a>
				<a href="mailto:rszagorski@gmail.com">rszagorski@gmail.com</a>
			</div>
			<div class="social-links-container">
				<?php while(have_rows('social')) : the_row();?>
					<a href="<?php the_sub_field('social_link'); ?>" target="_blank">
						<div class="social-link">
							<i class="fa fa-<?php the_sub_field('social_platform_name'); ?>"></i>
						</div>
					</a>
				<?php endwhile; ?>  
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>