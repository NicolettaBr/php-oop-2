<?php 
    require_once __DIR__ . '/Smartphone.php';
    require_once __DIR__ . '/Cibo_animali.php';
    require_once __DIR__ . '/Libri.php';
    require_once __DIR__ . '/Utente.php';

    //oggetto samsung galaxy
    $samsung_galaxy = new Smartphone('Samsung Galaxy');
    $samsung_galaxy->marca = 'Samsung';
    $samsung_galaxy->prezzo = 320;
    $samsung_galaxy->capacità_memoria = '64 GB';

    //var_dump($samsung_galaxy);

    //oggetto iphone 11
    $iphone_11 = new Smartphone('iphone 11');
    $iphone_11->marca = 'Apple';
    $iphone_11->prezzo = 780;
    $iphone_11->capacità_memoria = '128 GB';

    //var_dump($iphone_11);

    //oggetto cibo secco Monge
    $cibo_secco_Monge = new Cibo_animali('Monge Superpremium');
    $cibo_secco_Monge->marca = 'Monge';
    $cibo_secco_Monge->prezzo = 24;
    $cibo_secco_Monge->peso = 2.5;
    $cibo_secco_Monge->gusto = 'Salmone';
    
    //var_dump($cibo_secco_Monge);

    //oggetto Libro Pastorale Americana
    $pastorale_americana = new Libri('Pastorale Americana');
    $pastorale_americana->prezzo = 14;
    $pastorale_americana->autore = 'Philip Roth';
    $pastorale_americana->casa_editrice = 'Mondadori';
    $pastorale_americana->copertina = 'rigida';

    //var_dump($pastorale_americana);

    //oggetto Libro Città Invisibili
    $citta_invisibili = new Libri('Città Invisibili');
    $citta_invisibili->prezzo = 14;
    $citta_invisibili->autore = 'Italo Calvino';
    $citta_invisibili->casa_editrice = 'Rizzoli';
    $citta_invisibili->copertina = 'flessibile';

    //var_dump($citta_invisibili);

    //oggetto utente Mario Bianchi
    $Diego_Bianchi = new Utente('Diego', 'Bianchi');
    $Diego_Bianchi->indirizzo = 'Via Roma';
    $Diego_Bianchi->aggiungeProdotto($iphone_11);
    $Diego_Bianchi->aggiungeProdotto($citta_invisibili);

    //var_dump($Diego_Bianchi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>

    <h1>Riepilogo ordine di <?php echo $Diego_Bianchi->nome ?> <?php echo $Diego_Bianchi->cognome  ?></h1>
    

    <ul>
        <?php foreach($Diego_Bianchi->getProdotti() as $prodotto) { ?>
        
                <li>
                    Nome: <?php echo $prodotto->nome;  ?> <br>
                    Disponibilità: <?php echo $prodotto->disponibilità;  ?> <br>
                    Prezzo: <?php echo $prodotto->prezzo;  ?>

                </li>
            
        <?php  } ?>    
    </ul>


    
</body>
</html>