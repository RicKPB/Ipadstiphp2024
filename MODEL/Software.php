<?php
    namespace MODEL;
    require_once 'TipoSoftware.php';

    class Software extends TipoSoftware{
        private ?int $id;
        private ?string $descricao;
        private ?string $fabricante;
        // private Tipo $tipo;
        private ?float $valor;
        private ?int $qtdcopias;

        public function getID(){
            return $this->id;
        }

        public function setID(int $id){
            $this->id = $id;
        }

        public function getDescricao(){
            return $this->descricao;
        }  

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function setFabricante(string $fabricante){
            $this->fabricante = $fabricante;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor(float $valor){
            $this->valor = $valor;
        }

        // VER COM ALMIR COMO SERIA O VALOR DOS DADOS DO TIPO QUE SERIA HERDADA DE TIPOSOFTWARE

        public function getQtdCopias(){
            return $this->qtdcopias;
        }

        public function setQtdCopias(int $qtdcopias){
            $this->qtdcopias = $qtdcopias;
        }
    }
?>