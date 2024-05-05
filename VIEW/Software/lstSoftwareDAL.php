<?php

    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\Software.php';
    use DAL\Software;

    $dalSoftware = new \DAL\Software();
    $lstSoftware = $dalSoftware->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Software usando DAL</title>
</head>
<body>
    <h1>Listar Software</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>FABRICANTE</th>
            <th>VALOR</th>
            <th>QTDCOPIAS</th>
        </tr>
        
        <?php foreach($lstSoftware as $software) { ?>
           <tr>
              <td><?php echo $software->getId(); ?></td>
              <td><?php echo $software->getDescricao();?></td>
              <td><?php echo $software->getFabricante();?></td>
              <td><?php echo $software->getValor();?></td>
              <td><?php echo $software->getQtdCopias();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>