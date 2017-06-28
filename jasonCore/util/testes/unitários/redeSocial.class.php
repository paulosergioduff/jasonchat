<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estiloRedeSocial.css">
<head>
	<title></title>
</head>
<body>
<?php
interface RedeSocial
{
				public function cadastrar($nomeDeUsuario, $senha);
				public function compartilhar($titulo, $conteudo, $resumo);
				public function menssagemParticular($menssagem, $destino);
				public function bloquear($usuario, $motivo);
				public function comentar($comentario);
				public function resposta($resposta);
				public function positivar($avaliacao);
				public function negativar($avaliacao);
}
class AcaoRedeSocial implements RedeSocial
{
				public $titulo;
				public $conteudo;
				public $resumo;
				public function __construct()
				{
								echo "<hr>";
				}
				public function cadastrar($cadastrarNome, $cadastrarSenha)
				{
								echo "<br><div id='nomeDeUsuario'><img src='img/perfil.jpg' widh='45' height='45' id='fotoDePerfil'>$cadastrarNome</div>";
								// Faça algo com a senha
				}
				public function compartilhar($titulo, $conteudo, $resumo)
				{
								echo "<br><div id='titulo' class='ajusteGeral'>$titulo</div>";
								echo "<br><div id='conteudo' class='ajusteGeral'>$conteudo</div>";
								echo "<br><div id='resumo' class='ajusteGeral'>$resumo</div>";
				}
				public function menssagemParticular($menssagem, $destino)
				{
								echo "<br><div id='menssagemParticular' class='ajusteGeral'>$menssagem</div>";
								echo "<br><div id='destino' class='ajusteGeral'>$destino</div>";
				}
				public function bloquear($usuario, $motivo)
				{
								echo "<br><div id='' class='ajusteGeral'>$usuario</div>";
								echo "<br><div id='' class='ajusteGeral'>$motivo</div>";
				}
				public function comentar($comentario)
				{
				}
				public function resposta($resposta)
				{
					echo "<br><div id='resposta' >$resposta</div>";
				}
				public function positivar($avaliacao)
				{
				}
				public function negativar($avaliacao)
				{
				}
}
$redeSocial = new AcaoRedeSocial();
$redeSocial->cadastrar('Paulo Sérgio Duff', '12345');
$redeSocial->titulo   = "Minha Primeira postagem";
$redeSocial->conteudo = "Hoje testo minha classe PHP voltada para criação de rede sociais.
É possível fazer muitas coisas somente usando esta classe. Esta página testará também concepções visuais";
$redeSocial->resumo   = "Pequena demonstração de OOP para redeSocial";
$redeSocial->compartilhar($redeSocial->titulo, $redeSocial->conteudo, $redeSocial->resumo);
$resposta = "Legal fera!";
$redeSocial->resposta($resposta)
?>