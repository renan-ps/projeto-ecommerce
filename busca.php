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
			
			
					

					<?php
			
					$busca = $_POST['busca'];	
					
					$result_busca = "SELECT * FROM produtos WHERE nomeProduto LIKE '%$busca%'";
					$resultado_busca = mysqli_query($conn, $result_busca);
					
					?>
					
					<div class="row" style="margin-top: 2%;">
				
						<div class="col-12" >
							<div class="card-deck">
					
					
								<?php
								
								
								while($row_busca = mysqli_fetch_assoc($resultado_busca)){
								
								?>
					
					
								<div class="card col-md-4 col-xs-6">
									<img src="<?php echo $row_busca['imagem'] ?>" class="card-img-top" />
									<div class="card-body">
										<h4 class="card-title"><?php echo $row_busca['nomeProduto'] ?></h4>
										<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $row_busca['preco'] ?></h6>
										<p class="card-text"><?php echo $row_busca['descricao'] ?></p>
										<a href="#" class="btn btn-warning">Comprar</a>
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