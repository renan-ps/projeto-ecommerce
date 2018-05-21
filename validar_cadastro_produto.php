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
			
				include "conexao.php";	
				//session_start();
				
				$nomeProduto = $_POST['nomeProduto'];
				$categoriaProduto = $_POST['categoriaProduto'];
				$precoProduto = $_POST['precoProduto'];
				$estoque = $_POST['estoque'];
				$imagem = $_POST['imagem'];
				$descricao = $_POST['descricao'];
				$palavrasChaves = $_POST['palavrasChaves'];

				$inserir = "INSERT INTO produtos VALUES('', '$categoriaProduto', '$nomeProduto', '$precoProduto', '$estoque', '$imagem', '$descricao', '$palavrasChaves')";

				$enviar = mysqli_query($conn, $inserir);

				if($enviar){
					echo "<p>Produto cadastrado com sucesso!</p>";
					echo "<a class='btn btn-warning btn-block' href='cadastrar_produto.php' role='button'>Cadastrar Novo Produto</a>"
				} else{
					echo "Produto não cadastrado.";
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