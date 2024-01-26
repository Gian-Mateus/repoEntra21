<?php
    session_start();

    if(isset($_POST['nome']) || isset($_POST['sobrenome'])){
        if(isset($_SESSION['cadastros'])){
            $inc = count($_SESSION['cadastros']);
        } else{
            $inc = 0;
        };
        $_SESSION['cadastros'][$inc + 1]['nome'] = $_POST['nome'];
        $_SESSION['cadastros'][$inc + 1]['sobrenome'] = $_POST['sobrenome'];
        header("Location:index.php");
    };

?>