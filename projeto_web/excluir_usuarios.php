<?php

	$id = $_GET['id'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM usuario WHERE id=$id";
	
	include('rodape_conexao.php');
	
	header('location:lista_usuarios.php');
?>