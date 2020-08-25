<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">

    <!-- OwlCarousel -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/OwlCarousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/OwlCarousel/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="<?php get_template_directory_uri() ?>/wp-content/themes/padrao/js/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/easy-autocomplete.js"></script>
</head>

<section id="bannerTorres" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Torres Empresariais</h2>
		</div>
	</div>
</section>	
<div class="container">
	<div class="titleLoja">
		<h3><?php the_title();?></h3>
		<!-- Titulo Loja -->
		<p><?php
				 foreach (wp_get_object_terms(get_the_ID(),'categorias_torres') as $category){
					 echo $category->name;
				 } ?> - <?php foreach (wp_get_object_terms(get_the_ID(),'pisos_torres') as $category){
					echo $category->name;
				} ?></p>
		<!-- Categoria - Piso Loja -->
	</div>		
	<div class="row">
		<div class="col-sm-12 col-lg-6 infosLoja">
			<div class="imgLoja">
				<img src="<?php the_field('field_5c6ed966788cb');?>" alt="">
			</div>
			<div class="descLoja">
				<p><?php the_content();?></p>
				<!-- Descrição Loja -->
			</div>
			
			<div class="row">
				<?php
				$field = get_field('field_5c6ed74f788c6');
				 if ($field == '') {
				
				} else { ?>
				<div class="col-sm-12 col-md-6">
					<h5 class="numero"><?php the_field('field_5c6ed74f788c6');?></h5>
					<!-- Numero Loja -->
				</div>
			<?php } ?>
				<?php
				$field = get_field('field_5c6ed825788c8');
				 if ($field == '') {
				
				} else { ?>
				<div class="col-sm-12 col-md-6">
					<h5 class="site"><?php the_field('field_5c6ed825788c8');?></h5>
					<!-- Site Loja -->
				</div>
			<?php } ?>
				
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h5 class="piso"><?php the_field('field_5ca5069abae04');?></h5>
					<!-- Piso Loja -->
				</div>
				<div class="col-sm-12 col-md-6">
					<h5 class="numeroLoja">nº <?php the_field('field_5c6ed874788c9');?></h5>
					<!-- Numero Loja -->
				</div>
			</div>
			<div class="row horaCat">
				<div class="col-sm-12 col-md-6 ">
					<h5 class="horario">seg a sex: 9h às 20h <br>
					Sábado: 10h às 18h</h5>
					<!-- Horario Loja <?php the_field('field_5c6ed7a5788c7');?>-->
				</div>
				<div class="col-sm-12 col-md-6">
					<h5 class="categoria"><?php the_field('field_5ca4b2d00d32e');?></h5>
					<!-- Categoria Loja -->
				</div>
			</div>


		</div>
		<div class="col-sm-12 col-lg-6">
			<!--
			<div class="mapaLoja">
				<?php $numeroLoja = get_field('field_5c6ed874788c9');
    ?><img src="<?php echo get_template_directory_uri(); ?>/img/mapaLoja/Loja<?php echo $numeroLoja ?>.png">
			</div>
			-->
			<form class="pesquisa-home"></form>
		</div>
		<div class="botaoVoltarTodos">
			<a href="/torres">Ver todos</a>
		</div>
	</div>
</div>
