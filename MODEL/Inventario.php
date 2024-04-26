<?php
    namespace MODEL;
    require_once 'Equipamento.php';
    require_once 'Software.php';

    class Inventario extends Equipamento extends Software{
        private ?int $id;
        private Software $software;
        private Equipamento $equipamento;
        private $string $compra;

    }
?>