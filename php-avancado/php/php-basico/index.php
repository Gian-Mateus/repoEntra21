<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.php?page=home">HOME</a>
    <a href="index.php?page=formulario">CADASTRO</a>

    <?php
        $page = (empty($_GET['page'])) ? 'home' : $_GET['page'];
        include_once $page.".php";
    ?>
</body>
</html>