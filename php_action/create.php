<?php
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
			header('Location: ../index.php?sucesso');
		else:
			header('Location: ../index.php?erro');
		endif;

	endif;

?>