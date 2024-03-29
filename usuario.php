<?php
    include_once 'includes/header.php'
?>

<div class="parallax-container">
    <div class="parallax"><img src="imagens/logo.jpg"></div>
</div>
<div class="white-text center section card-panel teal brown darken-4">
    <div class="row container">
        <h5 class="header">Cadastro de Usuário Vip</h5>
        <div class="row">
            <div class="col s12 m8 push-m2">

                <form action="php_action/create.php" method="POST">

                    <div class="input-field col s12">
                        <input class="white-text" type="text" name="nome_usuario" id="nome_usuario">
                        <label for="nome_usuario">Nome Completo</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="password" name="senha" id="senha">
                        <label for="senha">Definir Senha</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="text" name="login" id="login">
                        <label for="login">Defina seu Login de Usuário</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="email" name="email" id="email">
                        <label for="email">Digite seu E-mail</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="number" name="cpf" id="cpf">
                        <label for="cpf">Digite Seu CPF</label>
                    </div>

                    <div class="input-field col s12">
                        <input class="white-text" type="tel" name="telefone" id="telefone" placeholder="Telefone">
                        <label for="telefone">Digite Seu Telefone para Contato com DDD</label>
                    </div>
                    <br>
                    <button style="width: 250px" type="submit" name="btn-cadastrar" class="btn black"> Cadastrar </button>
                    <br><br>
                    <a style="width: 250px" href="index.php" type="submit" class="btn black"> Login </a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="imagens/ambiente.jpg"></div>
</div>


<?php
    include_once 'includes/footer.php'
?>