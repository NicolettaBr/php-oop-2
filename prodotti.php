<?php
    
    class Prodotti {

        public $nome;
        public $marca;
        public $prezzo;
        public $disponibilit√† = 'immediata';
        public $quantita = 1;

        public function __construct($_nome){
            $this->nome = $_nome;
        }

    }

?>