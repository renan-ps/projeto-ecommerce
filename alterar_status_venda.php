<?php

	include "conexao.php";
	$status = $_POST["status"];
	$idPedido = $_POST["idPedido"];
	
	$alterar = "UPDATE pedidos SET statusPedido = '$status' WHERE idPedido = $idPedido;";
			
	//Enviar os dados para a tabela
	$enviar = mysqli_query($conn, $alterar);
			
	if($enviar){
		echo "Pedido alterado com sucesso!";
		echo "<script>location.href='consultar_vendas.php';</script>";
	} else{
		echo "Pedido não alterado.";
		mysqli_close($conn); //encerra a conexão
	}
			

?>