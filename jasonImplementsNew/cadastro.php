<?php 

if (!empty($_GET['mensagem'])) {
	$mensagem = $_GET['mensagem'];
}

?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
<link rel="stylesheet" type="text/css" href="css/main.css"> 
	<title></title>
</head>
<body>
<CENTER>
<h1 id="doc">Cadastro</h1>


<div id="login">
			<form action="recebeCadastro.php" method="POST" class="formulario">
				<div class="login">Cadastre seu login</div>
				<input type="text" name="login">
				<div class="senha">Cadastre sua senha</div>
				<input type="password" name="senha">
				<input type="submit" name="ok" value="Cadastrar"><p><p>
<?php 



if (!empty($mensagem)) {
	echo "<h3>$mensagem</h3>";
}
	else{
		

		echo '<h3>Atenção: Para cadastrar nome de login, somente com letras ou números sem acentuação, ou caracteres especiais (?!@#$%¨&)!</h3>';
	}

?>
</div>
</CENTER>
</body>
</html>