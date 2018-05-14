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
				
				$categoria = $_GET['categoria'];
				
				$result_categoria = "SELECT * FROM produtos WHERE idCategoria = $categoria";
				$resultado_categoria = mysqli_query($conn, $result_categoria);
			
			?>
			
			<div class="row" style="margin-top: 2%;">
				
						<div class="col-12" >
							<div class="card-deck">
					
					
								<?php
								
								
								while($row_categoria = mysqli_fetch_assoc($resultado_categoria)){
								
								?>
					
								<div class="col-4" style="margin-bottom: 2%;">
								<div class="card">
									<img src="<?php echo $row_categoria['imagem'] ?>" class="card-img-top" />
									<div class="card-body">
										<h4 class="card-title"><?php echo $row_categoria['nomeProduto'] ?></h4>
										<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $row_categoria['preco'] ?></h6>
										<p class="card-text"><?php echo $row_categoria['descricao'] ?></p>
										
										<form id="adicionar_carrinho" method="post" action="adicionar_carrinho.php">
											<input type="hidden" name="imagem" value="<?php echo $row_categoria['imagem'] ?>">
											<input type="hidden" name="idProduto" value="<?php echo $row_categoria['idProduto'] ?>">
											<input type="hidden" name="nomeProduto" value="<?php echo $row_categoria['nomeProduto'] ?>">
											<input type="hidden" name="preco" value="<?php echo $row_categoria['preco'] ?>">
											<button type="submit" class="btn btn-warning">Comprar</button>
										</form>
									</div>
								</div>
								</div>
								<?php
								}
								?>

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