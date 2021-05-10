<?php
//conexão
require_once 'php_action/db_connect.php';
include_once 'includes/header.php';

//sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>


<body class="teal brown darken-4 white-text">
    
	<div class="parallax-container">
        <div class="parallax"><img src="imagens/ambiente.jpg"></div>
    </div>

    <center>
    	<h4>Olá, <?php echo $dados['nome_usuario']; ?></h4>
    	
    	<h5>Selecione abaixo a melhor opção:</h5>
    	<br/><br/>
    	<button type="submit" name="btn-agendar" class="btn black"><a class="white-text" href="agendamento.php">Clique para agendar</a></button>
    	<br/><br/>
    	<button type="submit" name="btn-editar" class="btn black"><a class="white-text" href="editar.php?idUsuario=<?php echo $dados['idUsuario']; ?>">Editar seu cadastro</a></button>
        <br /><br />
    	<br/><br/>
    	<button type="submit" name="btn-sair" class="btn black"><a class="white-text" href="logout.php">Clique para sair!</a></button>
    	<br/><br/>
    </center>

    <div class="parallax-container">
    	<div class="parallax"><img src="imagens/barber.jpg"></div>
	</div>

</body>

</html>

<?php
    include_once 'includes/footer.php'
?>