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

<body>

    <center>
    <div class="parallax-container">
        <div class="parallax"><img src="imagens/barber.jpg"></div>
    </div>

    <div class="section card-panel teal brown darken-4">

        <div class="row container">
            <h2 class="header">
                <h4 class="white-text">Olá,
                    <?php echo $dados['nome_usuario']; ?>.
                    <div class=""></div>
                </h4>
            </h2>

            <h5 class="white-text center">Bem Vindo ao Salão Inteligente!</h5>
            <div class="row">
                <div class="col s12 m8 push-m2">


                    <div style="text-align:center;">

                        <h5 class="white-text">Selecione abaixo a melhor opção:</h5>
                        <br /><br />
                        <button style="width: 250px" type="submit" name="btn-agendar" class="btn black"><a class="white-text"
                                href="agendamento.php?idUsuario=<?php echo $dados['idUsuario']; ?>">Clique para agendar</a></button>
                        <br /><br />
                        <button style="width: 250px" type="submit" name="btn-historico" class="btn black"><a class="white-text"
                                href="historico.php?idUsuario=<?php echo $dados['idUsuario']; ?>"> Consultar Histórico</a></button>
                        <br /><br />
                        <button style="width: 250px" type="submit" name="btn-editar" class="btn black"><a class="white-text"
                                href="editar.php?idUsuario=<?php echo $dados['idUsuario']; ?>">Editar seu cadastro</a></button>
                        <br /><br />

                        <button style="width: 250px" type="submit" name="btn-sair" class="btn grey"><a class="white-text"
                                href="logout.php">Logout</a></button>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="imagens/barber-fer2.jpg"></div>
    </div>
    </center>
</body>

</html>

<?php
    include_once 'includes/footer.php'
?>