<!DOCTYPE html>
<html lang="es">
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
    <section id="main-slider">
			<div class="item active">
				<div class="container">											
					<div class="row">
						<?php require_once('slider-home.php'); ?>
					</div>
				</div>
			</div>
    </section> 
	
        <div class="container">
            <div class="panbox first">
                <div class="row">
                    <div class="col-md-8 col-sm-6 box first white">
						<div class="destacado">
                            <p>Las Organizaciones no son los dirigentes, son todos los trabajadores quienes las representan.
							Es por eso que los dirigentes tenemos que tener presente que: la mejor manera de representar a los trabajadores es haciéndole conocer sus derechos.</p><br>
							<div class="right"><cite title="Source Title">Gabriel Ruiz <br>
							Secretario General</cite></div>
						</div>
						<hr>
							<div class="novedades-home">
								<?php require_once('novedades-home.php'); ?>								
							</div>
                    </div><!--/.col-md-8-->
                    <div class="col-md-4 col-sm-6 box first color-brown">
                        <?php require_once('descargas-right.php'); ?>		
					 <div class="color-yellow">	
						<?php require_once('login.php'); ?>
					</div>
                    </div><!--/.col-md-4-->                    
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
	<?php require_once('footer.php'); ?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <!--/  <script src="js/jquery.prettyPhoto.js"></script> -->
</body>
</html>