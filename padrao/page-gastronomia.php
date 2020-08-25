<?php /* Template Name: Gastronomia */ ?>

<?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/letras.js"></script>
<?php include_once('page-pesquisa.php');?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-4 catLojas">
			<h3>PISOS:</h3>
			<?php $piso = get_terms( array( 
				'taxonomy' => 'pisos_gastronomia'
			) );
			foreach($piso as $category) {
				echo '<a href="'.get_term_link($category).'"><li class="pisos">';
				echo $category->name;
				echo "</li></a>";
			}?>
			<h3>CATEGORIAS:</h3>
			<?php $terms = get_terms( array( 
				'taxonomy' => 'alimentacao'
			) );
			foreach($terms as $category) {
				echo '<a href="'.get_term_link($category).'"><li class="categorias">';
				echo $category->name;
				echo "</li></a>";
			}?>
		</div>
		<div class="col-sm-12 col-md-8">
			<div class="alfab">
				<a href="#" id="A">A</a>
				<a href="#" id="B">B</a>
				<a href="#" id="C">C</a>
				<a href="#" id="D">D</a>
				<a href="#" id="E">E</a>
				<a href="#" id="F">F</a>
				<a href="#" id="G">G</a>
				<a href="#" id="H">H</a>
				<a href="#" id="I">I</a>
				<a href="#" id="J">J</a>
				<a href="#" id="K">K</a>
				<a href="#" id="L">L</a>
				<a href="#" id="M">M</a>
				<a href="#" id="N">N</a>
				<a href="#" id="O">O</a>
				<a href="#" id="P">P</a>
				<a href="#" id="Q">Q</a>
				<a href="#" id="R">R</a>
				<a href="#" id="S">S</a>
				<a href="#" id="T">T</a>
				<a href="#" id="U">U</a>
				<a href="#" id="V">V</a>
				<a href="#" id="W">W</a>
				<a href="#" id="X">X</a>
				<a href="#" id="Y">Y</a>
				<a href="#" id="Z">Z</a>
			</div>
			<div class="loopLojas">
				<div class="row" id="loopLojas">
				<?php 
				$args = array(
					'post_type' => 'gastronomia',
					'orderby' => 'title', 'order' => 'ASC'
				);
				$query = new WP_Query( $args );
				$count1 = 1;
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); 
						 ?>
						
				<div class="col-sm-6 col-md-4 col-lg-3 itemloopLojas" id="div<?php echo $count1;?>">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="gastronomia">
				<a href="<?php the_permalink(); ?>">                
				<h5 class="loja_name"><?php the_title(); ?></h5>                
				<p><?php the_field('field_5ca4b2d00d32e');?> - <?php
				 foreach (wp_get_object_terms(get_the_ID(),'pisos_gastronomia') as $category){
					echo $category->name;
				} ?></p></a>                
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
				</div>
			</div>
		</div>				 

	</div>
</div>

<?php include_once('page-newsletter.php');?>

<script src="<?php echo get_template_directory_uri(); ?>/js/letras.js"></script>

<?php get_footer(); ?>

