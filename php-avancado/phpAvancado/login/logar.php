<?php
require_once "../bot.php";
use login\Permissions;

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $login = new Permissions();
    if($login->login()){
        header("Location: http://localhost/php-avancado/phpAvancado/admin/");
    } else{
        header("Location: http://localhost/php-avancado/phpAvancado/login?msg=login e senha inválidos");
    }
}
?>