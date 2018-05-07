<?php
	
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$verificar = "SELECT nomeCliente FROM clientes WHERE emailCliente = '$email' or senhaCliente = '$senha'";
$resultado = mysqli_query($conn, $verificar);
		
if($dados=mysqli_fetch_assoc($resultado)){
	
	$redirect = "index.php";
	header("location:$redirect");
	
} else{
	
	echo "<p>Login e/ou senha inválido(s)</p>";
	echo "<button type='submit' class='btn btn-warning' onClick='history.go(-1)'>Voltar</button>";

}
?>