<?php /* Template Name: Contato */ ?>

<?php get_header(); ?>
<section id="bannerContato" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Contato</h2>
		</div>
	</div>
</section>	
<section class="conteudoContato pageContato">
	<div class="container">
		<div class="part1 sectionContato" id="fale-conosco">
			<h4>Fale Conosco</h4>
			<?php echo do_shortcode('[contact-form-7 id="2259" title="Fale Conosco"]'); ?>
		</div>
	</div>
</section>
<section class="mapa" id="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7678.311365024389!2d-47.89286405870468!3d-15.795742994678214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x664043907f15a04d!2sVen%C3%A2ncio+Shopping!5e0!3m2!1spt-BR!2sbr!4v1555115772359!5m2!1spt-BR!2sbr" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php get_footer(); ?>