<?php
	session_start();

	require_once "class/Conexao.class.php";
	require_once "class/Usuario.class.php";

	if (isset($_POST['ok'])):

		$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
		$hashSenha = hash('sha512', $senha);

		$l = new Login;
		$l->setLogin($login);
		$l->setSenha($hashSenha);

		if($l->logar()):
			header("Location: dashboard.php");
		else:
			$erro = "Erro ao logar";
		endif;
	endif;


	if(isset($_SESSION['logado'])):
		header("Location: dashboard.php");
	else:
?>
<html lang="pt-br">
	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="utf-8"/>
		<title>Titulo</title>
		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css"> 
		<link rel="stylesheet" type="text/css" href="css/socialNetwork.css"> 
	</head>
	<body>

		<div id="login">
			<form action="" method="POST" class="formulario">
				<div class="login">Login</div>
				<input type="text" name="login">
				<div class="senha">Senha</div>
				<input type="password" name="senha">
				<input type="submit" name="ok" value="Logar"><p><p>

<?php error_reporting(0);

$mensagem = $_GET['mensagem'];

if (!empty($mensagem)) {
	echo "<center>
				<div id='doc'>$mensagem</div>
				</center>";
}
	else{
		echo '<center>
				<div id="doc"><a href="cadastro.php" style="text-decoration:none">Ir para cadastro</a></div>
				</center>';
	}

?>
			</form></div>
			
			<?php echo isset($erro) ? $erro : ''; ?>
				


<?php
	endif;
?>

	</body>
</html>
