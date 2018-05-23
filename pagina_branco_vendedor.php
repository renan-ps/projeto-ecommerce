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
			
				if($_SESSION['tipo'] == 2){
					
				
			?>
			
			
			
			<?php
			}
			if ($_SESSION['tipo'] == 1){
			?>
			
			<div class="row">
				<div class="col-12">
					<h1>Erro 404 - Página não encontrada.</h1>
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