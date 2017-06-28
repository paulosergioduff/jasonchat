<?php 

// Agredecimentos ao usuário lucasmartins.com.br
// Fonte: https://forum.imasters.com.br/topic/224701-caminho-absoluto-e-caminho-local/

define("PATHINSTALL", "jasonCore");

define("CONTROL", "control");
define("MODEL", "model");
define("VIEW", "view");


require_once($_SERVER['DOCUMENT_ROOT']."/".PATHINSTALL."/".CONTROL."/config.php");
require_once($_SERVER['DOCUMENT_ROOT']."/".PATHINSTALL."/".CONTROL."/controleCentral.php");
require_once($_SERVER['DOCUMENT_ROOT']."/".PATHINSTALL."/".CONTROL."/validaEntradas.php");
require_once($_SERVER['DOCUMENT_ROOT']."/".PATHINSTALL."/".MODEL."/crud.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/".PATHINSTALL."/".VIEW."/viewsRetornos.php");


?>