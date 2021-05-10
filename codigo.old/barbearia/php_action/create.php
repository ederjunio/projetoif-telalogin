<?php
	//Sessão
	session_start();

	//Conexão
	require_once 'db_connect.php';
	
	if(isset($_POST['btn-cadastrar'])):
		$nome_usuario = mysqli_escape_string($connect,$_POST['nome_usuario']);
		$senha = mysqli_escape_string($connect,$_POST['senha']);
		$login = mysqli_escape_string($connect,$_POST['login']);
		$data_cadastro = mysqli_escape_string($connect,$_POST['data_cadastro']);
		$email = mysqli_escape_string($connect,$_POST['email']);
		$cpf = mysqli_escape_string($connect,$_POST['cpf']);
		$telefone = mysqli_escape_string($connect,$_POST['telefone']);

		$sql = "INSERT INTO usuario (nome_usuario,senha,login,data_cadastro,email,cpf,telefone) VALUES ('$nome_usuario','$senha','$login','$data_cadastro','$email','$cpf','$telefone')";

		if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
			header('Location: ../listar.php');
		else:
			$_SESSION['mensagem'] = "Erro ao cadastrar!";
			header('Location: ../listar.php');
		endif;

	endif;

?>