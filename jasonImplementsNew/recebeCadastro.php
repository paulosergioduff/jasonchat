<?php
session_start();
require_once "installJason.php";
$crud        = crud::getInstance(Conexao::getInstanceMultiton('jasonBD'));
$recebeLogin = htmlspecialchars($_POST['login']);
$login       = addslashes($recebeLogin);
$senha       = hash('sha512', $_POST['senha']);
include "padrao.php";
function cadastraMySQLi($novoUsuario, $novaSenha)
{
				$conn = mysqli_connect("$sevidorPadrao", "$usuarioPadrao", "$senhaPadrao", "$bancoPadrao");
				// Check connection
				if (preg_match("/^([a-zA-Z0-9]+)$/", $novoUsuario)) { // Verifica se tem caracteres estranhos no cadastro
								if (!$conn) {
												die("Connection failed: " . mysqli_connect_error());
								}
								$sql = "INSERT INTO membros (administrador_usuario, administrador_senha)
VALUES ( '$novoUsuario', '$novaSenha')";
								if (mysqli_query($conn, $sql)) {
												header("Location: home.php?mensagem=Cadastro%20realizado%20com%20sucesso!%20Faça%20login");
								} else {
												echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}
								mysqli_close($conn);
				} else {
								echo '<br>Cadastro não realizado! O nome de login tem caracteres inválidos. Use somente letras e números';
								header("Location: cadastro.php?mensagem=Cadastro%20não%20realizado!%20O%20nome%20de%20login%20tem%20caracteres%20inválidos.%20Use%20somente%20letras%20e%20números");
				}
}
$campo    = $login;
$coluna   = 'administrador_usuario';
$servidor = "$sevidorPadrao";
$usuario  = "$usuarioPadrao";
$senhaDB  = "$senhaPadrao";
$dbname   = "$bancoPadrao";
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senhaDB, $dbname) or die(mysqli_error($conn));
;
$linguagemId       = 'membros';
$pesquisar         = $login;
$result_codigos    = "SELECT * FROM $linguagemId WHERE administrador_usuario LIKE '$pesquisar' LIMIT 5 ";
$resultado_codigos = mysqli_query($conn, $result_codigos);
while ($rows_codigos = mysqli_fetch_array($resultado_codigos)) {
				$itensEncontrados++;
}
if ($itensEncontrados > 0) {
				# code...
				echo "Já existe alguém cadastrado com esse login";
				header("Location: cadastro.php?mensagem=Já%20existe%20alguém%20cadastrado%20com%20esse%20login");
} else {
				cadastraMySQLi($login, $senha);
}
?>
<html lang="pt-br">
	<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="utf-8"/>
		<title>Dashboard</title> 
		<meta name="author" content="Paulo C Teixeira">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>

	<nav></nav>

	<br />

	<a href="dashboard.php?logout=confirmar">Sair</a>






	</body>
</html>
