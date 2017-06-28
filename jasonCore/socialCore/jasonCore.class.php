<?php
interface JasonCore
{
				/*public function dataAccess($protocol, $type, $server, $dataBase, $user, $password); // Conection to data base*/
				public function send_Menssage($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage);
				public function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage);
}
abstract Class WhiteList implements JasonCore
{
				private $contact;
				private $page;
				private $list;
				public abstract function add_contact($serverOrigin, $serverDestiny, $contact);
				public abstract function subscribe_in_page($serverOrigin, $serverDestiny, $contact);
				public abstract function add_list($serverOrigin, $serverDestiny, $list);
}
abstract Class Shared implements JasonCore
{
				public $permalink;
				public $feed;
				public $content;
				public abstract function Shared_content($content);
}
abstract Class BlackList implements JasonCore
{
				private $contact;
				private $page;
				private $list;
				public abstract function block_contact($serverOrigin, $serverDestiny, $contact);
				public abstract function block_page($serverOrigin, $serverDestiny, $contact);
				public abstract function block_list($serverOrigin, $serverDestiny, $contact);
}
abstract Class Post implements JasonCore
{
				public $type;
				public $value;
				public $author;
				public $destiny;
				public $typePost; // tipo e natureza do post
				public abstract function send_Menssage($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage);
				/*
				public abstract function post_feed($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage);
				public abstract function post_comment($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage);*/
				
}
abstract Class React implements JasonCore
{
				public $positive;
				public $negative;
				public $react_value;
				public abstract function react($react_value);
}
abstract Class PrivatePost implements JasonCore
{
				private $author;
				private $destiny;
				public abstract function send_Menssage($protocol, $serverOrigin, $serverDestiny, $target, $type, $nat, $autor, $menssage);
				public abstract function update_inbox($protocol, $serverOrigin, $serverDestiny, $type, $autor, $menssage);
				public abstract function status();
}


?>