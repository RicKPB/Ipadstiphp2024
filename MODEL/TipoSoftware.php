<?php
    namespace MODEL;

    class TipoSoftware{
        private ?int $id;
        private ?string $descricao;

        public function setId(int $id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }
    }
?>