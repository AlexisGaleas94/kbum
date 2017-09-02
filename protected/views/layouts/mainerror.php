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
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/tmperror/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>		

  	<!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?4uermMF5Tgz0FSCyIn8vM8mzIW3r7TLq";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

	</script>
	<!--End of Zendesk Chat Script-->
</head>

<body>
	<div class="main">
		<div class="nav_w3l">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'INICIO', 'url'=>array('/site/index'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'CONOCENOS', 'url'=>array('/site/index#about'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'SERVICIOS', 'url'=>array('/site/index#services'),'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'ANÁLISIS', 'url'=>array('/site/login'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom'),'visible'=>Yii::app()->user->isGuest),

						array('label'=>'ANÁLISIS', 'url'=>array('/administracion/index'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom'),'visible'=>!Yii::app()->user->isGuest),

						array('label'=>'PLANES', 'url'=>array('/site/index#pricing'),'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'EQUIPO', 'url'=>array('/site/index#team'),'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'PROYECTOS', 'url'=>array('/site/index#projects'),'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'CONTÁCTANOS', 'url'=>array('/site/index#contact'),'linkOptions'=>array('class'=>'hvr-sweep-to-bottom')),

						array('label'=>'LOGIN', 'url'=>array('/site/login'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom'),'visible'=>Yii::app()->user->isGuest),

						array('label'=>'SALIR ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'linkOptions'=>array('class'=>'hvr-sweep-to-bottom'),'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
		</div>
		
		<?php echo $content; ?>		

		<div class="wthree_social_icons">
			<div>
				<a href="https://www.facebook.com/KBUMX"><span>Facebook</span></a>
				<a href="https://twitter.com/Kbum_oficial"><span>Twitter</span></a>				
			</div>
		</div>
		<div class="copyright">
			<p>© 2017 KBUM | All Rights Reserved</p>
		</div>
	</div>
</body>
</html>