<?php
	//session_start();
	include "conexao-pdo.php"
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
				
				$produto = $_GET['produto'];

				$stmt = $pdo->prepare("SELECT * FROM produtos WHERE idProduto = $produto" );
				$stmt->execute();
				
				if($alvos = $stmt->fetchAll()){
			?>
					
			<div class="row" style="margin-top: 3%;">
				<div class="col-1"></div>
				<div class="col-2">
					<img class="img-fluid" src="<?php echo $alvos[0]['imagem'] ?>">

				</div>
				<div class="col-5">
					<h2><?php echo $alvos[0]['nomeProduto']; ?></h2>
					<p><?php echo $alvos[0]['descricao']; ?></p>
				</div>
				<div class="col-3">
					<h5>R$<?php echo number_format($alvos[0]['preco'], 2, ',', '.'); ?></h5>
					<p>Em até 10x de R$<?php echo number_format(($alvos[0]['preco'])/10, 2, ',', '.') ?></p>
					<form id="adicionar_carrinho" method="post" action="adicionar_carrinho.php">
						<input type="hidden" name="imagem" value="<?php echo $alvos[0]['imagem'] ?>">
						<input type="hidden" name="idProduto" value="<?php echo $alvos[0]['idProduto'] ?>">
						<input type="hidden" name="nomeProduto" value="<?php echo $alvos[0]['nomeProduto'] ?>">
						<input type="hidden" name="preco" value="<?php echo $alvos[0]['preco'] ?>">
						<button type="submit" class="btn btn-warning">Comprar</button>
					</form>
				</div>
			
			</div>	
					
			<?php
				}
				
			?>
			
			
			
			
			
			<?php
			
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>