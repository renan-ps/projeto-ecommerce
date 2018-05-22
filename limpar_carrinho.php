<?php
	session_start();
	include "conexao.php";
	unset($_SESSION['carrinho']);
	echo "<script>location.href='carrinho.php';</script>";
?>