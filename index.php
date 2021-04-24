<?php
	//Conexão
    include_once 'php_action/db_connect.php';
    //Header
    include_once 'includes/header.php';
    //Mensagens
    include_once 'includes/message.php';
	
	if(isset($_POST['btn-entrar'])):
		$erros = array();
		$login = mysqli_escape_string($connect,$_POST['login']);
		$senha = mysqli_escape_string($connect,$_POST['senha']);

		if(empty($login) or empty($senha)):
			$erros[] = "<p>Os campos login e senha não podem estar vazios!</p>";
		else:
			$sql = "SELECT login FROM usuario WHERE login = '$login'";
			$resultado = mysqli_query($connect,$sql);

			if(mysqli_num_rows($resultado) > 0):
				//Verificar sobre a criptografia da senha que não está feita no banco de dados.
				//$senha = md5($senha);
				$sql = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
				$resultado = mysqli_query($connect,$sql);

					if(mysqli_num_rows($resultado) == 1):
						$dados = mysqli_fetch_array($resultado);
						//Verificar sobre fechar a conexão com o banco de dados.
        				//mysqli_close($connect);
						$_SESSION['logado'] = true;
						$_SESSION['id_usuario'] = $dados['$idUsuario'];
						//Aqui é o redirecionamento que precisa ser corrigido quando estiver todo o projeto montado.
						header('Location: home.php');

					else:
						$erros[] = "<p>Usuário e senha não conferem!</p>";
					endif;

			else:
				$erros[] = "<p>Usuário não cadastrado!!!</p>";
			endif;

		endif;
	endif;	

?>

<html>
<head>
	<title>Login Barbearia</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
	<h3>Sistema Barbearia Inteligente</h3>
	
	<?php
		if(!empty($erros)):
			foreach ($erros as $erro):
				echo $erro;
			endforeach;
		endif;

	?>
	
	<hr>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		Login: <input type="text" name="login"><br>
		Senha: <input type="password" name="senha"><br>
		
	<button type="submit" name="btn-entrar" class="btn green col s20 push-m3">Entrar</button>

	</form>
	<br/><br/>
	<hr>
	
	<br/><br/>
	<h4>Para fazer um cadastro, favor clicar no link abaixo:</h4>
	<button type="submit" name="btn-adicionar" class="btn yellow col s20 push-m3 "><a href="adicionar.php">Fazer cadastro.</a></button>
	</center>
</body>
</html>