<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif; ?>
				
				<!-- home-columns -->
				<div class="home-columns clearfix">
					
					<!-- one-third -->
					<div class="one-third">
						
						<h2>Latest Opinion</h2>
						
						<?php // opinion posts loop begins here
						$opinionPosts = new WP_Query('cat=13&posts_per_page=1');

						if ($opinionPosts->have_posts()) :

							while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata(); ?>
						
						<span class="horiz-center"><a href="<?php echo get_category_link(13); ?>" class="btn-a">View all Opinion Posts</a></span>
						
					</div><!-- /one-third -->
					
					<!-- one-third -->
					<div class="one-third">
						
						<h2>Dev Stuff</h2>
						
						<?php // dev posts loop begins here
						$devPosts = new WP_Query('cat=14&posts_per_page=2');

						if ($devPosts->have_posts()) :

							while ($devPosts->have_posts()) : $devPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>
						
						<span class="horiz-center"><a href="<?php echo get_category_link(14); ?>" class="btn-a">View all Dev Posts</a></span>
						
					</div><!-- /one-third -->

					<!-- one-third -->
					<div class="one-third last">
						
						<h2>Latest Design</h2>
						
						<?php // design posts loop begins here
						$designPosts = new WP_Query('cat=15&posts_per_page=2');

						if ($designPosts->have_posts()) :

							while ($designPosts->have_posts()) : $designPosts->the_post(); ?>
								<!-- post-item -->
								<div class="post-item clearfix">

									<!-- post-thumbnail -->
									<div class="square-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php
										if (has_post_thumbnail()) {
											the_post_thumbnail('square-thumbnail');
										} else { ?>

											<img src="<?php echo get_template_directory_uri(); ?>/images/leaf.jpg">

										<?php } ?></a>
									</div><!-- /post-thumbnail -->

									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

									<?php the_excerpt(); ?>

									</div><!-- /post-item -->
							<?php endwhile;

							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>
						
						<span class="horiz-center"><a href="<?php echo get_category_link(15); ?>" class="btn-a">View all Design Posts</a></span>
						
					</div><!-- /one-third -->
					
				</div><!-- /home-columns -->
			
	</div><!-- /site-content -->
	
	<?php get_footer();

?>