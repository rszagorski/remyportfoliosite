  	<a href="">
  		<figure class="developer-post-container">
  			<?php $devprojectImage = get_field('dev_item_image'); ?>
  			<img src="<?php echo $devprojectImage['url'] ?>" alt="<?php echo $devprojectImage['alt'] ?>">
			<figcaption>
				<h2><?php the_field('dev_project_title'); ?></h2>
				<p><?php the_field('dev_project_description'); ?></p>
				<svg class="right-arrow" id="arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 197.38"><defs><style>.cls-2{fill:#ffffff;}</style></defs><title>arrow</title><rect class="cls-2" x="52.65" y="75.72" width="458.95" height="45.94"/><path class="cls-2" d="M177.84,465.56l-69-69,69-69L178,299.9a2,2,0,0,0-2-2l-27.7.13L78.06,368.21a1.9,1.9,0,0,0-.24.16L51,395.15a2,2,0,0,0-.43,2.18,2,2,0,0,0,.45.72l26.78,26.78s0.1,0.06.15,0.1l70.28,70.28,27.7,0.06a2,2,0,0,0,2-2Z" transform="translate(-50.45 -297.89)"/></svg>
			</figcaption>
  		</figure>
  	</a>