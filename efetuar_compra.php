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
			$arrId = [];
			$arrProd = [];
			$arrPreco = [];
			
			$tipo = $_POST['tipo'];
			$idCliente = $_SESSION['idCliente'];
			$statusPedido = $_POST['statusPedido'];
			$valor = $_POST['valor'];
			
			
			if($tipo == 3){
				$valor = $valor * 1.1;
			}
			
			$_SESSION['carrinho'];
			
			foreach($_SESSION['carrinho'] as $produto){
				array_push($arrId, $produto['idProduto']);
				array_push($arrProd, $produto['nomeProduto']);
				array_push($arrPreco, $produto['preco']);
			}
			
			$arrId = implode(",", $arrId);
			
			
			$inserir = "INSERT INTO pedidos VALUES('', '$idCliente', '$arrId', '$valor', CURRENT_TIMESTAMP, '$tipo', '$statusPedido')";
			
			//Enviar os dados para a tabela
			$enviar = mysqli_query($conn, $inserir);
			
			if($enviar){
				echo "Compra cadastrada com sucesso!";
				unset($_SESSION['carrinho']);
			} else{
				echo "Compra não cadastrada.";
				mysqli_close($conn); //encerra a conexão
			}
			
			
			//print $produtos_comprados;
			
			//echo $data;	
			//print_r($arrProd);	

				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>