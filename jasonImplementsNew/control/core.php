<?php error_reporting(0);
// Colocar isso acima "E_ALL ^ E_WARNING" e ativar esta linha Lini_set(“display_errors”, 1 );
date_default_timezone_set("America/Sao_Paulo");
$pegasinal = $_GET['sinal'];

// DESENVOLVIMENTO
$devmod    = 0;
$on        = 1;



// DESENVOLVIMENTO

$server1   = 'http://paulosergioduff.atspace.cc' ;
$server2   = 'http://paulosergioduff.16mb.com';
$server3   = 'http://localhost/app';
$server    = "$server3";
$ip = getenv("REMOTE_ADDR");
$aspas     = '"';
$user      = $_GET['user'];
$menssagev  = htmlspecialchars($_GET['menssage']);
$dia       = date("d");
$mes       = date("m");
$ano       = date("y");
$hora      = date("H");
$minuto    = date("i");
$segundo   = date("s");
$protocolo = $dia . $mes . $ano . ".json";
$user      = $_GET['user'];
$cabecalho = '{"usuarios":[';
$menssagex = base64_encode($menssagev);
$hostnamex = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$hostnamey = gethostbyaddr($_SERVER['REMOTE_ADDR']) . $ip;
$postid  = $_COOKIE['id'];
$hostname = sha1($hostnamex);
 $contador = strlen("$server/$protocolo");
$menssage = "
{
$aspas" . "nome" . "$aspas : $aspas$user$aspas,
$aspas" . "mensagem" . "$aspas: $aspas$menssagex$aspas
},
";

$menssagenew = "
{
$aspas" . "nome" . "$aspas : $aspas$user$aspas,
$aspas" . "mensagem" . "$aspas: $aspas$menssagex$aspas
},
";
?>