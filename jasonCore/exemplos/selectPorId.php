 <?php header ('Content-type: text/html; charset=UTF-8');
/*  
 * Require nos scripts necessários  
 */
require_once "installJason.php";require_once('../model/token.php');
/*  
 * Atribui uma instância da classe crud   
 * e passa uma conexão como parâmetro  
 */
$crud  = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
//$crud->delete(17);
$dados = $crud->selecionaId('10', $dbTabela);
if ($controleSelect != false) {
                echo '{"' . "dados" . '"' . ":[";
                foreach ($dados as $reg):
                                $id        = $reg->id;
                                $varchar1  = $reg->varchar1;
                                $$varchar2 = $reg->varchar2;
                                retornaSelecaoPorId('10', $varchar1, $$varchar2);
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