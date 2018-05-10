<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "websters";

	//conectar base de dados
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	//acessar banco de dados
	//$banco = mysqli_select_db($conexao, "cantina_17001");

	//compatibilizar o banco de dados
	//mysqli_set_charset($conn, 'utf-8');
	$conn->set_charset("utf8");

	if(!$conn){
		//die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexão realizada com sucesso.";
	}

?>