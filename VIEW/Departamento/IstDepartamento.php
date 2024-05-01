<?php
    namespace VIEW\Departamento;
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\conexao.php';
    $sql = 'select * from Departamento;';
    $con = \DAL\Conexao::conectar();
    $lstDpto = $con->query($sql);
    $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamentos</title>
</head>
<body>
    <h1>Listar Departamentos</h1> 
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($lstDpto as $dpto) {?>
           <tr>
              <td> <?php echo $dpto['id']; ?> </td>
              <td> <?php echo $dpto['descricao']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>