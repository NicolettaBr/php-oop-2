<?php 

    class Utente {

        public $nome;
        public $cognome;
        public $indirizzo;
        public $numero_carta = '****8349';

        public function __construct($_nome, $_cognome){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
        }

        //elemento visibile solo nella classe genitore e ai figli
        protected $prodotti = [];

        //funzione che aggiunge prodotto scelto dall' utente nell' array 'prodotti'
        public function aggiungeProdotto($prodotto){
            $this->prodotti[] = $prodotto;

        }

        //funzione che ritorna gli elementi presenti in 'prodotti'
        public function getProdotti(){
            return $this-> prodotti;
        }

    }

?>