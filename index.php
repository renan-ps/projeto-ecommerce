

<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
		<title>Webster</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
			
			<?php
				include "cabecalho.php";
			?>
			
			<div id="controleCarrossel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#controleCarrossel" data-slide-to="0" class="active"></li>
					<li data-target="#controleCarrossel" data-slide-to="1"></li>
					<li data-target="#controleCarrossel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="imagens/caroussel/iphone.jpg" />
						<div class="carousel-caption d-none d-md-block">
							<h3>iPhone</h3>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="imagens/caroussel/notebook.jpg" />
						<div class="carousel-caption d-none d-md-block">
							<h3>Notebook</h3>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="imagens/caroussel/smart%20tv.png" />
						<div class="carousel-caption d-none d-md-block">
							<h3>Smart TV</h3>
							
						</div>
					</div>
				</div>
				<a href="#controleCarrossel" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Voltar</span>
				</a>
				
				<a href="#controleCarrossel" class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Avançar</span>
				</a>
			</div>
			
			<?php
				include "rodape.php";
			?>
			
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>