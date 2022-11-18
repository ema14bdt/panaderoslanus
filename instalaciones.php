<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sindicato de Obreros Panaderos de Lanús</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	
		<link rel="stylesheet" type="text/css" href="galeria/css/style.css" />
		<link rel="stylesheet" type="text/css" href="galeria/css/elastislide.css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	
	
	<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
	<?php require_once('menu.php'); ?>
    <?php require_once('slider-interior.php'); ?>
        <div class="container">
            <div class="panbox first">
                <div class="row">
					<div class="col-md-12 box first white">
						<h1>NUESTRAS <span class="inverse">INSTALACIONES</span></h1>
					
					<div id="rg-gallery" class="rg-gallery">
						<div class="rg-thumbs">
								<!-- Elastislide Carousel Thumbnail Viewer -->
							<div class="es-carousel-wrapper">
									
									
									<div class="es-carousel">
										<ul>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-01.jpg" data-large="images/instalaciones/instalaciones-01.jpg" alt="Instalaciones" /></a></li>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-02.jpg" data-large="images/instalaciones/instalaciones-02.jpg" alt="Instalaciones" /></a></li>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-03.jpg" data-large="images/instalaciones/instalaciones-03.jpg" alt="Instalaciones"  /></a></li>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-04.jpg" data-large="images/instalaciones/instalaciones-04.jpg" alt="Instalaciones" /></a></li>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-05.jpg" data-large="images/instalaciones/instalaciones-05.jpg" alt="Instalaciones" /></a></li>
											<li><a href="#" title=""><img src="images/instalaciones/thumbs/instalaciones-06.jpg" data-large="images/instalaciones/instalaciones-06.jpg" alt="Instalaciones"  /></a></li>
										</ul>
									</div><!-- Carousel -->
									<div class="es-nav">
										<span class="es-nav-prev">Previous</span>
										<span class="es-nav-next">Next</span>
									</div>
							</div>
								<!-- End Elastislide Carousel Thumbnail Viewer -->
						</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!--/.row-->
			</div>
		</div><!--/.box-->
	</div><!--/.container-->
	<?php require_once('footer.php'); ?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="galeria/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="galeria/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="galeria/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="galeria/js/gallery.js"></script>
	
</body>
</html>