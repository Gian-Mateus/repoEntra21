<?php
require_once "../bot.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logar.php" method="POST">
        <input type="text" name="usuario" placeholder="usuário">
        <input type="password" name="senha" placeholder="senha">
        <button type="submit">Login</button>
    </form>
    <?php
    $msg = (isset($_GET['msg'])) ? $_GET['msg'] : '';
    echo "<p>{$msg}</p>";
    ?>
</body>
</html>