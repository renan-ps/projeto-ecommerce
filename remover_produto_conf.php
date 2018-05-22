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
				$idProduto = $_POST['idProduto'];
				$remover = "DELETE FROM produtos WHERE idProduto = '$idProduto'";
					
				$enviar = mysqli_query($conn, $remover);

				if($enviar){
					echo "<p>Produto removido com sucesso!</p>";
					echo "<a class='btn btn-warning btn-block' href='remover_produto.php' role='button'>Remover Outro Produto</a>";
				} else{
					echo "Produto não removido.";
					mysqli_close($conn);
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