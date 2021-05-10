<?php
	//Conexão com o Banco de Dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "salao_inteligente";

	$connect = mysqli_connect($servername,$username,$password,$db_name);
	mysqli_set_charset($connect, "utf-8");
	
	if(mysqli_connect_error()):
		echo "Erro ao conectar no banco de dados.".mysqli_connect_error();
	endif;

?>