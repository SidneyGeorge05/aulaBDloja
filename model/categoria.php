<?php
    class categoria{
        private $nomeCategoria;
        private int $idCategoria;

        public function setNomeCategoria($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }
        public function getNomeCategoria(){
            return $this->nomeCategoria;
        }

        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
    }

?>