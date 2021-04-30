
</<?php 
    //Conexão
    include_once 'php_action/db_connect.php';

    //Header
    include_once 'includes/header.php';

    /*
    //Verificar se tem sessão aberta
    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;
    */


    //Select
    if(isset($_GET['idUsuario'])):
        $idUsuario = mysqli_escape_string($connect,$_GET['idUsuario']);

        $sql = "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
        $resultado = mysqli_query($connect,$sql);
        $dados = mysqli_fetch_array($resultado);

        //Verificar sobre fechar a conexão com o banco de dados.
        //mysqli_close($connect);
    endif;
?>

<div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Alterar Cliente</h3>
            <form action="php_action/update.php" method="POST">
                    <input type="hidden" name="idUsuario" value="<?php echo $dados['idUsuario']; ?>">

                    <div class="input-field col s12">
                        <input type="text" name="nome_usuario" id="nome_usuario" value="<?php echo $dados['nome_usuario'] ?>">
                        <label for="nome_usuario">Nome</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="password" name="senha" id="senha" value="<?php echo $dados['senha'] ?>">
                        <label for="senha">Senha</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="login" id="login" value="<?php echo $dados['login'] ?>">
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="date" name="data_cadastro" id="data_cadastro" value="<?php echo $dados['data_cadastro'] ?>">
                        <label for="data_cadastro">Data de Cadastro</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="email" id="email" value="<?php echo $dados['email'] ?>">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf'] ?>">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'] ?>">
                        <label for="telefone">Telefone</label>
                    </div>
                    <button type="submit" name="btn-editar" class="btn">Alterar</button>
                    <a href="listar.php" class="btn green">Listar Clientes</a>
            </form>            
        </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>