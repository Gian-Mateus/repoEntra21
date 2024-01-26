<?php
    session_start();
?>
<table>
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
    </tr>
    <?php foreach($_SESSION['cadastros'] as $cad){ ?>
    <tr>
        <td><?php echo $cad['nome'] ?></td>
        <td><?php echo $cad['sobrenome'] ?></td>
    </tr>
    <?php } ?>
</table>