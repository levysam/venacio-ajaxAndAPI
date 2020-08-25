<?php get_header(); ?>
	<section class="bannerBlog bannerPage">
		<div class="container">
			<div class="titlePage">
				<h2>Blog Venâncio</h2>
			</div>
		</div>
	</section>	
	<div class="container">
		<div class="row paddingSidebar">
			<div class="col-sm-12 col-md-7">
				<div class="row">
						<?php
						$new_query = new WP_Query( array(
							'posts_per_page' => 80,
						) );
						while ( have_posts() ) : the_post(); ?>
							<div class="col-12 postLista">
								<div class="row ">
									<div class="">  
										<a href="<?php the_permalink(); ?>"><h2 class="tituloBlog"><?php the_title(); ?></h2></a>
										<a href="<?php the_permalink(); ?>" class="dataAutor"><p> <?php the_date (); ?>  por <span><?php the_author (); ?></span></p> </a>
										<figure>
											<a href="<?php the_permalink(); ?>"><img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
										</figure>
										
									</div>
								</div>
							</div>
							
						<?php endwhile; wp_reset_query(); ?>

					</div>
			</div>
			<div class="col-sm-12 col-md-4 sidebarBlog">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>