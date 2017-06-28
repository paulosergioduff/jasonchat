<?php header ('Content-type: text/html; charset=UTF-8');
// Página para uso de testes (playground.php)
// includes necessárias para uso do exemplo
require_once "installJason.php";

$crud = crud::getInstance(Conexao::getInstanceMultiton('abstrato'));
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */

$campo = 'carlos@hotmail.com';
$coluna = 'varchar2';

$dados = $crud->selecionaCampo($dbTabela);
if ($controleSelect != false) {
                echo '{"' . "dados" . '"' . ":[";
                foreach ($dados as $reg):
                                
                                $filtro = $reg->$coluna;
                                	if ($filtro == $campo) {
                                		echo $id        = $reg->id . "<br>";
                                echo $varchar1  = $reg->varchar1 . "<br>";
                                echo $varchar2 = $reg->varchar2 . "<br>";
                                	}
                                
                endforeach;
                echo ' 
{
        "Id": "0",
        "Categoria": "00000",
        "Titulo": "000000"
      }


      ]}';
}
?>