<?php get_header(); ?>
	<section class="bannerBlog bannerPage">
		<div class="container">
			<div class="titlePage">
				<h2>Pisos Venâncio</h2>
			</div>
		</div>
	</section>	
	<div class="container">
		<div class="row paddingSidebar">
			<div class="col-sm-12 col-md-12 postLista">
				
				<?php while (have_posts()) {the_post();?> 
					
				<div class="row">
					<div class="col-sm-12">
						<a href="<?php the_permalink(); ?>"><h2 class="tituloBlog"><?php the_title(); ?></h2></a>
						<figure>
							<a href="<?php the_permalink(); ?>"><img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
						</figure>
						<div class="conte">
							<p><?php the_content();?></p>
						</div>		
						<div class="linksPost">
							<a onclick="goBack()">VOLTAR </a>
						</div>
					</div>
				</div>

			<?php } //endwhile;
			?> 
			</div>
		</div>
	</div>

	<script>
		// voltar
		function goBack() {window.history.back();}
	</script>



<?php get_footer(); ?>