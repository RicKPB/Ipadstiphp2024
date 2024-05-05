<?php
    namespace DAL; //Data Acess Layer

    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\MODEL\Software.php';

    class Software{

        public function Select(){

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
            return $lstSoftware;
        }
    }
?>