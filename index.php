
</<?php


    //Conexão
    include_once 'php_action/db_connect.php';

    //Header
    include_once 'includes/header.php';

    //Mensagens
    include_once 'includes/message.php';

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
                        
                        <td> <a href="" class="btn-floating orange"> <i class="material-icons">edit</i> </a></td>
                        <td> <a href="" class="btn-floating red"> <i class="material-icons">delete</i> </a></td>
                    </tr>

                    <?php
                        endwhile;
                    ?>


                </tbody>
            </table>
            <br>
            <a href="adicionar.php" class="btn">Adicionar Cliente</a>
        </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>