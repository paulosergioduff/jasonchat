<!DOCTYPE html>
<html>
<meta charset="utf-8">
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
  <script type="text/javascript">
    function recebeReact($parametro, $recebe, $autor)
      {
        var idAlvo = "react"+$parametro;
        var recebeData = $recebe;
        document.getElementById(idAlvo).innerHTML = '<i>postado em '+recebeData+' - <a href="adcionaContato.php?mensagem='+$autor+'&autor='+$autor+'">Adicionar '+$autor+' como contato</a></i>';
    

      }

      function dadosDoProprioPost($parametro, $recebe, $autor)
      {
        var idAlvo = "react"+$parametro;
        var recebeData = $recebe;
        document.getElementById(idAlvo).innerHTML = '<i>postado em '+recebeData+'</i>';
    

      }
  </script>
</head>
<body onLoad="document.envioMP.mensagem.focus();">
<div id="container">
<a href="#fim" style="color: black">ir para fim</a>




<?php 

require_once('installJason.php');

  //session_start(); 

  //require_once "class/Conexao.class.php";
  require_once "class/Usuario.class.php";
  include "padrao.php";

  if(isset($_GET['logout'])):
    if($_GET['logout'] == 'confirmar'):
      Login::deslogar();
    endif;
  endif; 

  if(isset($_SESSION['logado'])):

####################### PREPARA PARA ENVIO DE MENSAGEM CASO APROVADA PELO SISTEMA ############
require_once "socialCore/postPrivate.class.php";
$postagem = new JasonPostPrivate();
$protocolo = 'https';
$servidorDeOrigem = "$bancoPadrao";
$servidorDeDestino = 'menssage';
$tipo = 'multitonPDO';
$autor = $_SESSION['administrador'];
$recebeMenssagem =htmlspecialchars($_POST['mp']);
$menssagem =  addslashes($recebeMenssagem);
$natureza = $_SESSION['administrador'] . $_GET['conversa'];;
$destinatario = $_GET['conversa'];
include_once "padrao.phbp"; $crud = crud::getInstance(Conexao::getInstanceMultiton("$bancoPadrao"));
####################### PREPARA PARA ENVIO DE MENSAGEM CASO APROVADA PELO SISTEMA ############





    ############## VERIFICA ÚLTIMO POST ENVIADO ##############################
session_start();
    $ultimaMensagem = $_SESSION['ultimaMensagem'];
$mp = $_POST['mp'];


  //echo "<div style='z-index: 9999;'>cache: $ultimaMensagem";
  //echo "<div style='z-index: 9999;'> última: $mp";
  if ($ultimaMensagem == $mp) {
    //echo "<br>Alerta</div>";
  }
  else{
    if (!empty($mp)) {
      $postagem->send_Menssage($protocolo, $servidorDeOrigem, $servidorDeDestino, $destinatario, $tipo, $natureza, $autor, $menssagem);
        //echo '<script>alert("Mensagem enviada");</script>';
    }
  }
    
 

$_SESSION['ultimaMensagem'] = $mp = $_POST['mp'];
############## VERIFICA ÚLTIMO POST ENVIADO ##############################



$dia = date(d);
$mes = date(m);
$ano = date(Y);

$concatena = $ano . "-" . $mes;// . "-" . $dia;

//echo $concatena;

$campo1 = $_SESSION['administrador'] . $_GET['conversa']; 
$campo2 = $_GET['conversa'] . $_SESSION['administrador']; 
$coluna = 'varchar5';




$dados = $crud->selecionaCampo('menssage');
if ($controleSelect != false) {
                foreach ($dados as $reg):


                                
                              $camposBuscado = $reg->$coluna;
                            	$mensagemUsuario = $reg->varchar3;
                            	$varchar2 = $reg->varchar2;
                              $varchar3 = $reg->varchar3;
                              $varchar4 = $reg->varchar4;
                              $origem = $reg->varchar5;
                            	$arquivo = "fotos/$varchar2".'.jpg';
                              $data = $reg->data1;
                              $compara1 = $_SESSION['administrador'].$_GET['conversa'];
                              $compara2 = $_GET['conversa'].$_SESSION['administrador'];
                              $roleta = date(s);
                              $avatar = "fotos/$varchar2.jpg";

                              // echo "<br>".$compara1;                           
                            if ($origem == $compara1) {
                                 echo "<div id='caixaDeMensagem'><img src='fotos/$varchar2.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>$varchar3</div><br>";
                               } 
                            if ($origem == $compara2) {
                                 echo "<div id='outroUsuario'><img src='fotos/$varchar2.jpg?$roleta' width='40px' height='40px' id='fotoDePerfil'>$varchar3</div><br>";
                               } 
                            
                endforeach;
               ;
               echo "<div id='outroUsuario'><a  name='fim'></a><i>Fim das mensagens</i></div>"   ; 


}

include "include/recebeMensagem.php";
?>
</div>

</div>

	
<form action="#fim" method="POST" style="position: fixed; bottom: 0%; left: 5%; ;" name="envioMP">
<textarea cols="80"  id="mensagem" name="mp"></textarea><input type="submit" value="→" id="enviarBotao">
 </form>

<script type="text/javascript">
     function tecla(){
    // window.alert("O código da tecla pressionada foi: " + event.keyCode); //Para teste de retorno
    if (event.keyCode == '13') {
      document.envioMP.submit() ;
    }
  }
  
  document.body.onkeypress = tecla;

        tecla();
</script>

<?php
	else:
		echo "Voce nao tem permissao de acesso. <a href=\"home.php\">Clique aqui para voltar</a>";
	endif;
?>