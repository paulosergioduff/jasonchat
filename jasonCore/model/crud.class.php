<?php error_reporting(0);
/*  
 * Classe para operações CRUD na tabela tabela   
 * Estudar criação de tabelas em PDO https://www.todoespacoonline.com/w/2014/10/como-criar-bases-de-dados-e-tabelas-com-pdo/
 */
class crud
{
                /*  
                 * Atributo para conexão com o banco de dados   
                 */
                private $pdo = null;
                /*  
                 * Atributo estático para instância da própria classe    
                 */
                private static $crud = null;
                /*  
                 * Construtor da classe como private  
                 * @param $conexao - Conexão com o banco de dados  
                 */
                private function __construct($conexao)
                {
                                $this->pdo = $conexao;
                }
                /*
                 * Método estático para retornar um objeto crud    
                 * Verifica se já existe uma instância desse objeto, caso não, instância um novo    
                 * @param $conexao - Conexão com o banco de dados   
                 * @return $crud - Instancia do objeto crud    
                 */
                public static function getInstance($conexao)
                {
                                if (!isset(self::$crud)):
                                                self::$crud = new crud($conexao);
                                endif;
                                return self::$crud;
                }
                public function insert($varchar2, $varchar3, $varchar1, $valor1, $valor2, $tabela, $dbTabela)
                {
                                if (!empty($varchar2) && !empty($varchar3) && !empty($varchar1)):
                                                try {
                                                                $sql = "INSERT INTO $dbTabela (varchar2, varchar3, varchar1, varchar4, varchar5, tabela) VALUES (?, ?, ?, ?, ?, ?)";
                                                                $stm = $this->pdo->prepare($sql);
                                                                $stm->bindValue(1, $varchar2);
                                                                $stm->bindValue(2, $varchar3);
                                                                $stm->bindValue(3, $varchar1);
                                                                $stm->bindValue(4, $valor1);
                                                                $stm->bindValue(5, $valor2);
                                                                $stm->bindValue(6, $tabela);
                                                                $stm->execute();
                                                                //retornoInsert();
                                                }
                                                catch (PDOException $erro) {
                                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                                }
                                endif;
                }

                  public function insertX($varchar2, $varchar3, $varchar1, $valor1, $valor2, $tabela, $dbTabela, $nomeDoPadrao) // Função especial para um projeto da empresa que trabalho
                {
                                if (!empty($varchar2) && !empty($varchar3) && !empty($varchar1)):
                                                try {
                                                                $sql = "INSERT INTO $dbTabela (varchar2, varchar3, varchar1, varchar4, varchar5, tabela, varchar6) VALUES (?, ?, ?, ?, ?, ?, ?)";
                                                                $stm = $this->pdo->prepare($sql);
                                                                $stm->bindValue(1, $varchar2);
                                                                $stm->bindValue(2, $varchar3);
                                                                $stm->bindValue(3, $varchar1);
                                                                $stm->bindValue(4, $valor1);
                                                                $stm->bindValue(5, $valor2);
                                                                $stm->bindValue(6, $tabela);
                                                                $stm->bindValue(7, $nomeDoPadrao);
                                                                $stm->execute();
                                                                //retornoInsert();
                                                }
                                                catch (PDOException $erro) {
                                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                                }
                                endif;
                }


                /*   
                 * Metodo para edição de registros   
                 * @param $varchar2 - Valor para o campo varchar2   
                 * @param $varchar3 - Valor para o campo varchar3   
                 * @param varchar1  - Valor para o campo varchar1   
                 * @param id   - Valor para o campo id   
                 */
                public function update($varchar2, $varchar3, $varchar1, $valor1, $valor2, $id, $dbTabela)
                {
                                if (!empty($varchar2) && !empty($varchar3) && !empty($varchar1) && !empty($id)):
                                                try {
                                                                $sql = "UPDATE $dbTabela SET varchar2=?, varchar3=?, varchar1=?, varchar4=?, varchar5=? WHERE id=?";
                                                                $stm = $this->pdo->prepare($sql);
                                                                $stm->bindValue(1, $varchar2);
                                                                $stm->bindValue(2, $varchar3);
                                                                $stm->bindValue(3, $varchar1);
                                                                $stm->bindValue(4, $valor1);
                                                                $stm->bindValue(5, $valor2);
                                                                $stm->bindValue(6, $id);
                                                                $stm->execute();
                                                                //retornoUpdate();
                                                }
                                                catch (PDOException $erro) {
                                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                                }
                                endif;
                }
                /*   
                 * Metodo para exclusão de registros   
                 * @param id - Valor para o campo id   
                 */
                public function delete($id, $dbTabela)
                {
                                if (!empty($id)):
                                                try {
                                                                $sql = "DELETE FROM $dbTabela WHERE id=?";
                                                                $stm = $this->pdo->prepare($sql);
                                                                $stm->bindValue(1, $id);
                                                                $stm->execute();
                                                                //retornoDelete();
                                                }
                                                catch (PDOException $erro) {
                                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                                }
                                endif;
                }
                /*   
                 * Metodo para consulta de tabelas   
                 * @return $dados - Array com os registros retornados pela consulta   
                 */
                public function getAlltabela($dbTabela)
                {
                                try {
                                                $sql = "SELECT * FROM $dbTabela";
                                                $stm = $this->pdo->prepare($sql);
                                                $stm->execute();
                                                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                                                return $dados;
                                }
                                catch (PDOException $erro) {
                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                }
                }
                public function selecionaId($id, $dbTabela)
                {
                                try {
                                                $sql = "SELECT * FROM $dbTabela WHERE id=?";
                                                $stm = $this->pdo->prepare($sql);
                                                $stm->bindValue(1, $id);
                                                $stm->execute();
                                                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                                                return $dados;
                                }
                                catch (PDOException $erro) {
                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                }
                }
                public function selecionaCampo($dbTabela)
                {
                                   try {
                                                $sql = "SELECT * FROM $dbTabela";
                                                $stm = $this->pdo->prepare($sql);
                                                $stm->execute();
                                                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                                                return $dados;
                                }
                                catch (PDOException $erro) {
                                                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                                }
                }
}