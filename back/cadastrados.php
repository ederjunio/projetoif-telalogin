
</<?php


    //Conexão
    include_once '../php_action/db_connect.php';

    //Header
    include_once '../includes/header.php';

    //Mensagens
    //include_once 'includes/message.php';

?>

<div class="row section card-panel teal brown darken-4 white-text">
        <div class="col s12">
            <h3 class="light center">Clientes</h3>
            <table class="striped">
                <thead>
                    <tr class="white-text">
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

                <tbody class="white-text">
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
                        
                        <td> <a href="../editar.php?idUsuario=<?php echo $dados['idUsuario']; ?>" class="btn-floating orange"> <i class="material-icons" >edit</i> </a></td>
                        
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

            <center>
            <br>
            <h5 class="white-text">Para se cadastrar clique no link abaixo:</h5>
            <a style="width: 250px" href="../usuario.php" class="btn black">Adicionar Cliente</a>

             <br>
             <br>
                
                <button style="width: 250px" type="submit" name="btn-voltar" class="btn black"><a class="white-text" href="../home.php">Voltar</a></button>

            <br/><br/>

            </center>
        </div>
</div>

<?php
    //Footer
    include_once '../includes/footer.php';
?>