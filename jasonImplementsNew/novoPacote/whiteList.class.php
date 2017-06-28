<?php

require_once('jasonCore.class.php');



Class JasonWhiteList extends WhiteList
{
				public function add_contact($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage){
					if ($type == 'multitonPDO') {
                                                $add_contact = crud::getInstance(Conexao::getInstanceMultiton("$serverOrigin"));
												$add_contact->insert($autor, $menssage, $protocol, $target, $nat, 'whitelist', $serverDestiny);
                                }
				}
				public function subscribe_in_page($serverOrigin, $serverDestiny, $contact){
					echo "Implementado!";
				}
				public function add_list($serverOrigin, $serverDestiny, $list){
					echo "Implementado!";
				}


}

?>