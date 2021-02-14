<?php

	//Capturei as informações do formulário
	$senha_usuario = $_POST['senha_usuario'];
	$nome_usuario = $_POST['nome_usuario'];
	$email_usuario = $_POST['email_usuario'];

	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO usuario (email, senha, nome, tipo) 
			VALUE ('$email_usuario', '$senha_usuario', '$nome_usuario', 0)";
	
			$texto = "<script language='JavaScript'>
			window.alert('Usuário Cadastrado com Sucesso!! Redirecionando para o Login...')
			window.location.href='login.php';
			</script>";
	include('rodape_conexao.php');
?>