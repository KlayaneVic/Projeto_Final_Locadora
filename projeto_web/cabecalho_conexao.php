<?php

	// Crio a conexão do PHP com o Banco de Dados
	$con = mysqli_connect("localhost", "", "");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	// Seleciona o banco de dados
	$db = mysqli_select_db($con, "locadora");
	if(!$db) {
		echo mysqli_error($con);
	}
?>