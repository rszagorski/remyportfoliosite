<?php get_header(); ?>

<div class="portfolio-page">
	<nav>
		<a href="<?php echo home_url('/');?>">Z</a>
	</nav>
	<?php $bgImage = get_field('big_background_project_image') ?>
	<header class="port-header" style="background-image:url(<?php echo $bgImage['url']; ?>)">
		<h1><?php the_field('big_project_headline') ?></h1>
	</header>

	<div class="content">
		<div class="wrapper2">
			<div class="top-section">
				<div class="description-summary one">
					<h2 class="summary"><?php the_field('header_1'); ?></h2>
					<p><?php the_field('project_description_1'); ?></p>
				</div>
				<div class="client-info">
					<h3 class="h3-title">Client:</h3>
					<p><?php the_field('client'); ?></p>
				</div>
			</div>
			<div class="img-wrapper">
				<?php $midImage = get_field('middle_project_image') ?>
				<img src="<?php echo $midImage['url']; ?>" alt="<?php echo $midImage['alt']; ?>">
			</div>
			<?php $midImagebg = get_field('middle_project_image') ?>
			<div class="middle-image" style="background-image:url(<?php echo $midImagebg['url']; ?>)"></div>

			<div class="description-designpage">
				<h2><?php the_field('header_2'); ?></h2>
				<p><?php the_field('project_description_2'); ?></p>
			</div>
			<div class="img-wrapper">
				<?php $midImage2 = get_field('middle_project_image_2') ?>
				<img src="<?php echo $midImage2['url']; ?>" alt="<?php echo $midImage['alt']; ?>">
			</div>
			<div class="img-duo">
				<div class="img-wrapper">
					<?php $smImage1 = get_field('small_project_image_1') ?>
					<img src="<?php echo $smImage1['url']; ?>" alt="<?php echo $smImage1['alt']; ?>">
				</div>
				<div class="img-wrapper">
					<?php $smImage2 = get_field('small_project_image_2') ?>
					<img src="<?php echo $smImage2['url']; ?>" alt="<?php echo $smImage2['alt']; ?>">
				</div>
			</div>
			<div class="description-designpage">
				<h2><?php the_field('header_3'); ?></h2>
				<p><?php the_field('project_description_3'); ?></p>
			</div>
		</div>
		<div class="img-wrapper full-bleed">
			<?php $bottomImage = get_field('bottom_project_image') ?>
			<img src="<?php echo $bottomImage['url']; ?>" alt="<?php echo $bottomImage['alt']; ?>">
		</div>
		<div class="wrapper2 img-wrapper">
			<?php $bottomImage2 = get_field('bottom_2_project_image') ?>
			<img src="<?php echo $bottomImage2['url']; ?>" alt="<?php echo $bottomImage2['alt']; ?>">
		</div>
		<div class="more-projects">
			<div class="wrapper2">
				<h3>more work</h3>
				<div class="more-container">
					<?php 
						$postID = get_the_ID(); //variable to get the post ID of the current designer portfolio piece post
						$postIDArray = array($postID); //turn the postID into an array so you can later exclude it from your wp query
						$desPortfolioArray = array(
							'post_type'=>'designer_post_type',
							'post__not_in' => $postIDArray, //Tells the search to skip the current post ID
							'showposts' => 3 ); //An array of search criteria NOT the Search for posts
						$desPortfolioLoop = new WP_query($desPortfolioArray); //Searching your database for posts
						if($desPortfolioLoop->have_posts()) :
						    while($desPortfolioLoop->have_posts()) : $desPortfolioLoop->the_post();
					?>
					<?php $linkToPage = get_permalink(); ?>
					<!-- permalink thing -->
					<a href="<?php echo $linkToPage; ?>">
						<div class="img-wrapper">
							<?php $post1Image = get_field('design_item_image'); ?>
							<img src="<?php echo $post1Image['url']; ?>" alt="<?php echo $post1Image['alt']; ?>">
						</div>
						<div class="posts-text">
							<h2><?php the_field('design_project_title'); ?></h2>
							<div class="arrow-text-container">
								<p><?php the_field('design_project_description'); ?></p>
								<svg class="right-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
							</div>
						</div>
					</a>
					<?php endwhile; endif //Ends the loop through portfolio pieces?> 
				</div>
			</div>
		</div>

    </div> <!-- /.content -->

    <?php  get_template_part('innerfooter'); ?>

 
</div> <!-- /port.page-->

<?php get_footer(); ?>