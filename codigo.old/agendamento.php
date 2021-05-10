<?php
require_once 'php_action/db_connect.php';
include_once 'includes/header.php';

session_start();

if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<html>

<body>
    <div class="parallax-container">
        <div class="parallax"><img src="imagens/barber-fer.jpg"></div>
    </div>

    <div class="section card-panel teal brown darken-4">

        <div class="row container">
            <h2 class="header">
                <h4 class="white-text center">Olá, <?php echo $dados['nome_usuario']; ?> </h4>
            </h2>

            <div class="row">
                <div class="col s12 m8 push-m2">

                    <div style="text-align:center;">

                        <h4 class="white-text">Bora agendar?</h4>
                        <form action="php_action/agendar.php" method="POST">

                            <div class="input-field col s12">
                                <h5 class="white-text">Quando?</h5>
                                <input type="text" id="data" name="data" class="white-text datepicker" value="Escolher a data"
                                    style="text-align:center;">

                                <input type="text" name="horas" id="horas" class="white-text timepicker" value="Escolher o horario"style="text-align:center;">

                            </div>

                            <div class="white-text row">
                                <h5 class="white-text">O que vamos fazer?</h5>

                                <div class="white-text input-field col s12">
                                    <select class="white-text" multiple>
                                        <option class="white-text" value="" disabled selected >Selecionar serviços:</option>
                                        <option id="1" name="1" value="1">Corte</option>
                                        <option id="2" name="2" value="2">Barba</option>
                                        <option id="3" name="3" value="3">Sombrancelha</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <button agendar.php?idUsuario="<?php echo $dados['idUsuario']; ?>" class="btn waves-effect waves-large black accent-3" type="submit" name="btn-agendar" id="btn-agendar">Agendar
                                    <i class="large material-icons right">alarm_on</i>
                                </button>

                                <br/>

                            <br/>
                                <button type="submit" name="btn-historico" class="btn black"><a class="white-text" href="historico.php">Ver meu histórico</a></button>
                            <br/>

                            <br/>
                                <button type="submit" name="btn-voltar" class="btn black"><a class="white-text" href="home.php">Voltar para a tela inicial</a></button>
                            <br/>

                            <br/>
                                <button type="submit" name="btn-sair" class="btn black"><a class="white-text" href="logout.php">Clique para sair!</a></button>
                            <br/>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="imagens/ambiente.jpg"></div>
    </div>

</body>

</html>

<?php
    include_once 'includes/footer.php'
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);

});

// Or with jQuery

$(document).ready(function() {
    $('.datepicker').datepicker();

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, options);

});

// Or with jQuery

$(document).ready(function() {
    $('.timepicker').timepicker();
});
</script>