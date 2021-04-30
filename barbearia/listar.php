</<?php

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

    //ESSE NÃO É AQUI - PRECISA VER CERTINHO ONDE COLOCAR
    //Verificar sobre fechar a conexão com o banco de dados.
        //mysqli_close($connect);

?>

<div class="row">
        <div class="col s12 m6 push-m3">
            
            <h3 class="light">Clientes</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID Usuário: </th>
                        <th>Nome: </th>
                        <th>Senha: </th>
                        <th>Login: </th>
                        <th>Data de Cadastro: </th>
                        <th>E-mail: </th>
                        <th>CPF: </th>
                        <th>Telefone: </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php
                            $sql = "SELECT * FROM usuario";
                            $resultado = mysqli_query($connect,$sql);

                            if(mysqli_num_rows($resultado) > 0):

                            while($dados = mysqli_fetch_array($resultado)):

                        ?>

                        <td><?php echo $dados['idUsuario'] ?></td>
                        <td><?php echo $dados['nome_usuario'] ?></td>
                        <td><?php echo $dados['senha'] ?></td>
                        <td><?php echo $dados['login'] ?></td>
                        <td><?php echo $dados['data_cadastro'] ?></td>
                        <td><?php echo $dados['email'] ?></td>
                        <td><?php echo $dados['cpf'] ?></td>
                        <td><?php echo $dados['telefone'] ?></td>
                        
                        <td> <a href="editar.php?idUsuario=<?php echo $dados['idUsuario']; ?>" class="btn-floating orange"> <i class="material-icons" >edit</i> </a></td>

                        <td> <a href="#modal<?php echo $dados['idUsuario'] ?>" class="btn-floating red modal-trigger"> <i class="material-icons">delete</i> </a></td>

                        <!-- Modal Structure -->
                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['idUsuario'] ?>" class="modal">
                        <div class="modal-content">
                            <h4>Atenção!</h4>
                            <p>Deseja mesmo apagar o registro?</p>
                        </div>
                        <div class="modal-footer">

                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $dados['idUsuario'] ?>">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat orange col s20 push-m3">Cancelar</a>
                                <button type="submit" name="btn-deletar" class="btn red col s20 push-m3">Excluir</button>
                            </form>

                        </div>
                      </div>

                    </tr>

                    <?php
                        endwhile;
                        else: ?>

                            <tr>
                                <td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td>
                            </tr>
                        <?php
                        endif;
                    ?>
                </tbody>
            </table>
            <br>
            <a href="adicionar.php" class="btn">Adicionar Cliente</a>
            <a href="listar.php" class="btn green">Listar Clientes</a>
        </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>