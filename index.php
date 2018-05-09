<?php
	//session_start();
?>
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
			
			<?php
			include "conexao-pdo.php";

			$stmt = $pdo->prepare('SELECT * FROM produtos ORDER BY idProduto desc' );
			$stmt->execute();
			if($alvos = $stmt->fetchAll()){
			
			?>
			
			<div class="row" style="margin-top: 2%;">
				
				<div class="col-12" >
					<div class="card-deck">
						<div class="card">
							<img src="<?php echo $alvos[0]['imagem'] ?>" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title"><?php echo $alvos[0]['nomeProduto'] ?></h4>
								<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $alvos[0]['preco'] ?></h6>
								<p class="card-text"><?php echo $alvos[0]['descricao'] ?></p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
						
						<div class="card">
							<img src="<?php echo $alvos[1]['imagem'] ?>" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title"><?php echo $alvos[1]['nomeProduto'] ?></h4>
								<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $alvos[1]['preco'] ?></h6>
								<p class="card-text"><?php echo $alvos[1]['descricao'] ?></p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
						
						<div class="card">
							<img src="<?php echo $alvos[2]['imagem'] ?>" class="card-img-top" />
							<div class="card-body">
								<h4 class="card-title"><?php echo $alvos[2]['nomeProduto'] ?></h4>
								<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $alvos[2]['preco'] ?></h6>
								<p class="card-text"><?php echo $alvos[2]['descricao'] ?></p>
								<a href="#" class="btn btn-warning">Comprar</a>
							</div>
						</div>
						

					
					</div>
				</div>
			</div>
			
			
			<?php
			}
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>