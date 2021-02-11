
<footer>
	<div class="footer-logo">
		<a href="<?php echo home_url('/');?>" class="inner-footer-a">
			<svg class="z-logo" id="smallZ" data-name="smallZ" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 436.56 551.49"><defs><style>.cls-1{fill:#ffffff;}</style></defs><title>Z</title><path class="cls-1" d="M91.59,673.17V540.88l210-273.68h-210V121.68H522.37V253.14L311.53,527.65H528.16V673.17H91.59Z" transform="translate(-91.59 -121.68)"/></svg>
			<p>designer | developer</p>
		</a>
	</div>
	<div class="designpage-socialcontainer">
		<p class="copyright">&copy; 2016 Designed & developed by Remy Z.</p>
		<div class="social-links-container">
			<?php while(have_rows('social', 'option')) : the_row();?>
				<a href="<?php the_sub_field('social_link', 96); ?>" target="_blank">
					<div class="social-link">
						<i class="fa fa-<?php the_sub_field('social_platform_name', 96); ?>"></i>
					</div>
				</a>
			<?php endwhile; ?>  
		</div>
	</div>
</footer>
