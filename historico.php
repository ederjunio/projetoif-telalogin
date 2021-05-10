<?php

//Connection
include_once 'php_action/db_connect.php';

//Header
include_once 'includes/header.php';

//sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: login.php');
endif;

?>

<html>

<div class="parallax-container">
    <div class="parallax"><img src="imagens/navalha-tesoura.jpg"></div>
</div>

<div class="section card-panel teal brown darken-4">

    <div class="row container">


        <div class="row">
            <div class="col s12 m8 push-m2">

                <div style="text-align:center;">

                    <div class="row">
                        <div class="col s12 m14 push-m0.1">
                            <h3 class="ligth white-text"> Hitórico do Cliente </h3>
                            <table class="striped white-text">
                                <thead>
                                    <tr>
                                        <th id="table_title">ID da Solicitação</th>
                                        <th id="table_title">Data Solicitação</th>
                                        <th id="table_title">Data do Serviço</th>
                                        <th id="table_title">Serviço</th>
                                        <th id="table_title">Status</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                    if(isset($_GET['idUsuario'])):
                    $idUsuario = mysqli_escape_string($connect, $_GET['idUsuario']);
                    $sql = "SELECT * FROM historico_servicos LEFT JOIN agendar_servicos ON agendar_servicos.idagendar_servicos=historico_servicos.idagendar_servicos 
                    LEFT JOIN usuario ON usuario.idUsuario=agendar_servicos.usuario WHERE usuario.idUsuario= $idUsuario";
                    $resultado = mysqli_query($connect, $sql);
                    endif;

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                                    <tr>
                                        <td id="table_dados"> <?php echo $dados['idagendar_servicos']; ?> </td>
                                        <td id="table_dados">
                                            <?php echo date("d/m/Y", strtotime($dados['data_solicitacao'])); ?> </td>
                                        <td id="table_dados">
                                            <?php echo date("d/m/Y", strtotime($dados['data_servico'])); ?> </td>
                                        <td id="table_dados"> <?php echo $dados['servicos']; ?> </td>
                                        <td id="table_dados"> <?php echo $dados['status']; ?> </td>
                        </div>

                        </tr>

                        <?php 
                endwhile; 
                 else: ?>

                        <tr>
                            <td id="table_dados">-</td>
                            <td id="table_dados">-</td>
                            <td id="table_dados">-</td>
                            <td id="table_dados">-</td>
                            <td id="table_dados">-</td>
                            <td id="table_dados">-</td>
                        </tr>

                        <?php
                endif;
                ?>

                        </tbody>
                        </table>
                        <br>
                            <p class="white-text">Legenda:</p>
                            <p class="white-text">Serviços: 1-Corte 2-Barba 3-Corte e Barba</p>
                            <p class="white-text">Status: 0-Pendente 1-Finalizado</p>
                        <br>
                            <button style="width: 250px" type="submit" name="btn-sair" class="btn black"><a class="white-text" href="home.php">Voltar</a></button>
                        <br><br>
                        <button style="width: 250px" type="submit" name="btn-sair" class="btn grey"><a class="white-text"
                                href="logout.php">Logout</a></button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="imagens/barber-fer.jpg"></div>
</div>
</body>

</html>
<?php
//Footer
include_once 'includes/footer.php';
?>