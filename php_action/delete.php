<?php
	//Sessão
	session_start();

	//Conexão
	require_once 'db_connect.php';

	if(isset($_POST['btn-deletar'])):
		
		$idUsuario = mysqli_escape_string($connect,$_POST['idUsuario']);

		$sql = "DELETE FROM usuario WHERE idUsuario = '$idUsuario'";

		if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Deletado com sucesso!";
			header('Location: ../listar.php');
		else:
			$_SESSION['mensagem'] = "Erro ao deletar cadastro!";
			header('Location: ../listar.php');
		endif;
	endif;
?>