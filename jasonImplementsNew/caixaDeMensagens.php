<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
  <title></title>
  <meta charset="utf-8">
  <style type="text/css">
    #container{
      position: absolute;
      top: 7.5%;
    }
  </style>
  <script type="text/javascript">
    function recebeReact($parametro, $recebe, $autor, $idPost)
      {
        var idAlvo = "react"+$parametro;
        var recebeData = $recebe;
        document.getElementById(idAlvo).innerHTML = '<i><a href="permalink.php?tipo=feed&id='+$idPost+'">Pegar link</a></i> - <i><a href="adcionaContato.php?mensagem='+$autor+'&autor='+$autor+'&acao=contatos">Adicionar '+$autor+' como contato</a></i>';
    

      }

      function dadosDoProprioPost($parametro, $recebe, $autor, $idPost)
      {
        var idAlvo = "react"+$parametro;
        var recebeData = $recebe;
        document.getElementById(idAlvo).innerHTML = '<i>postado em '+recebeData+'</i> - <i><a href="permalink.php?tipo=feed&id='+$idPost+'">Pegar link</a></i> ';
    

      }
  </script>
</head>
<body>

<a href="#fim" style="color: black; left: 2%; top: 2%; position: absolute;  z-index: 9999;">ir para fim</a>

<div id="container">

<?php

header('Content-type: text/html; charset=UTF-8');

require_once('installJason.php');
include "padrao.php";

//session_start();

//require_once "class/Conexao.class.php";
require_once "class/Usuario.class.php";

if (isset($_GET['logout'])):
  if ($_GET['logout'] == 'confirmar'):
    Login::deslogar();
  endif;
endif;

if (isset($_SESSION['logado'])):
  $crud = crud::getInstance(Conexao::getInstanceMultiton("$bancoPadrao"));
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);
  $concatena = $ano . "-" . $mes; // . "-" . $dia;
  
//echo $concatena;
  $campo  = $concatena;
  $coluna = 'data1';
  $roleta = date(s); // adciona um número de segundo a imagem forçando atualização
  $dados = $crud->selecionaCampo('feed');
  if ($controleSelect != false) {
    foreach ($dados as $reg):
      $camposBuscado   = $reg->$coluna;
      $mensagemUsuario = $reg->varchar3;
      $varchar2        = $reg->varchar2;
      $idPost          = $reg->id;
      $arquivo         = "fotos/$varchar2" . '.jpg';
      $data            = $reg->data1;
      $resultado = substr_count($camposBuscado, $campo);
      $bloqueado = $_SESSION['administrador'] . $varchar2;
      $usuarioAtual = $_SESSION['administrador'];

     verificaBloqueio($bloqueado, 'varchar2', 'blacklist', $resultado, $usuarioAtual, $varchar2, $idPost, $data, $roleta, $mensagemUsuario, $arquivo);
     

           
        

    endforeach;
    ;
    echo "<div id='outroUsuario'><a  name='fim'></a><i>Fim das mensagens</i></div>";
    
    
  }
  
  include "include/recebeMensagem.php";
?>
</div>

</div>

  




<?php
else:
  echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
endif;
?>