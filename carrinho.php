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
			
			if (empty($_SESSION['carrinho'])) {
				$_SESSION['carrinho'] = [];
				?>
				<div class="row" style="margin-top: 2%; text-align: center;">
					<div class="col-12">
						<h4>Seu carrinho está vazio.</h4>
					</div>
				</div>
			<?php
			} else{
			?>
			
			
			<div class="row" style="border-bottom: 1px solid #E7E4E8; margin-left: 7%; margin-right: 7%;">
			
				
				<div class="col-5">Produtos</div>
				<div class="col-1">Preço</div>
				
			</div>
			
			
			
			
				<?php foreach ($_SESSION['carrinho'] as $key => $value) : ?>
				<div class="row" style="margin-top: 2%;">
					<div class="col-1"></div>
					<div class="col-1"><img class="img-fluid" src="<?php echo $value['imagem']; ?>"></div>
					<div class="col-3 align-middle" style=""><p ><?php echo $value['nomeProduto']; ?></p></div>
					<div class="col-2"><p>R$ <?php echo $value['preco']; ?></p></div>
					
						<div class="col-2">
							<form id="remover_item" method="post" action="remover_item.php">
								<input type="hidden" name="remover" value="">
								<p style="font-size: 15px;"><button type="submit" class="btn btn-warning btn-sm">Remover</button></p>
							</form>
						</div>
				</div>
				<?php endforeach; }?>
				
				
				
				
				
				
			
			
			
			
			<?php
			
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>