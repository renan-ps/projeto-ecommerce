

<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
		<title>Webster</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
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
							<h3 style="color: #ffc107 !important; text-shadow: 1px 1px #000 !important;">Super promoção de iPhones!</h3>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="imagens/caroussel/notebook.jpg" />
						<div class="carousel-caption d-none d-md-block">
							<h3 style="color: #ffc107 !important; text-shadow: 1px 1px #000 !important;">Notebook com preços de fábrica!</h3>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="imagens/caroussel/smart%20tv.png" />
						<div class="carousel-caption d-none d-md-block">
							<h3 style="color: #ffc107 !important; text-shadow: 1px 1px #000 !important;">Smart TVs à partir de R$999,99!</h3>
							
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
			
			
			
			<div class="row" style="margin-top: 2%;">
				<div class="col-12" >
					<div class="card-deck">
						<div class="card">
							<img src="imagens/produtos/Smartphone%20Samsung%20Galaxy%20J1%20Mini.jpg" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title">Smartphone Samsung Galaxy J1 Mini</h4>
								<h6 class="card-subtitle mb-2 text-muted">R$ 365,80</h6>
								<p class="card-text">Dual Chip Android 5.1 Tela 4" 8GB 3G Wi-Fi Câmera 5MP - Dourado</p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
						
						<div class="card">
							<img src="imagens/produtos/Smart%20TV%20LED%2032%20Samsung.jpg" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title">Smart TV LED 32" Samsung</h4>
								<h6 class="card-subtitle mb-2 text-muted">R$ 1099,90</h6>
								<p class="card-text">HD com Conversor Digital 2 HDMI 1 USB Wi-Fi 120Hz</p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
						
						<div class="card">
							<img src="imagens/produtos/Panela%20de%20Press%C3%A3o%20El%C3%A9trica%20Philips%20Walita.jpg" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title">Panela de Pressão Elétrica Philips Walita</h4>
								<h6 class="card-subtitle mb-2 text-muted">R$ 279,90</h6>
								<p class="card-text">Linha Daily Collection RI3103/7 - 5 Litros com timer</p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
					
					</div>
				</div>
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