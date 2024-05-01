<?php
    namespace DAL; //Data Acess Layer

    include_once 'C:\xampp\htdocs\Ipadstiphp2024\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Ipadstiphp2024\MODEL\Departamento.php';

    class Departamento{

        public function Select(){

            $sql = "Select * from departamento;"; 
            $con = Conexao::conectar(); 
            $dados = $con->query($sql);
  
            foreach ($dados as $linha){
                $dpto = new \MODEL\Departamento(); 
                $dpto->setId($linha['id']); 
                $dpto->setDescricao($linha['descricao']);
                $lstDpto[] = $dpto; 
            }
            return $lstDpto;
   
        }

        public function SelectID(int $id){}

        public function SelectDesc(string $name){}
    }

?>