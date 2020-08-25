 <?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section id="bannerHome">
	<div class="slideHomeDesktop">
		<?php echo do_shortcode('[smartslider3 slider=2]');?>
	</div>
	<div class="slideHomeMobile">
		<?php echo do_shortcode('[smartslider3 slider=6]');?>
	</div>

</section>
<div id="main-container" class="container">
<section id="pesquisaHome" class="d-flex">
	<form class="pesquisa-home">
	</form>
	<p>Ou explore nossos pisos:</p>
</section>

<section id="pisosHome">
	<div class="pisos-desktop">
		<ul class="nav " id="myTab" role="tablist" data-group="pisos">
		  <li class="nav-item navP2">
		    <a class="nav-link" data-click="pisoP2">
		    	<div class="pisoP02 d-flex" id="pisoP2">
					<h3>PISO P2</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-P2.png" alt="Gastronomia & Serviços">
						</div>
					</div>
					<h5>Gastronomia <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item navTerreo">
		    <a class="nav-link" data-click="pisoterreo">
		    	<div class="terreo d-flex" id="pisoterreo">
					<h3>Térreo</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-terreo.png" alt="Gastronomia & Varejo">
						</div>
					</div>
					<h5>Gastronomia <span>& Varejo</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item nav01">
		    <a class="nav-link" data-click="piso1">
		    	<div class="piso01 d-flex" id="piso1">
					<h3>1° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-01.png" alt="Varejo & Serviços">
						</div>
					</div>
					<h5>Varejo <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item nav02">
		    <a class="nav-link" data-click="piso2">
		    	<div class="piso02 d-flex" id="piso2">
					<h3>2° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-02.png" alt="Negócios & Serviços">
						</div>
					</div>
					<h5>Negócios <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>
		   <li class="nav-item nav03">
		    <a class="nav-link" data-click="piso3">
		    	<div class="piso03 d-flex" id="piso3">
					<h3>3° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-03.png" alt="Saúde & Bem Estar">
						</div>
					</div>
					<h5>Saúde <span>& Bem Estar</span></h5>
				</div>
			</a>
		  </li>
		   <li class="nav-item nav04">
		    <a class="nav-link" data-click="piso4">
		    	<div class="piso04 d-flex" id="piso4">
					<h3>4° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-04.png" alt="Educação & Coworking">
						</div>
					</div>
					<h5>Educação <span>& Negócios</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item nav05">
		    <a class="nav-link" data-click="piso5">
		    	<div class="piso05 d-flex" id="piso5">
					<h3>5° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-05.png" alt="Educação">
						</div>
					</div>
					<h5>Educação</h5>
				</div>
			</a>
		  </li>
		</ul>
	</div>
</div>
	<div class="pisos-mobile">
		<ul class="nav owl-carousel owl-theme" id="myTab" role="tablist" data-group="pisos">
		  <li class="nav-item navP2">
		    <a class="nav-link" data-click="pisoP2">
		    	<div class="pisoP02 d-flex" id="pisoP2">
					<h3>PISO P2</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-P2.png" alt="Gastronomia & Serviços">
						</div>
					</div>
					<h5>Gastronomia <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item navTerreo">
		    <a class="nav-link" data-click="pisoterreo">
		    	<div class="terreo d-flex" id="pisoterreo">
					<h3>Térreo</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-terreo.png" alt="Gastronomia & Varejo">
						</div>
					</div>
					<h5>Gastronomia <span>& Varejo</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item item nav01">
		    <a class="nav-link" data-click="piso1">
		    	<div class="piso01 d-flex">
					<h3>PISO 01</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-01.png" alt="Varejo & Serviços">
						</div>
					</div>
					<h5>Varejo <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>

		  <li class="nav-item item nav02">
		    <a class="nav-link" data-click="piso2">
		    	<div class="piso02 d-flex">
					<h3>PISO 02</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-02.png" alt="Negócios & Serviços">
						</div>
					</div>
					<h5>Negócios <span>& Serviços</span></h5>
				</div>
			</a>
		  </li>
		   <li class="nav-item item nav03">
		    <a class="nav-link" data-click="piso3">
		    	<div class="piso03 d-flex">
					<h3>PISO 03</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-03.png" alt="Saúde & Bem Estar">
						</div>
					</div>
					<h5>Saúde <span>& Bem Estar</span></h5>
				</div>
			</a>
		  </li>
		   <li class="nav-item item nav04">
		    <a class="nav-link" data-click="piso4">
		    	<div class="piso04 d-flex">
					<h3>PISO 04</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-04.png" alt="Educação & Coworking">
						</div>
					</div>
					<h5>Educação <span>& Coworking</span></h5>
				</div>
			</a>
		  </li>
		  <li class="nav-item nav05">
		    <a class="nav-link" data-click="piso5">
		    	<div class="piso05 d-flex" id="piso5">
					<h3>5° Piso</h3>
					<div class="circulo-azul">
						<div class="pisos-imagem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/VENANCIO_SITE_ICON_Piso-05.png" alt="Educação">
						</div>
					</div>
					<h5>Educação</h5>
				</div>
			</a>
		  </li>
		</ul>
	</div>


	  	<div class="tab-pane" id="pisopdois" data-piso="pisoP2">
	  		<div class="container">
	  			<h5>Piso p2</h5>
	  			<h3>Gastronomia & Serviços</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Nossa Praça Gourmet possui diversas opções para atender seu desejo diário, e em qualquer hora do dia, seja no café da manhã, almoço, lanche ou até mesmo para curtir um happy hour com amigos! Com você permanecemos sempre conectados, desde às compras até o que agrada o seu paladar. As melhores opções de gastronomia você encontra aqui. Esperamos por você!</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
							<a href="/loja/assados-e-grelhados/">Assados e Grelhados</a><br>
							<a href="/loja/barbearia-bandeira/">Barbearia Bandeira </a><br>
							<a href="/loja/beth-lanches/">Beth Lanches</a><br>
							<a href="/loja/bombay-herbs-spices/">Bombay Herbs & Spices</a><br>
							<a href="/loja/clinica-de-relogios/">Clínica de Relógios</a><br>
							<a href="/servico/clinica-procard/">Clínica Procard</a><br>
							<a href="/loja/colabora/">Colabora</a><br>
							<a href="/servico/drogafuji/">Drogafuji</a><br>
							<a href="/loja/happy-house/">Happy House</a><br>
							<a href="/loja/infinity-ouro-e-joias/">Infinity Ouro e Jóias</a><br>
							<a href="/servico/hospital-dia-samdel/">Hospital Dia Samdel</a><br>
							<a href="/loja/infinity-ouro-e-joias/">Infinity Ouro e Jóias</a><br>-->
							<a href="/servico/laboratorio-sabin/">Laboratório Sabin</a><br>
	  					</p>
	  				</div>
	  				<div class="col-lg-4">
							<a href="/servico/loterica-da-caixa/">Lotérica</a><br>
							<!--<a href="#">Mundo Poá</a><br>-->
							<a href="/loja/pacifico-sushi/">Pacífico Sushi</a><br>
							<a href="/loja/picanha-grill/">Picanha Grill</a><br>
							<a href="/loja/pra-voce-mercado-express/">Pra Você Mercado Express</a><br>
							<a href="/loja/salada-mista/">Salada Mista</a><br>
							<!--<a href="#">Sunshine Crane</a><br>-->
							<a href="/loja/super-games/">Super Games</a><br>
							<a href="/loja/tapioquinha-com/">Tapioquinha.com</a><br>
							
	  					</p>
	  				</div>
	    		</div>
			</div>
		</div>
		<div class="tab-pane" id="pisoTerreo" data-piso="pisoterreo">
	  		<div class="container">
	  			<h5>TÉRREO</h5>
	  			<h3>Gastronomia & Varejo</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Com você nós experimentamos! E sabe onde você pode encontrar novas experiências conosco? Exatamente nesse piso. Nós possuímos a maior praça gourmet para que você possa escolher a melhor opção! Além disso, temos uma variedade em lojas para te atender com o que for necessário, as melhores marcas com opções incríveis de produtos. Aqui você investe em você e tem tempo para tudo, seja para comprar um presente para alguém especial ou para experimentar comidas novas.</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
	  						<a href="/loja/lojas-americanas/">Americanas Express</a><br>
	  						<a href="/loja/atelie-amalia-barros/">Atelié Amália Barros</a><br>
							<a href="/loja/bio-mundo/">Biomundo</a><br>
							<a href="/loja/burger-king/">Burguer King</a><br>
							<a href="/loja/brazilian-ice-cream/">Brazilian Ice Cream</a><br>
							<a href="/loja/chocolateria-brasileira/">Chocolateria  Brasileira</a><br>
							<a href="/loja/chilli-beans/">Chilli Beans</a><br>
							<a href="/loja/claro/">Claro</a><br>
							<a href="/loja/confraria-do-camarao/">Confraria do Camarão</a><br>
							<a href="/loja/constance/">Constance</a><br>
							<a href="/loja/debora-bertti/">Débora Bertti</a><br>
							<a href="/loja/d-o-c-vinhos/">D.O.C Vinhos</a><br>
							<a href="/loja/ehven-pedras/">Ehven Pedras</a><br>
							<a href="/loja/emporio-do-aco/">Emporio do Aço</a><br>
							<a href="/loja/espaco-allu/">Espaço Allú</a><br>
							<a href="/loja/espaco-laser/">Espaço Laser</a><br>
							<a href="/loja/eu-amo-cachaca/">Eu Amo Cachaça</a><br>
							<a href="/loja/fio-fino/">Fio Fino</a><br>
							<a href="/loja/frans-cafe-2/">Fran's Café</a><br>
							<a href="/loja/giraffas/">Giraffas</a><br>
							<a href="/loja/i-be-store/">I Be Store</a><br>
							<a href="/loja/laap/">Laap</a><br>
							<a href="/loja/lady-perfumaria/">Lady Perfumaria</a><br>
							<a href="/loja/loccitane-au-bresil-2/">L'occitane Au Brésil</a><br>
	  					</p>
	  				</div>
	  				<div class="col-lg-4">
							<a href="/loja/loja-18/">Loja 18</a><br>
							<a href="/loja/minha-cadeira/">Minha Cadeira</a><br>
							<a href="/loja/mr-fit/">Mr Fit</a><br>
							<a href="/loja/mr-grill/">Mr. Grill</a><br>
							<a href="/loja/mundo-infantil/">Mundo Infantil</a><br>
							<a href="/loja/o-boticario/">O Boticário</a><br>
							<a href="/loja/otica-diniz/">Ótica Diniz</a><br>
							<a href="/loja/outback-steakhouse-2/">Outback Steakhouse</a><br>
							<a href="/loja/outlet-lingerie/">Outlet Lingerie </a><br>
							<a href="/loja/othello-foot-wear/">Othello Footwear</a><br>
							<a href="/loja/panelinhas-do-brasil-2/">Panelinhas do Brasil</a><br>
							<a href="/loja/pao-de-queijo-original-2/">Pão de Queijo Original</a><br>
							<a href="/loja/loccitane-au-bresil-2/">Paris Jóias</a><br>
							<a href="/loja/qg-jeitinho-caseiro/">QG Jeitinho Caseiro</a><br>
							<a href="/loja/rubinho-express/">Rubinho Express </a><br>
							<a href="/loja/sabin/">Sabin</a><br>
							<a href="/loja/so-colchoes/">Só Colchões</a><br>
							<a href="/loja/subs-acai/">Sub's açaí</a><br>
							<a href="/loja/subway/">Subway</a><br>
							<a href="/loja/tim/">Tim</a><br>
							<!--<a href="/loja/tomatzo/">Tomatzo</a><br>-->
							<a href="/loja/viva-paleteria/">Viva Paleteria</a><br>
							<a href="/servico/western-union/">Western Union</a><br>
	  					</p>
	  				</div>
	    		</div>
			</div>
		</div>
	  <div class="tab-pane" id="pisoum" data-piso="piso1">
	  		<div class="container">
	  			<h5>1° Piso</h5>
	  			<h3>Varejo & Serviços</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>O Venâncio Shopping oferece um complexo com 150 lojas conectadas com o que você precisa e no seu bem-estar. As maiores marcas, joias, acessórios e muito mais estão aqui. Além de lojas exclusivas e modernas, você encontra opções de presentes incríveis, produtos para casa e decoração. Afinal, somos um complexo MULTIUSO cheio de novidades para você!</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
							<a href="/servico/agencia-bancaria-brb/">Agência Bancária BRB</a><br>
							<a href="/loja/cafe-com-leite-2/">Café com Leite﻿</a><br>
							<a href="/servico/cartorio-1-oficio/">Cartório 1° ofício</a><br>
							<a href="/servico/cartorio-2-oficio/">Cartório 2° ofício</a><br>
							<a href="/servico/cartorio-3-oficio/">Cartório 3° ofício</a><br>
							<a href="/loja/castros-joias/">Castro's Jóias</a><br>
							<a href="/loja/civita-cafes-especiais-2/">Civitá Cafés Especiais</a><br>
							<a href="/loja/clacks/">Clack’s﻿</a><br>
							<a href="/loja/egalite-boutique/">Égalité Boutique</a><br>
	  					</p>
	  				</div>
	  				<div class="col-lg-4">
							<a href="/loja/f-a-lanches/">F. A. Lanches</a><br>
							<a href="/loja/fiori/">Fiori﻿</a><br>
							<a href="/loja/h-compre-aplique/">H. Compre & Aplique﻿</a><br>
							<a href="/servico/kalunga/">Kalunga﻿</a><br>
							<a href="/servico/kms-cambio-exchange/">KMS Câmbio – Exchange﻿</a><br>
							<!--<a href="/loja/morena-flor/">Morena Flor﻿</a><br>-->
							<a href="/loja/nara-resende/"> Nara Resende</a><br>
							<a href="/loja/paulinas-livraria/">Paulinas Livraria</a><br>
							<a href="/loja/paris-perfumes/">Paris Perfumes﻿</a><br>
							<a href="/loja/rl-modas/">R&L Modas</a><br>
							<a href="/loja/tudo-jeans/">Tudo Jeans</a><br>
	  					</p>
	  				</div>
	    		</div>
			</div>
		</div>
	  <div class="tab-pane" id="pisodois" data-piso="piso2">
	  	<div class="container">
	  			<h5>2° Piso</h5>
	  			<h3>Negócios & Serviços</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Pensando em oferecer a melhor experiência de atendimento multiuso nós também contamos com agências de viagens, certificação digital, imobiliárias, defesa do consumidor, Procon e serviços advocatícios para que você possa resolver tudo o que precisa em um só lugar e com qualidade. Nossa tarefa é tornar todos os seus dias mais fáceis!</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
							<a href="/servico/avance-bsb-corretora-de-seguro/">Avance Corretora</a><br>
							<a href="/servico/anoreg-df/">ANOREG/DF</a><br>
							<!--<a href="/servico/brasilia-estagios/">Brasília Estágios</a><br>-->
							<a href="/servico/1o-oficio-de-imoveis/">Cartório de 1º Ofício de Imóveis</a><br>
							<a href="/servico/cartorio-de-1o-oficio-de-protesto-de-brasilia/">Cartório de 1º Ofício de Protesto de Brasília</a><br>
							<a href="/servico/cdl/">CDL</a><br>
							<a href="/loja/centrocon-contabilidade/">Centrocon Contabilidade</a><br>
							<a href="/servico/cepro/">CEPRO</a><br>
							<!--<a href="/servico/cintia-mara-custodio-e-advogados-associados/">Cíntia Mara Custódio e Advogados Associados﻿</a><br>-->
							<a href="/servico/consultoria-financeira-pontes/">Consultoria Financeira Pontes</a><br>
							<a href="/servico/galvao-e-silva-advocacia/">Galvão e Silva Advocacia﻿</a><br>
							<a href="/servico/gold-turismo/">Gold Turismo</a><br>
							<a href="/servico/imprima/">Imprima﻿</a><br>
	  					</p>
	  				</div>
	  				<div class="col-lg-4">
							<a href="/servico/interliga-corretora-de-seguros/">Interliga Corretora de Seguros</a><br>
							<a href="/servico/instituto-prover/">Instituto Prover</a><br>
							<a href="/servico/isis-previ-assessoria-e-consultoria-previdenciaria/">Isis Previ Assessoria e Consultoria Previdenciária﻿</a><br>
							<a href="/servico/legal-service/">Legal Service﻿</a><br>
							<a href="/servico/luperce-d-teixeira-auditoria-e-pericia/">Luperce D. Teixeira – Auditória e Perícia﻿</a><br>
							<a href="/servico/mulheres-do-brasil/">Mulheres do Brasil</a><br>
							<a href="/servico/procon-df/">PROCON-DF﻿</a><br>
							<a href="/servico/rca-operadora-turistica/">RCA Operadora Turística</a><br>
							<!--<a href="/servico/rio-grafica/">Rio Gráfica</a><br>-->
							<a href="/loja/salao-ines/">Salão Inês</a><br>
							<a href="/servico/serasa-consumidor/">Serasa Consumidor</a><br>
							<a href="/loja/smart-controll/">Smart Controll</a><br>
							<a href="/servico/solucoes-de-credito/">Soluções de Crédito﻿</a><br>
							<a href="/servico/valemed/">Valemed</a><br>
							<a href="/servico/viamar-turismo/">Viamar Turismo﻿</a><br>
	  					</p>
	  				</div>
	    		</div>
			</div>
		</div>

	     <div class="tab-pane" id="pisotres" data-piso="piso3">
	     	<div class="container">
	  			<h5>3° Piso</h5>
	  			<h3>Saúde & Bem estar</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Cuidar da saúde é um ponto crucial para todos. Pensando nisso, nós temos academia, clínica de pilates, estúdio de pole dance, clínica médica e de diagnósticos, e espaço de estética para que você possa se cuidar, ter uma vida mais saudável, aproveitar ainda mais o seu dia a dia e viver experiências incríveis conosco sem sair do mesmo lugar! Estamos conectados com a sua saúde e o seu bem-estar todos os dias.</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
							<a href="/servico/acao-positiva/">Ação Positiva</a><br>
							<a href="/servico/aparicio-humberto-de-sousa/">Aparicio Humberto de Sousa</a><br>
							<!--<a href="/servico/atividades-educacionais-e-psicopedagogicos-complementares/">Atividades Educacionais e Psicopedagógicos Complementares﻿</a><br>-->
							<a href="/servico/bluefit/">BlueFit</a><br>
							<a href="/servico/centro-clinico-saluta/">Centro Clínico Salutá</a><br>
							<a href="/servico/corpus-fisioterapia/">Corpus Fisioterapia</a><br>
							<!--<a href="#">Credibilidade Construções</a><br>-->
							<a href="/servico/credinamico/">Credinaminco</a><br>
							<a href="//servico/csc-centro-de-atendimento-ao-solicitante-de-visto/">CSC – Centro de Atendimento ao Solicitante de Visto﻿</a><br>
							<a href="/servico/defensoria-de-sao-paulo-e-ceara/">Defensoria de São Paulo e Ceará﻿</a><br>

	  					</p>
	  				</div>
	  				<div class="col-lg-4">
							<a href="/servico/dra-jusciane-mascarenhas/">Dra. Jusciane Mascarenhas﻿</a><br>
							<!--<a href="/servico/fest-tour/">Fest Tour</a><br>-->
							<a href="/servico/globalvisa-assessoria-internacional/">Globalvisa Assessoria Internacional﻿</a><br>
							<a href="/servico/gris-esmalteria-e-depileria/">Gris Esmalteria e Depileria﻿</a><br>
							<a href="/servico/guarda-volumes/">Guarda Volumes﻿</a><br>
							<a href="/servico/inedi-instituto-nacional-de-ensino-a-distancia/">INEDI — Instituto Nacional de Ensino a Distância</a><br>
							<a href="/servico/instituto-depilar/">Instituto Depilar</a><br>
							<a href="/servico/pole-voe/">Pole Voe</a><br>
							<a href="/servico/rca-operadora-turistica/">RCA Operadora Turística</a><br>
							<a href="/servico/sala-de-casamento/">Sala de Casamento</a><br>
							<a href="/servico/skalp/">SKALP</a><br>
							<a href="/servico/vistos-america-guarda-volumes/">Vistos América – Guarda Volumes﻿</a><br>
	  					</p>
	  				</div>
	    		</div>
			</div>
	     </div>
	     <div class="tab-pane" id="pisoquatro" data-piso="piso4">
	     	<div class="container">
	  			<h5>4° Piso</h5>
	  			<h3>Educação e Coworking</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Está pensando em fazer um curso preparatório? Crescer como profissional? Realizar o sonho de fazer uma faculdade? No Venâncio Shopping temos faculdade, curso preparatório para concursos públicos e mais. Venha para o Venâncio Shopping e mude o mundo com o seu conhecimento! Aqui você vai encontrar qualidade e alcançar o sucesso que merece. Desfrute do nosso universo, conecte-se ao Venâncio Shopping!</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
	  						<a href="/servico/acao-positiva/">Ação Positiva</a><br>
							<a href="/servico/coaching-rosa-figueiroa/">Coaching Rosa Figueiroa</a><br>
							<a href="/servico/crefito-11/">Crefito 11</a><br>
							<a href="/servico/espaco-campus/">Espaço Campus</a><br>
							<!--<a href="/servico/fernanda-sampaio-psicologa/">Fernanda Sampaio Psicóloga﻿</a><br>-->
							<a href="/servico/inspirar-pos-graduacao/">Inspirar Pós-Graduação</a><br>
							<a href="/servico/uninter/">Uninter</a><br>
							<a href="/servico/universidade-metodista/">Universidade Metodista</a><br>
	  					</p>
	  				</div>
	    		</div>
			</div>
	     </div>
	     <div class="tab-pane" id="pisocinco" data-piso="piso5">
	     	<div class="container">
	  			<h5>5° Piso</h5>
	  			<h3>Educação</h3>
	  			<div class="row">
	  				<div class="col-lg-4">
	  					<p>Pretende começar um curso superior e almeja por qualidade e excelência? Aqui no Venâncio Shopping temos a faculdade que você precisa para obter sucesso na sua vida profissional. Professores renomados e capacitados para te oferecer o melhor. Desfrute do nosso universo, conecte-se ao Venâncio Shopping.</p>
	  				</div>
	  				<div class="col-lg-4 pl-7">
	  					<p><span>Aqui você Encontra:</span><br>
							<a href="/servico/unopar/">Unopar</a><br>
	  				</div>
	    		</div>
			</div>
	     </div>

	</div>
</section>

<div class="container">
	<section id="blogHome">
		<div class="sectionBlog">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6">
					<div class="row bannerVmais">
						<div class="contentVmaisHome">
							<div class="col-8">
								<p><span>R$ 1 = 1 VMais!</span>
							Quanto mais acumular VMais, mais vantagens você terá.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="botaoVmaisHome">
								<a href="/vmais/">Cadastrar GRÁTIS</a>
							</div>
						</div>

						<div class="col-6">
							<div class="botaoVmaisHomeRegulamento">
								<a href="/vmais/">Consultar Regulamento</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-5 offset-lg-1 blogVenancio">
					<div class="row">
						<div class="col-12">
							<h1>BLOG VENÂNCIO</h1>
						</div>
					</div>
						<?php
							$new_query = new WP_Query(array(
					    								'posts_per_page' => 3,
					    								'post_type'      => post
					    								));
							while ( $new_query->have_posts() ) : $new_query->the_post();
						?>

					 		<div class="row">
					 			<div class="col-12">
									<div class="bloco-blog">
										<div class="thumb">
											<div class="row">
												<div class="col-md-3 imagem-blog">
													<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
												</div>
												<div class="col-md-9 titulo-blog">
													<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
													<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php
							endwhile;
							wp_reset_postdata();
						?>
						<div class="row">
							<div class="col-12 botaoMaisBlog">
								<a href="/blog/">Ver todos</a>
							</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<section id="calendarioHome">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Calendário de eventos</h1>
				<p>Clique para acessar mais informações</p>
				<div>
					<?php echo do_shortcode('[MEC id="175"]');?>
					<div class="botaoVerCalendario">
						<a href="/eventos">Confira o Calendário Completo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
<script src="<?php get_stylesheet_directory_uri(); ?>/wp-content/themes/padrao/js/colapse.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/OwlCarousel/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

<script>
	jQuery(document).ready(function(){
	  jQuery(".owl-carousel").owlCarousel({
	  	center: false,
	  	items: 1,
	  	autoWidth: true
	  });
	  jQuery('.owl-item').css('width','')
	});
</script>
