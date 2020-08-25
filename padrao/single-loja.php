<?php get_header() ?>

<section id="bannerLojas" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Lojas</h2>
		</div>
	</div>
</section>	
<div class="container">
	<div class="titleLoja">
		<h3><?php the_title();?></h3>
		<!-- Titulo Loja -->
		<p><?php
				 foreach (wp_get_object_terms(get_the_ID(),'categorias_lojas') as $category){
					 echo $category->name;
				 } ?> - <?php foreach (wp_get_object_terms(get_the_ID(),'pisos_loja') as $category){
					echo $category->name;
				} ?></p>
		<!-- Categoria - Piso Loja -->
	</div>		
	<div class="row">
		<div class="col-sm-12 col-lg-6 infosLoja">
			<div class="imgLoja">
				<img src="<?php the_field('field_5c6ed966788cb');?>" alt="loja">
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
					
				</div>
			<?php } ?>
				<!-- Numero Loja -->
				<?php
				$field = get_field('field_5c6ed74f788c6');
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
					<h5 class="piso"><?php foreach (wp_get_object_terms(get_the_ID(),'pisos_loja') as $category){
					 echo $category->name;
				 }?></h5>
					<!-- Piso Loja -->
				</div>
				<?php
				$field = get_field('field_5c6ed874788c9');
				 if ($field == '') {
				
				} else { ?>
				<div class="col-sm-12 col-md-6">
					<h5 class="numeroLoja">nº <?php the_field('field_5c6ed874788c9');?></h5>
					<!-- Numero Loja -->
				</div>
			<?php } ?>
				
			</div>
			<div class="row horaCat">
				<div class="col-sm-12 col-md-6 ">
					<h5 class="horario">seg a sex: 9h às 20h <br>
					Sábado: 10h às 18h</h5>
					<!-- Horario Loja <?php the_field('field_5c6ed7a5788c7');?>-->
				</div>
				<div class="col-sm-12 col-md-6">
					<h5 class="categoria"><?php foreach (wp_get_object_terms(get_the_ID(),'categorias_lojas') as $category){
					 echo $category->name;
				 }?></h5>
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
			<a href="/loja">Ver todos</a>
		</div>
	</div>
</div>

<?php include_once('page-newsletter.php');?>











<?php get_footer() ?>