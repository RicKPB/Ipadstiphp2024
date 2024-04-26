<?php
    namespace MODEL;
    require_once 'TipoSoftware.php';

    class Software extends TipoSoftware{
        private ?int $id;
        private ?string $descricao;
        private ?string $fabricante;
        private Tipo $tipo;
        private ?float $valor;
        private ?int $qtdcopias;

    }
?>