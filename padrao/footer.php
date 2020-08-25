<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
 <!--Footer-->
    <footer class="bgFooter">
        <div class="container">
            <div class="row listOne">
                <div class="row enderecoFooter">
                    <div class="col-12 col-md-6 col-lg-3">
                        <span>Contato</span>
                        <p>SCS Quadra 8, Asa Sul CEP 70.333-900</p>
                        <p>(61) 3208-2000</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <span>Lojas</span>
                        <p>Segunda a sexta, das 9h às 20h</p>
                        <p>Sábados, das 10h às 18h.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <span>Praça de Alimentação</span>
                        <p>Segunda a sexta, das 9h às 20h</p>
                        <p>Sábados, das 10h às 18h.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <span>Varanda Gourmet</span>
                        <p>Segunda a sexta, das 12h às 23h</p>
                        <p>Sábados, das 12h às 20h</p>
                        <p>Domingos, das 12h às 20h.</p>
                    </div>
                </div>
            </div>
            <div class="row listTwo">

                <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="/">Home</a></li>
                    <span><li><a href="#">O Venâncio</a></li></span>
                    <li><a href="/o-venancio//">História</a></li>
                    <li><a href="/salas-comerciais/">Comercial</a></li>
                    <li><a href="/comodidades/">Comodidades</a></li>
                </div>

                 <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="/lojas/">Lojas</a></li>
                    <span><li><a href="/eventos/">Gastronomia</a></li></span>
                    <li><a href="/categorias_lojas/cafes-e-lanchonetes/">Cafés e Lanchonetes</a></li>
                    <li><a href="/categorias_lojas/pracas-de-alimentacao/">Praças de alimentação</a></li>
                    <li><a href="/categorias_lojas/restaurantes-gourmet/">Restaurantes Gourmet</a></li>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="/servicos/">Serviços</a></li>
                 	<span><li><a href="/torres/">Torres</a></li></span>
                    <span><li><a href="/vmais/">VMais</a></li></span>
					<span><li><a href="/natal-na-garupa/">Regulamento natal</a></li></span>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="#">Conecte-se</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li><a href="/eventos/">Eventos/Promoções</a></li>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="/contato/">Contato</a></li>
                    <li><a href="/contato/#fale-conosco">Fale Conosco</a></li>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2 linksFooter">
                    <li><a href="/contato/">Lojista</a></li>
                    <li><a href="/circulares-venancio/">Circulares</a></li>
                    <li><a href="http://www.comunidades21.com.br/home/gi_iniciar.asp?ExibirSite=&aba=0">Fale Conosco</a></li>
                </div>

            </div>

            <div class="row listThree">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row justify-content-start">
                        <div class="col-sm-12 col-md-6 col-lg-6 divFormFooter">
                            <!-- <?php get_search_form(); ?>  -->
                            <input class="formFooter IDForm" placeholder="Faça sua Busca">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 socialIcons">
                            <div class="row">
                                 <a href="https://www.facebook.com/venancio.shopping/"><img src="<?php echo get_template_directory_uri(); ?>/img/fbicon.png" alt="Facebook"></a>
                                 <a href="https://www.instagram.com/venancioshopping/"><img src="<?php echo get_template_directory_uri(); ?>/img/instaicon.png" alt="Instagram"></a>
                                 <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtubeicon.png" alt="Youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ml-lg-3">
                    <a href="http://www.venancioshopping.com.br/wp-content/uploads/2019/10/06-CODIGO-DE-ETICA-E-DE-CONDUTA-AR_final.docx"><p class="eticaEconduta">Veja nosso código de ética e de conduta</p></a>
                </div>

            </div>

            <div class="row">
                <div class="logoFooter col-sm-12 col-md-7">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logofooter.png" alt="logo">
                </div>
                <div class="logoAR col-sm-12 col-md-5">
                    <p>Administrado por &nbsp<a href="http://arvenancio-com-br.umbler.net/ "><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-AR_PNG-branco.png" alt="logo"></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/.Footer-->
<div class="rodape">
    <p><span>Venâncio Shopping</span> © <?php echo date('Y'); ?> | Desenvolvido por <a href="https://7pontos.com.br">7pontos.com.br</a></p>
</div>
</div><!-- .site -->

    <!-- JQuery -->
     <!-- Custom scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/scriptSearch1.js"></script>
    <!-- Custom scripts -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mdb.min.js"></script>
    <!-- Functions -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

   <?php if( is_page('home')){ ?> <script>
        jQuery('.idade input').mask('000', {reverse: true});
        jQuery('.celular input').mask('00 000000000', {reverse: true});

        // scroll suave para o alfabeto
        $('.alfab a').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                    targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset - 50
            }, 500);
        });

        // $('[data-group="pisos"]').each(function() {

        //     var $allTarget = $('[data-piso]'),
        //     $allClick = $('[data-click]'),
        //     activeClass = 'show';

        //     $allClick.click(function() {
        //         $('.nav-link').removeClass('show');
        //         $('.tab-pane').removeClass('show');

        //         var id = $(this).data('click'),
        //         $target = $('[data-piso="' + id + '"]');

        //         $target.addClass(activeClass);
        //         $(this).addClass(activeClass);
        //     });
        // });


            var countterreo = 0,
                count1 = 0,
                count2 = 0,
                count3 = 0,
                count4 = 0,
                pisoP2 = $('[data-piso="pisoP2"]').data('piso'),
                pisoterreo = $('[data-piso="pisoterreo"]').data('piso'),
                piso1 = $('[data-piso="piso1"]').data('piso'),
                piso2 = $('[data-piso="piso2"]').data('piso'),
                piso3 = $('[data-piso="piso3"]').data('piso'),
                piso4 = $('[data-piso="piso4"]').data('piso');
                piso5 = $('[data-piso="piso5"]').data('piso');

            $('[data-click="pisoP2"]').click(function() {
                countterreo += 1
                var temClasse = $(this).hasClass('show');
                if (countterreo == 1) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="pisoP2"]').addClass('show');
                    $('[data-piso="pisoP2"]').addClass('show');
                }

                if (countterreo == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    countterreo = 0;
                }
                if (countterreo = 2) {
                    countterreo = 0;
                }
                // console.log(countterreo);
            });
            $('[data-click="pisoterreo"]').click(function() {
                countterreo += 1
                var temClasse = $(this).hasClass('show');
                if (countterreo == 1) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="pisoterreo"]').addClass('show');
                    $('[data-piso="pisoterreo"]').addClass('show');
                }

                if (countterreo == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    countterreo = 0;
                }
                if (countterreo = 2) {
                    countterreo = 0;
                }
                // console.log(countterreo);
            });
            $('[data-click="piso1"]').click(function() {
                count1 += 1
                var temClasse = $(this).hasClass('show');
                if (count1 == 1) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="piso1"]').addClass('show');
                    $('[data-piso="piso1"]').addClass('show');
                }
                if (count1 == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    count1 = 0;
                }
                if (count1 = 2) {
                    count1 = 0;
                }
                // console.log(count1);
            });
            $('[data-click="piso2"]').click(function() {
                count2 += 1
                var temClasse = $(this).hasClass('show');
                if (count2 == 1) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="piso2"]').addClass('show');
                    $('[data-piso="piso2"]').addClass('show');
                }
                if (count2 == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    count2 = 0;
                }
                if (count2 = 2) {
                    count2 = 0;
                }
                // console.log(count2);
            });
            $('[data-click="piso3"]').click(function() {
                count3 += 1
                var temClasse = $(this).hasClass('show');
                if (count3 == 1 ) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="piso3"]').addClass('show');
                    $('[data-piso="piso3"]').addClass('show');
                }
                if (count3 == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    count3 = 0;
                }
                if (count3 = 2) {
                    count3 = 0;
                }
                // console.log(count3);
            });
            $('[data-click="piso4"]').click(function() {
                count4 += 1
                var temClasse = $(this).hasClass('show');
                if (count4 == 1 ) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="piso4"]').addClass('show');
                    $('[data-piso="piso4"]').addClass('show');
                }
                if (count4 == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    count4 = 0;
                }
                if (count4 = 2) {
                    count4 = 0;
                }
                // console.log(count4);
            });
            $('[data-click="piso5"]').click(function() {
                count4 += 1
                var temClasse = $(this).hasClass('show');
                if (count4 == 1 ) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');

                    $('[data-click="piso5"]').addClass('show');
                    $('[data-piso="piso5"]').addClass('show');
                }
                if (count4 == 1 && temClasse == true) {
                    $('.nav-link').removeClass('show');
                    $('.tab-pane').removeClass('show');
                    count4 = 0;
                }
                if (count4 = 2) {
                    count4 = 0;
                }
                // console.log(count4);
            });

    // Clicar fora fecha a div
    // $(document).mouseup(function(e)
    // {
    //     var conteudo = $(".nav-link"); // fora disso sera executado

    //     // se o target do click nao e a variavel conteudo nem um descendente de conteudo
    //     if (!conteudo.is(e.target) && conteudo.has(e.target).length == 0) {
    //         $('.nav-link').removeClass('show');
    //         $('.tab-pane').removeClass('show');
    //     }

    // });

$(document).ready(function(){
    // Colocar campo de pesquisa de acordo com o tamanho
    let paginaInicial = 'http://www.venancioshopping.com.br/'
    let paginaAtual = window.location.href;
    $(window).ready(function() {
        if(paginaInicial == paginaAtual && $(window).width() >= 1600) {
            $('.pesquisa-home').prepend('<input class="formHome IDForm" placeholder="Busque uma Loja, Serviço, Restaurante ou Informações…">');
            console.log('é igual');
        } else {
            $('.pesquisa-home').prepend('<input class="formHome IDForm" placeholder="O que você procura?">');
            console.log('é diferente');
        }
    });
});


   </script> <?php } ?>

</body>
<script>
	/*$("#mdb-navigation > ul > li").addClass("page-item")
	$("#mdb-navigation > ul > li > a").addClass("page-link")*/

	// Scroll suave para link interno
	$('.linksFooter a[href^="#"]').click(function(e){
		e.preventDefault();
		var id = $(this).attr('href'),
				targetOffset = $(id).offset().top;
		$('html, body').animate({
			scrollTop: targetOffset
		}, 500);
	});

    $('.wp-block-cgb-block-algori-pdf-viewer-iframe').css('width','100%')
</script>
</html>
