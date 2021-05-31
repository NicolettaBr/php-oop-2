<?php 
     require_once __DIR__ . '/prodotti.php';

     class Cibo_animali extends prodotti{

        //override
        public $peso;
        public $gusto;
        public $quantita = 3;
     }

?>