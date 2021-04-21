
</<?php 
    //Header
    include_once 'includes/header.php';
?>

<div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Novo Cliente</h3>
            <form>
                    <div class="input-field col s12">
                        <input type="text" name="nome_usuario" id="nome_usuario">                        
                        <label for="nome_usuario">Nome</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="password" name="senha" id="senha">                        
                        <label for="senha">Senha</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="login" id="login">                        
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="date" name="data_cadastro" id="data_cadastro">                        
                        <label for="data_cadastro">Data de Cadastro</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="email" id="email">                        
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="cpf" id="cpf">                        
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="telefone" id="telefone">                        
                        <label for="telefone">Idade</label>
                    </div>
                    <button type="submit" class="btn">Cadastrar</button>
                    <button type="submit" class="btn green">Listar Clientes</button>
            </form>            
        </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>