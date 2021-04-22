<?php
	//Conexão
    include_once 'php_action/db_connect.php';
    //Header
    include_once 'includes/header.php';
    //Mensagens
    include_once 'includes/message.php';

    /*
    //Verificar se tem sessão aberta
    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;
    */

    //Buscando os dados para exibição
    /*
    $user = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuario WERE user = '$user'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

    mysqli_close($connect);
	*/



?>

 	<center>
 	<h1> Seja bem vindo!</h1>
	<h4>Selecione abaixo a melhor opção</h4>
	<br/><br/>
	<button type="submit" name="btn-agendar" class="btn yellow col s20 push-m3 "><a href="agendamento.php">Clique para agendar</a></button>
	<br/><br/>
	<button type="submit" name="btn-sair" class="btn yellow col s20 push-m3 "><a href="logout.php">Clique para sair!</a></button>
	</center>