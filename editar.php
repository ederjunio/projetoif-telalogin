<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';

//sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

if(isset($_GET['idUsuario'])):
    $idUsuario = mysqli_escape_string($connect, $_GET['idUsuario']);
    $sql = "SELECT * FROM usuario WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="parallax-container">
    <div class="parallax"><img src="imagens/barber-room.jpg"></div>
</div>
<div class="white-text section card-panel teal brown darken-4">
    <div class="row container">
        <h5 class="center header">Editar Cadastro de Usuário Vip</h5>
        <div class="row">
            <div class="col s12 m8 push-m2">

                <form action="php_action/update.php" method="POST">

                    <input type="hidden" name="idUsuario" value="<?php echo $dados['idUsuario'];?>">

                    <div class="white-text input-field col s12">
                        <input class="white-text" type="text" name="nome_usuario" id="nome_usuario"
                            value="<?php echo $dados['nome_usuario'];?>">
                        <label for="nome_usuario">Nome Completo</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="password" name="senha" id="senha" required>
                        <label for="senha">Definir Senha</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="text" name="login" id="login" value="<?php echo $dados['login'];?>">
                        <label for="login">Defina seu Login de Usuário</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="email" name="email" id="email" value="<?php echo $dados['email'];?>">
                        <label for="email">Digite seu E-mail</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf'];?>">
                        <label for="cpf">Digite Seu CPF</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="tel" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>">
                        <label for="telefone">Digite Seu Telefone para Contato com DDD</label>
                    </div>
                    <center>
                    <br><br>
                        <button style="width: 250px" type="submit" name="btn-editar" class="center btn black">Atualizar Cadastro</button>
                    <br>
                    <br>
                        <button style="width: 250px" type="submit" name="btn-sair" class="center btn black"><a class="white-text" href="home.php">Voltar</a></button>
                    <br><br>
                        <a href="index.php" type="submit" class="center btn black" style="width: 250px">Novo Login</a>
                    <br /><br />
                        <button style="width: 250px" type="submit" name="btn-sair" class="btn grey"><a class="white-text"
                                href="logout.php">Logout</a></button>
                        <br /><br />
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="imagens/maquina.jpg"></div>
</div>

<?php
    include_once 'includes/footer.php'
?>