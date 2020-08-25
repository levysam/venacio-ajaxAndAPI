<?php /* Template Name: Torres App Page */ ?>

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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/letras.js"></script>





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
