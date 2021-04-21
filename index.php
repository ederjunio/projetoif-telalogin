
</<?php 
    //Header
    include_once 'includes/header.php';
?>

<div class="row">
        <div class="col s12 m6 push-m3 ">
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
                        <td>01</td>
                        <td>Eder</td>
                        <td>********</td>
                        <td>xavier</td>
                        <td>21/04/2021</td>
                        <td>eder.xavier.ti@gmail.com</td>
                        <td>040690756-07</td>
                        <td>35991001121</td>
                        <td> <a href="" class="btn-floating orange"> <i class="material-icons">edit</i> </a></td>
                        <td> <a href="" class="btn-floating red"> <i class="material-icons">delete</i> </a></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="" class="btn">Adicionar Cliente</a>
        </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>