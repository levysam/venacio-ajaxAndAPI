<?php /* Template Name: Torres */ ?>

<?php get_header(); ?>
<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" async></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/letras.js"></script>
<section id="bannerTorres" class="bannerPage">
	<div class="container">
		<div class="titlePage">
			<h2>Torres Empresariais</h2>
		</div>
	</div>
</section>	
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-4 catLojas torres">
			<h3>PISOS:</h3>
			<?php $piso = get_terms( array( 
				'taxonomy' => 'pisos_torres'
			) );
			foreach($piso as $category) {
				echo '<a href="'.get_term_link($category).'"><li class="pisos">';
				echo $category->name;
				echo "</li></a>";
			}?>


			<!-- <h3>CATEGORIAS:</h3>
			<?php $terms = get_terms( array( 
				'taxonomy' => 'pisos_torres'
			) );
			foreach($terms as $category) {
				echo '<a href="'.get_term_link($category).'"><li class="categorias">';
				echo $category->name;
				echo "</li></a>";
			}?> -->
		</div>
		<div class="col-sm-12 col-md-8">
			<div class="alfab" id="busca">
				<a href="#busca" id="A">A</a>
				<a href="#busca" id="B">B</a>
				<a href="#busca" id="C">C</a>
				<a href="#busca" id="D">D</a>
				<a href="#busca" id="E">E</a>
				<a href="#busca" id="F">F</a>
				<a href="#busca" id="G">G</a>
				<a href="#busca" id="H">H</a>
				<a href="#busca" id="I">I</a>
				<a href="#busca" id="J">J</a>
				<a href="#busca" id="K">K</a>
				<a href="#busca" id="L">L</a>
				<a href="#busca" id="M">M</a>
				<a href="#busca" id="N">N</a>
				<a href="#busca" id="O">O</a>
				<a href="#busca" id="P">P</a>
				<a href="#busca" id="Q">Q</a>
				<a href="#busca" id="R">R</a>
				<a href="#busca" id="S">S</a>
				<a href="#busca" id="T">T</a>
				<a href="#busca" id="U">U</a>
				<a href="#busca" id="V">V</a>
				<a href="#busca" id="W">W</a>
				<a href="#busca" id="X">X</a>
				<a href="#busca" id="Y">Y</a>
				<a href="#busca" id="Z">Z</a>
			</div>
			<div class="loopLojas">
				<div class="row" id="loopLojas">
				<?php 
				$args = array(
					'posts_per_page' => 99,
					'post_type' => 'torre',
					'orderby' => 'title', 'order' => 'ASC'
				);
				$query = new WP_Query( $args );
				$count1 = 1;
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); 
						 ?>
						
				<div class="col-sm-6 col-md-4 col-lg-3 itemloopLojas" id="div<?php echo $count1;?>">
				<a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="">               
				<h5 class="loja_name"><?php the_title(); ?></h5>                
				<p></<!-- <?php the_field('field_5ca4b2d00d32e');?> -->Serviços - <?php the_field('field_5ca5069abae04');?></p></a>                
				</div>
					<script><?php 
					 global $post;  ?>
					var array1 = "<?php echo mb_substr($post->post_title, 0, 1, "UTF-8"); ?>";
						if (array1 == "a"|| array1 == "A") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas A"
						}
						if (array1 == "b"|| array1 == "B") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas B"
						}
						if (array1 == "c"|| array1 == "C") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas C"
						}
						if (array1 == "d"|| array1 == "D") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas D"
						}
						if (array1 == "e"|| array1 == "E") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas E"
						}
						if (array1 == "f"|| array1 == "F") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas F"
						}
						if (array1 == "g"|| array1 == "G") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas G"
						}
						if (array1 == "h"|| array1 == "H") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas H"
						}
						if (array1 == "i"|| array1 == "I") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas I"
						}
						if (array1 == "j"|| array1 == "J") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas J"
						}
						if (array1 == "k"|| array1 == "K") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas K"
						}
						if (array1 == "l"|| array1 == "L") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas L"
						}
						if (array1 == "m"|| array1 == "M") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas M"
						}
						if (array1 == "n"|| array1 == "N") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas N"
						}
						if (array1 == "o"|| array1 == "O") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas O"
						}
						if (array1 == "p"|| array1 == "P") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas P"
						}
						if (array1 == "q"|| array1 == "Q") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas Q"
						}
						if (array1 == "r"|| array1 == "R") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas R"
						}
						if (array1 == "s"|| array1 == "S") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas S"
						}
						if (array1 == "t"|| array1 == "T") {
							var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas T"
						}
						if (array1 == "u"|| array1 == "U") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas U"
						}
						if (array1 == "v"|| array1 == "V") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas V"
						}
						if (array1 == "w"|| array1 == "W") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas W"
						}
						if (array1 == "x"|| array1 == "X") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas X"
						}
						if (array1 == "y"|| array1 == "Y") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas Y"
						}
						if (array1 == "z"|| array1 == "V") {
						var	div = document.getElementById("div<?php echo $count1 ?>");
							div.className = "col-sm-6 col-md-4 col-lg-3 itemloopLojas Z"
						}


			</script>
			<?php $count1++;
				}
				}
				?>
				<div class="botaoVerMaisLoop">
					<button id="ver" onclick="vermais()">Ver Menos</button>
				</div>
				</div>
			</div>
			<form class="pesquisa-home"></form>
		</div>				 

	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/letras.js"></script>
<script>
var item = document.getElementsByClassName("itemloopLojas");
var button = document.getElementById("ver");
$.each(item, function(i, val) {if (i > 15) {val.style.display = 'none'}});
button.innerHTML = 'Ver Mais';
function vermais() {
if (button.innerHTML == 'Ver Mais') {
$.each(item, function(i, val) {if (i > 15) {val.style.display = 'inline'}});
button.innerHTML = 'Ver Menos';
}else{
$.each(item, function(i, val) {if (i > 15) {val.style.display = 'none'}});
button.innerHTML = 'Ver Mais';
}
}
</script>
<?php get_footer(); ?>