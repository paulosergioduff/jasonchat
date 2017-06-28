<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/socialNetwork.css">
  <title></title>
  <style type="text/css">
    #container{
      position: absolute;
      top: 7.5%;
    }
  </style>
 
</head>
<body>
<div id="container">
<a href="#fim" style="color: black">ir para fim</a>
<?php 

require_once('installJason.php');
include "padrao.php";

  //session_start();

  //require_once "class/Conexao.class.php";
  require_once "class/Usuario.class.php";

  if(isset($_GET['logout'])):
    if($_GET['logout'] == 'confirmar'):
      Login::deslogar();
    endif;
  endif; 

  if(isset($_SESSION['logado'])):

$crud = crud::getInstance(Conexao::getInstanceMultiton("$bancoPadrao"));
/*
$dia = date(d);
$mes = date(m);
$ano = date(Y);

$concatena = $ano . "-" . $mes;// . "-" . $dia;

//echo $concatena;

$campo = $concatena; 
$coluna = 'data1';

$roleta = date(s); // adciona um número de segundo a imagem forçando atualização*/


$dados = $crud->selecionaCampo('whitelist');
if ($controleSelect != false) {
                foreach ($dados as $reg):
                                
                              
                            	$varchar2 = $reg->varchar2;
                              $varchar3 = $reg->varchar3;
                              $contatos = $varchar3;
                              $logado = $_SESSION['administrador'];
                              $avatar = "fotos/$varchar3.jpg?$roleta";
                            	$data = $reg->data1;
                              
                              if ($logado == $varchar2) {
                                echo "<div style='color: black'><div id='caixaDeMensagem'><img src='$avatar' width='40px' height='40px' id='fotoDePerfil'>".$contatos."</a></div>
                                <a href='privado.php?conversa=$varchar3#fim' >Conversas</a> - <a href='removerContato.php?remove=$varchar3' >Remover contato</a> <br><a href='bloquearContato.php?block=$varchar3&acao=bloqueados' >Bloquear Contato</a> - <a href='desbloquearContato.php?unblock=$varchar3&acao=bloqueados' >Desbloquear Contato</a><p>
                                </div>";
                              }
                                                   
                            
                endforeach;
               ;
               echo "<div id='outroUsuario'><a  name='fim'></a><i>Fim da lista de contatos</i></div>"   ; 


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