<?php /* Template Name: Eventos */ ?>

<?php get_header(); ?>
<section id="bannerEventos" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Eventos e Promoções</h2>
		</div>
	</div>
</section>
<section class="conteudoPage">
	<div class="container">
		<div class="calendarioEventos">
			<h4>Eventos e Promoções</h4>
			<p><span>Clique para acessar mais informações</span></p>
			<?php echo do_shortcode('[MEC id="1668"]');?>
		</div>
		<!--<div class="galeriaEventos">
			<div class="row">
				<div class="col-sm-12">
					<h4>Galeria de fotos</h4>
					<p><span>Confira as fotos dos eventos que aconteceram no shopping Venâncio! Salve as fotos, compartilhe com os amigos e reviva esses momentos marcantes.</span></p>
				</div>
			</div>

			<?php
			$new_query = new WP_Query( array(
				'posts_per_page' => 100,
				'post_type' => 'galeria'
			) );

			while ( $new_query->have_posts() ) : $new_query->the_post(); ?>-->

				<!--<div class="row">
					<div class="col-12 col-md-4 postLista">

						<figure>
							<a href="<?php the_permalink(); ?>"><img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
						</figure>
						<a href="<?php the_permalink(); ?>"><h2 class="tituloBlog"><?php the_title(); ?></h2></a>

					</div>
				</div>-->

			<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>
<?php get_footer(); ?>
