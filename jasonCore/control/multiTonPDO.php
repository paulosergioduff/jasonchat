<?php

Class multiConexao
{
    private $server;
    private $nomeBanco;
    private $usuario;
    private $senha;
    
    public function getConectaDB()
    {
        return $this->server;
        return $this->nomeBanco;
        return $this->usuario;
        return $this->senha;
        
        try {
            
            $conn     = new PDO('mysql:host='.$server.';dbname='.$nomeBanco.'', $usuario, $senha);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function setConfiguraDB($server, $nomeBanco, $usuario, $senha)
    	{
    		$this->server = $server ;
    		$this->nomeBanco = $nomeBanco ;
    		$this->usuario = $usuario ;
    		$this->senha = $senha ;
    	}
}

$server = 'localhost';

$campos = "'localhost', 'abstrato', 'root', ''";

$conecta1= new multiConexao();
$conecta1->setConfiguraDB('localhost', 'abstrato', 'root', '');
$conecta1->getConectaDB();


$conecta2= new multiConexao();
$conecta2->setConfiguraDB('localhost', 'abstrato', 'root', '');
$conecta2->getConectaDB();


?>