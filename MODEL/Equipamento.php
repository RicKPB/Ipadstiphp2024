<?php
    namespace MODEL;
    require_once 'Departamento.php';

    class Equipamento extends Departamento{
        private ?int $id;
        private ?string $descricao;
        private ?string $responsalvel;
        private Departamento $departamento;
        private ?string $compra;
    
    }
?>
