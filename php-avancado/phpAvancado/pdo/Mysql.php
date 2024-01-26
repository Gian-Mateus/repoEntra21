<?php
namespace pdo;

use PDO;
use PDOException;

class Mysql extends Database{
    private $con,
    $host,
    $base,
    $username,
    $password;

    public $qrs; //query result set
    public $allResults;

    /**
     * @param array $config contém todo os dados da conexão 
     * @return void
     */

    public function __construct($config) {
        $this->host = $config['host'];
        $this->base = $config['dbName'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->connect();
    }
    
    protected function connect(){
        try{
            $this->con = new PDO("mysql:host={$this->host};dbname={$this->base}", $this->username, $this->password);
            //Exceções de error pdo
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo "Erro de conexão no banco de dados";
        }
    }

    /**
     * Executa uma consulta e retorna o resultado da $this->con
     * @param string $sql query de consulta
     * @return object retorna o próprio objeto
    */
    public function select($sql){
        $query = $this->con->prepare($sql);
        $query->execute();
        $this->qrs = $query->fetchAll(PDO::FETCH_ASSOC);
        $this->allResults = $query->rowCount();
        return $this;
    }
    public function insert($sql){

    }
    public function update($sql){

    }
    public function delete($sql){

    }
}
?>