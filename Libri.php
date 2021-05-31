<?php 
     require_once __DIR__ . '/prodotti.php';

     class Libri extends prodotti{

       //override
       public $autore;
       public $casa_editrice;
       public $copertina;

     }

?>