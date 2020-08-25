<?php get_header(); ?>
<section id="bannerEventos" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Eventos Venâncio</h2>
		</div>
	</div>
</section>	
<div class="container">
	<div class="row paddingGaleria singleGaleria postLista">
		<?php 
		while (have_posts()) {
			the_post();?>
			<div class="col-sm-12">  
				<a href="<?php the_permalink(); ?>"><h2 class="tituloGaleria"><?php the_title(); ?></h2></a>
				<p>Autor: <?php the_field('field_5cb8c23bf6735');?></p>
				
										<!-- <figure>
											<a href="<?php the_permalink(); ?>"><img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
										</figure> -->
										<div class="conte">
											<p><?php the_content();?></p>
										</div>
										
									</div>
									<div class="linkGaleria">
										<div class="botaoVoltarGaleria">
											<a href="/eventos">Voltar para Galeria de Fotos</a>
										</div>
									</div>
									
								<?php } //endwhile;
								?> 
							</div>
							
						</div>
					</div>


					


					<?php get_footer(); ?>