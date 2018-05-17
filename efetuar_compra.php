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
			$arr = [];
			
			$tipo = $_POST['tipo'];
			$idCliente = $_POST['idCliente'];
			$statusPedido = $_POST['statusPedido'];
			$valor = $_POST['valor'];
			
			$_SESSION['carrinho'];
			
			foreach($_SESSION['carrinho'] as $produto){
				array_push($arr, $produto['idProduto']);
			}
			print_r($arr);	

				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>