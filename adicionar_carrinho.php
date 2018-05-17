<?php

	session_start();
	
	

	if (empty($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = [];
   }

	if(empty($_POST)){
		//print_r($_SESSION['carrinho']);
	} else{
		array_push($_SESSION['carrinho'], $_POST);
		//print_r($_SESSION['carrinho']);
		
	}

	$_SESSION['somaCarrinho'] = array_sum($_SESSION['carrinho']);
		
	echo "<script>location.href='carrinho.php';</script>";
		
		
	//foreach ($_SESSION['carrinho'] as $key => $value) :
   //echo $value['idProduto'] . ", " . $value['nomeProduto'] . ", " . $value['preco'] . "<br>";

	//endforeach;



	//$_SESSION['idProduto'] = $_POST['idProduto'];
	//$_SESSION['nomeProduto'] = $_POST['nomeProduto'];
	//$_SESSION['preco'] = $_POST['preco'];

	//echo $_SESSION['nomeProduto'];

?>