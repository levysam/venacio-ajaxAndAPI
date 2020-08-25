<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			
		
			<section class="error-404 not-found">
				<div class="conteudoErro404">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Opa! Essa página não pode ser encontrada.', 'twentyfifteen' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?', 'twentyfifteen' ); ?></p>
						<form>
		    				<input class="IDForm formHome" placeholder="O que você procura?">
						</form>
						<!--	<?php get_search_form(); ?> -->
					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->
		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
