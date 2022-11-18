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
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">		
			

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php require_once('menu.php'); ?>
    
	<?php require_once('slider-interior.php'); ?>
		
	<section class="contenido">
        <div class="container">
            <div class="panbox first">
                <div class="row">
                    <div class="col-md-12 box first white">
						<div class="row">
							<div class="col-md-12">
								<h1>NOVEDADES <span class="inverse"></span></h1>
							</div>
						</div>
						<div class="row noticia">
							<?php require_once('novedad-01.php'); ?>
						</div>
                    </div><!--/.col-md-8-->
                                      
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
	</section>
	<?php require_once('footer.php'); ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>  
  	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>