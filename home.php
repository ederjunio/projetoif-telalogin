<?php
//conexão
require_once 'php_action/db_connect.php';
include_once 'includes/header.php';

//sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: login.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>

<head>
    <title>Página Restrita</title>
    <meta charset="utf-8">
</head>

<body class="teal brown darken-4 white-text">
    
	<div class="parallax-container">
        <div class="parallax"><img src="imagens/ambiente.jpg"></div>
    </div>

    <center>
    	<h1>Olá, <?php echo $dados['nome_usuario']; ?></h1>
    	<br/><br/>
    	<h4>Selecione abaixo a melhor opção</h4>
    	<br/><br/>
    	<button type="submit" name="btn-agendar" class="btn black"><a class="white-text" href="agendamento.php">Clique para agendar</a></button>
    	<br/><br/>
    	<button type="submit" name="btn-agendar" class="btn black"><a class="white-text" href="editar.php">Editar seu cadastro</a></button>
    	<br/><br/>
    	<button type="submit" name="btn-sair" class="btn black"><a class="white-text" href="logout.php">Clique para sair!</a></button>
    	<br/><br/>
    </center>

    <div class="parallax-container">
    	<div class="parallax"><img src="imagens/ambiente.jpg"></div>
	</div>

</body>

</html>

<?php
    include_once 'includes/footer.php'
?>