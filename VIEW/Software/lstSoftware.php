<?php

    namespace VIEW\Software;
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\conexao.php';
    $sql = 'select * from Software;';
    $con = \DAL\Conexao::conectar();
    $lstSoftware = $con->query($sql);
    $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Softwares</title>
</head>
<body>
    <h1>Listar Software</h1> 
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Valor</th>
            <th>QtdCopias</th>
        </tr>
        
        <?php foreach($lstSoftware as $software) {?>
           <tr>
              <td> <?php echo $software['id']; ?> </td>
              <td> <?php echo $software['descricao']?> </td>
              <td> <?php echo $software['fabricante']?> </td>
              <td> <?php echo $software['valor']?> </td>
              <td> <?php echo $software['qtdcopias']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>