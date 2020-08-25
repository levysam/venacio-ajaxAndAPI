<?php /* Template Name: Circulares */ ?>

<?php get_header(); ?>

<div class="container circulares">
	<div class="row">
		<div class="col-12 col-lg-6">

			<?php 
			if ( is_user_logged_in() ) { ?>
			   
				<h2>Escolha uma circular:</h2>
				<h2>Histórico</h2>

				<?php
				$loop2 = new WP_Query( array(
					'posts_per_page' => -1,
					'post_type' => 'circulares'
				) );


				while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
					<a href="<?php the_permalink(); ?>"><h3 class="circulares-titulo"><?php the_title(); ?></h3></a>
				<?php endwhile; wp_reset_query(); ?>

			<?php } else {
			   echo '<p>Bem-vindo(a) ao Venâncio Shopping!</p> 
			   	<p>O Venâncio Shopping dá as boas-vindas para você. É uma honra ter a sua loja no nosso shopping. Esperamos que a nossa conexão seja cada vez melhor e aproveitamos para informar que estamos permanentemente atentos quanto ao controle de qualidade de nossos serviços, para que sua satisfação seja plena e nosso laço de parceria cada vez mais forte.</p>
			   	<p>Aqui é o nosso espaço de conexão entre você e o Shopping. Para acessar coloque o seu usuário e senha, e tenha acesso aos seus informativos.  Você pode realizar o seu Informativo de venda no portal do lojista. Todas as nossas circulares estarão exclusivamente publicadas aqui.</p>
			   	<p>Atenciosamente, Superintendência do Venâncio Shopping. </p>';
			} 
			?>

			<!-- <?php
			$loop = new WP_Query( array(
				'posts_per_page' => 1,
				'post_type' => 'circulares'
			) );

			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<a href="<?php the_permalink(); ?>"><h2 class="circulares-titulo"><?php the_title(); ?></h2></a>
				<a href="<?php the_permalink(); ?>"><img class="img-responsive" src= "<?php the_post_thumbnail_url(); ?>"></a>
				<p><?php the_content(); ?></p>
				
			<?php endwhile; wp_reset_query(); ?> -->
		</div>
		<div class="col-12 col-lg-6">

			<?php if ( is_user_logged_in() ) { ?>
			   
				<!--<h2>Histórico</h2>

				<?php
				$loop2 = new WP_Query( array(
					'posts_per_page' => -1,
					'post_type' => 'circulares'
				) );


				while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
					<a href="<?php the_permalink(); ?>"><h3 class="circulares-titulo"><?php the_title(); ?></h3></a>
				<?php endwhile; wp_reset_query(); ?>-->

			<?php }
				else {
			   		echo do_shortcode('[ultimatemember form_id="1902"]');
				};

			?>

		</div>
		<!--<div class="col-12 col-lg-3">
			<div class="botaoAreaLogista">
				<a href="http://www.comunidade21.com.br/venancio2000">Acessar Área do Logista</a>
			</div>
		</div>-->
	</div>
</div>

<script>
	var todosprotegidos = document.querySelectorAll('.circulares-titulo')
	function tirarProtegido(item) {
		var str = $('circulares-titulo').text();
		var res = str.replace(/Protegido: /g, "");
		console.log(res)
	}
	todosprotegidos.forEach(tirarProtegido);
	console.log(todosprotegidos);
</script>

<?php get_footer(); ?>