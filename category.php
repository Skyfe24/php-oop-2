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
class Category

{
 // Variabili d'istanza o prorpietà
 public $name;

 // costruttore : scelgo i parametri minimi di costruzione posso dargli il nome che voglio anche lo stesso delle variabili
 // perchè prima facevamo {$this-> genre = $bloccodati1;} e ora facciamo {$this->setName($name); ?????????????????????????????????????????????????????????????????????????????????????



 public function __construct($bloccodati1)
 {$this->setName($name);



}

 


 // Metodi (funzioni dentro gli oggetti)
public function getName(){
    return $this->name;
    }
public function setName(): self{
     $this->name = $name;
     return $this;
    }
}


 ?>