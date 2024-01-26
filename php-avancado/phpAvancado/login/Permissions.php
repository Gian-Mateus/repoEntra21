<?php
namespace login;

use pdo\Mysql;
use Uteis;

class Permissions{
    /** 
    * Verifica se o usuário está logado
    * @return boolean | void caso estiver logado, retorna true, senão redireciona
    */
    public function isLogged(){
        if(isset($_SESSION['USUARIO'])){
            return true;
        } else{
            header("Location: http://localhost/php-avancado/phpAvancado/login/");
            return false;
        }
    }

    /**
     * efetua o login do usuário
     * @return boolean
     */
    public function login(){
        $user = Uteis::antiinject($_POST['usuario']);
        $password = Uteis::antiinject($_POST['senha']);
        $db = new Mysql(config);
        $db->select("SELECT id, name, user FROM seg_usuarios WHERE user = '{$user}' AND password = '{$password}'");

        if($db->allResults > 0){
            $_SESSION['USUARIO'] = $db->qrs;
            return true;
        } 
        return false;
    }
}
?>