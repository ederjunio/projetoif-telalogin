<?php
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';


session_start();


if(isset($_GET['idUsuario'])):
    $idUsuario = mysqli_escape_string($connect, $_GET['idUsuario']);
    $sql = "SELECT * FROM usuario WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);


endif;
?>

<div class="parallax-container">
    <div class="parallax"><img src="imagens/logo.jpg"></div>
</div>

<center>
<div class="section card-panel teal brown darken-4">
    <div class="row container">
        <h2 class="header white-text center">Editar Cadastro de Usuário Vip</h2>
        <div class="row">
            <div class="col s12 m8 push-m2">

                <form action="php_action/update.php" method="POST">

                    <input type="hidden" name="idUsuario" value="<?php echo $dados['idUsuario']; ?>">

                    <div class="input-field col s12">
                        <input class="white-text" type="text" name="nome_usuario" id="nome_usuario"
                            value="<?php echo $dados['nome_usuario']; ?>">
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

                    <button type="submit" name="btn-editar" class="btn black">Atualizar</button>
                    <br/>

                    <br/>
                        <button type="submit" name="btn-voltar" class="btn black"><a class="white-text" href="home.php">Voltar para a tela inicial</a></button>
                    <br/>

                    <br/>
                        <button type="submit" name="btn-sair" class="btn black"><a class="white-text" href="logout.php">Clique para sair!</a></button>
                    <br/>
                </form>
            </div>
        </div>
    </div>
</div>
</center>
<div class="parallax-container">
    <div class="parallax"><img src="imagens/ambiente.jpg"></div>
</div>


<?php
    include_once 'includes/footer.php'
?>