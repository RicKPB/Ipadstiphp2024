<?php 
    
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\MODEL\Software.php';

    $sql = "Select * from equipamento;";
    $con = \DAL\Conexao::conectar();
    $dados = $con->query($sql);
    $con = \DAL\Conexao::desconectar(); 

    foreach ($dados as $linha){
        $software = new \MODEL\Software();
        $software->setID($linha['id']);
        $software->setDescricao($linha['descricao']);
        $software->setFabricante($linha['fabricante']);
        $software->setValor($linha['valor']);
        $software->setQtdCopias($linha['qtdcopias']);
        $lstSoftware[] = $software;
    }
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
    <title>Listar Software usando Model</title>
</head>
<body>
    <h1>Listar Software</h1>
    <table class="striped centered">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach ($lstSoftware as $software) { ?>
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