<?php get_header(); ?>
	<!-- <section class="bannerBlog bannerPage">
		<div class="container">
			<div class="titlePage">
				<h2>Circulares</h2>
			</div>
		</div>
	</section>	 -->
	<div class="container circulares">
		<div class="row">
			<div class="col-sm-12 col-md-9">
				
				<?php while (have_posts()) {the_post();?> 
					
				<div class="row">
					<div class="col-sm-12">
						<h2 class="tituloBlog"><?php the_title(); ?></h2></a>
						<img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
						<div class="conte">
							<p><?php the_content();?></p>
						</div>
					</div>
				</div>

			<?php } //endwhile;
			?> 
			</div>

			<!-- <div class="col-sm-12 col-md-4 sidebarBlog">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div> -->

			<div class="col-12 col-lg-3">
				<h2>Histórico</h2>

				<?php
				$loop = new WP_Query( array(
					'posts_per_page' => -1,
					'post_type' => 'circulares'
				) );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a href="<?php the_permalink(); ?>"><h3 class="circulares-titulo"><?php the_title(); ?></h3></a>
				
				<?php endwhile; wp_reset_query(); ?>
			</div>

			<!--<div class="col-12 col-lg-3">
				<div class="botaoAreaLogista">
					<a href="http://www.comunidades21.com.br/home/gi_iniciar.asp/">Acessar Área do Logista</a>
				</div>
			</div>-->

		</div>
	</div>



<?php get_footer(); ?>