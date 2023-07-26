<!--    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi e accessori (cucce, guinzagli, lettiere, acquari, etc).
I prodotti possono appartenere a una tra queste categorie:
Cane, Gatto, Uccelli, Pesci
Una volta create le classi che descrivono il nostro sistema, instanziate prima tutte le categorie che ci serviranno, poi create alcuni prodotti di differenti categorie e stampateli nella pagina sotto forma di schede.
Allegato uno screenshot di esempio e un elenco con i nomi dei prodotti presenti nello shop e gli url delle relative immagini
Royal Canin Mini Adult
https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg

Almo Nature Holistic Maintenance Medium Large Tonno e Riso
https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg

Almo Nature Cat Daily Lattina
https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg

Mangime per Pesci Guppy in Fiocchi
https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg

Voliera Wilma in Legno
https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg

Cartucce Filtranti per Filtro EasyCrystal
https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg

Kong Classic
https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg

Topini di peluche Trixie
https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg                           -->

<?php
class Products
{
 // Variabili d'istanza o prorpietà
 public $genre;
 public $length;
 public $title;

 // costruttore : scelgo i parametri minimi di costruzione posso dargli il nome che voglio anche lo stesso delle variabili
 public function __construct($bloccodati1, $bloccodati2, $bloccodati3)
 {$this-> genre = $bloccodati1; $this-> length = $bloccodati2; $this-> title = $bloccodati3;


}

 


 // Metodi (funzioni dentro gli oggetti)
public function presentazioneOggi(){
    echo 'Buonasera telespettatori, vi annunciamo che andrà ora in onda' . $this->title;
    }
public function presentazioneDomani(){
    echo 'Buonasera telespettatori, abbiamo il piacere di anticiparvi 
        che domani sera trasmetteremo il film' . $this->title;
    }


}

$orainonda = new Movie("Storico", "2 ore e 5 minuti", "Caccia all'Ottobre Rosso");
$domaniserainTv = new Movie("Commedia", "1 ora e 48 minuti", "Mamma ho Perso l'Aereo" );

$orainonda-> title = "Caccia all'Ottobre Rosso";
$domaniserainTv-> title = "Mamma ho Perso l'Aereo";
$orainonda-> genre = "Storico";
$domaniserainTv-> genre = "Commedia";
$orainonda-> length = "2 ore e 5 minuti";
$domaniserainTv-> length = "1 ora e 48 minuti";

$orainonda -> presentazioneOggi();
$domaniserainTv -> presentazioneDomani();

var_dump($orainonda);
var_dump($domaniserainTv);