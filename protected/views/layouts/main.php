<!DOCTYPE html>
<html lang="en">
<head>
	<title>KBUM | Explota tus ideas</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--METAS-->
	<meta name="content" content="Empresa de marketing, mercadotecnia, y organización empresarial, especializados en la atencion a empresas innovadoras, ayudando a la difusion y creacion de planes de accion,  planes de marketing digital, posicionando a las empresas a nivel mundial.">

	<meta name="keywords" content="mercadotecnia, marketing, SEO, posicionamiento, buscadores, planes, innovación, app, networking, market-pull, neuromatketing, desingthinking, seervicio, productos." />
	
	<!-- //for-mobile-apps -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/scr/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/scr/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scr/css/chocolat.css" type="text/css" media="screen">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/scr/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scr/animate/css/libs/animate.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/scr/css/ionicons.min.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scr/animate/dist/wow.js"></script>
  	<style>
    	.wow:first-child {
      	visibility: hidden;
    	}
  	</style>
  	<!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?4uermMF5Tgz0FSCyIn8vM8mzIW3r7TLq";z.t=+new Date;$.
	type="text/javascript";e.	parentNode.insertBefore($,e)})(document,"script");

	</script>
	<!--End of Zendesk Chat Script-->
</head>

<body>
	<div class="header" id="home">
			<!--Top-Bar-->
				<div class="top-bar">
					<div class="container-fluid">
						<div class="header-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<h1><a class="navbar-brand" href="/site/index">K<span>BUM</span></a></h1>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav class="cl-effect-15" id="cl-effect-15">
										<?php $this->widget('zii.widgets.CMenu',array(
											'items'=>array(
												array('label'=>'CONOCENOS', 'url'=>array('/site/index#about'), 'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'CONOCENOS')),

												array('label'=>'SERVICIOS', 'url'=>array('/site/index#services'),'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'SERVICIOS')),

												array('label'=>'ANÁLISIS', 'url'=>array('/site/login'), 'linkOptions'=>array('data-hover'=>'ANÁLISIS'),'visible'=>Yii::app()->user->isGuest),

												array('label'=>'ANÁLISIS', 'url'=>array('/administracion/index'), 'linkOptions'=>array('data-hover'=>'ANÁLISIS'),'visible'=>!Yii::app()->user->isGuest),

												array('label'=>'PLANES', 'url'=>array('/site/index#pricing'),'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'PLANES')),

												array('label'=>'EQUIPO', 'url'=>array('/site/index#team'),'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'EQUIPO')),

												array('label'=>'PROYECTOS', 'url'=>array('/site/index#projects'),'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'PROYECTOS')),

												array('label'=>'CONTÁCTANOS', 'url'=>array('/site/index#contact'),'linkOptions'=>array('class'=>'scroll', 'data-hover'=>'CONTÁCTANOS')),

												array('label'=>'LOGIN', 'url'=>array('/site/login'), 'linkOptions'=>array('data-hover'=>'LOGIN'),'visible'=>Yii::app()->user->isGuest),

												array('label'=>'SALIR ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'linkOptions'=>array('data-hover'=>'SALIR'),'visible'=>!Yii::app()->user->isGuest)
											),
										)); ?>
									</nav>
								</div>							
							</nav>						
						</div>
					</div>
				</div>
			<!--//Top-Bar-->
	</div>
	
	<?php echo $content; ?>

	<!--footer-->
		<div class="footer">
			<div class="footer-content-agile">
				<div class="col-md-3 about-us-agile">
					<h4>Conócenos</h4>
						<div class="aboutus-right-wthree">
							<p>Somos una Empresa de Marketing y Organización en constante actualización, formada por profesionistas especializados en Mercadotecnia.</p>						   
						</div>
				</div>
				<div class="col-md-3 news-letter-agileits-w3layouts">
					<h4>Recibe Nuestras Ofertas</h4>
					<p>Recibe  información de nuestros especialistas</p>
						<form action="#" method="post">
							<input type="email" name="Email" placeholder="Email" required="" />
							<input type="submit" value="Subscribirse" />
						</form>
				</div>
				<div class="col-md-3 links-w3layouts">
					<h4>Más Links</h4>
					<ul>
						<li><a class="scroll active" href="/site/index#home"><span>Inicio</span></a></li> 
						<li><a class="scroll" href="/site/index#services"><span>Servicios</span></a></li> 
						<li><a class="scroll" href="/site/index/site/index#team"><span>Equipo</span></a></li> 
						<li><a class="scroll" href="/site/index#projects"><span>Proyectos</span></a></li> 
						<li><a class="scroll" href="/site/index#contact"><span>Contáctanos</span></a></li> 
											 
					</ul>
				</div>
				<div class="col-md-3 footer-social-icons-agileinfo">
					<h4>Nuestras Redes sociales</h4>
					<ul>
						<li><a href="https://www.facebook.com/KBUMX" target="_blank"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Facebook</a></li>	
						<li><a href="https://twitter.com/Kbum_oficial" target="_blank"><span><i class="fa fa-twitter" aria-hidden="true"></i></span> Twitter</a></li>	
					</ul>
				</div>
				<div class="clearfix"> </div>
				<div class="copy">
			        <p>© 2017 KBUM | All Rights Reserved</p>
			    </div>
			</div>
		</div>
	<!--/footer -->

<!-- js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/easing.js"></script>

	<!--<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},500);
			});
		});
	</script>-->
	<!-- start-smoth-scrolling -->

	<!--light-box-files -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/jquery.chocolat.js"></script>

	<!--//light-box-files -->
	<script type="text/javascript">
		$(function() {
			$('.gallery1 a').Chocolat();
		});
	</script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/responsiveslides.min.js"></script>
	<script>
			$(function () {
				$("#slider").responsiveSlides({
					auto: true,
					pager: true,
					nav: true,
					speed: 1000,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
	</script>
			
	<!--search-bar-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/main.js"></script>
	<!--//search-bar-->

	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
									
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
		
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!-- //smooth scrolling -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scr/js/bootstrap-3.1.1.min.js"></script>

	<script>
	    wow = new WOW(
	      {
	        animateClass: 'animated',
	        offset:       100,
	      }
	    );
	    wow.init();
	</script>
<!-- //js -->
</body>
</html>