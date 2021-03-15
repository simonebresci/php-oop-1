<?php
// Oggetto pesce
class Pesce{
  private $nomeScientifico;
  private $nome;
  private $provenienza;
  private $lunghezza;
  private $descrizione;

  // CONSTRUCT
  public function __construct($nomeScientifico, $nome, $provenienza, $lunghezza, $descrizione) {
        $this->nomeScientifico = $nomeScientifico;
        $this->nome = $nome;
        $this->provenienza = $provenienza;
        $this->lunghezza = $lunghezza;
        $this->descrizione = $descrizione;
  }

  //GETTER
  public function getnomeScientifico(){
    return $this->nomeScientifico;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getProvenienza(){
    return $this->provenienza;
  }
  public function getLunghezza(){
    return $this->lunghezza;
  }
  public function getDescrizione(){
    return $this->descrizione;
  }

  //SETTER
  public function setDescrizione($newDescrizione){
   $this->descrizione = $newDescrizione;
 }

}

// Istanzia 3 pesci
$pesce1 = new Pesce(
  "Poecilia reticulata",
  "Guppy",
  "regione settentrionale del Sudamerica e alcune aree dei Caraibi",
  "3-5cm",
  "Uno dei pesci d'acquario più famosi è senza dubbio il Guppy, un pesce d’acqua dolce originario dei Caraibi, che non richiede cure particolari ed è perfetto per chi è alle prime armi. Il Guppy è un piccolo pesce dai colori vivaci che può raggiungere una lunghezza di 5 cm. Nel suo areale  di distribuzione originario vive in banchi, ed è per questo che anche nel nostro acquario deve essere allevato in un piccolo gruppo. È un pesce socievole che va d'accordo con gli altri pesci, in modo particolare con i Corydoras. Si riproduce molto velocemente e può essere alimentato sia con mangime secco che vivo.");

$pesce2 = new Pesce("Betta splendens",
 "Pesce siamese combattente",
  "Sud-est asiatico (Cambogia e Thailandia)",
  "5-7 cm",
  "Il Pesce siamese combattente è originario della Cambogia e della Thailandia ed è uno dei pesci Anabantoidei dai colori più accesi. In natura ha un colore tra il rosso e il marrone, ma l’allevamento ha portato ad avere esemplari di molti altri colori, dal rosso al blu per poi finire al nero, con pinne di lunghezza variabile e dai diversi colori. “Pesce combattente” è un nome alquanto provocatorio che deriva dal comportamento aggressivo dei maschi nei confronti di altri maschi della stessa specie. I rivali si scagliano l’uno contro l’altro, per poi lottare dilaniandosi le pinne, finché uno dei due contendenti non muore. Per questo motivo è importante che nell’acquario ci sia soltanto un esemplare maschio. I pesci combattenti sono invece pacifici nei confronti delle femmine e delle altre specie di pesci, ma è importante informarsi bene sulla reciproca compatibilità, prima di farli convivere nell’acquario.");

$pesce3 = new Pesce("Paracheirodon innesi",
 "Pesce neon",
 "Sudamerica, Perù",
 "4 cm",
 "Con le sue bande fluorescenti rosse e blu, il Pesce Neon offre uno spettacolo straordinario in qualsiasi acquario. È un piccolo pesce d’acqua dolce originario dell’Amazzonia che ama vivere esclusivamente in gruppi. Per garantirne il benessere, è consigliabile quindi allevarlo in gruppi di minimo 10 esemplari, ma più sono e meglio è. Stesso discorso vale per la grandezza dell'acquario, che deve avere una capacità di almeno 60 litri.");

echo "<h2> Pesci </h2>";
echo $pesce1->getnomeScientifico() . "<br>";
echo $pesce1->getNome() . "<br>";
echo $pesce1->getprovenienza() . "<br>";
echo $pesce1->getlunghezza() . "<br>";
echo $pesce1->getDescrizione() . "<br>";
echo "<br> <br>";


echo $pesce2->getnomeScientifico() . "<br>";
echo $pesce2->getNome() . "<br>";
echo $pesce2->getprovenienza() . "<br>";
echo $pesce2->getlunghezza() . "<br>";
echo $pesce2->getDescrizione() . "<br>";
echo "<br> <br>";


echo $pesce3->getnomeScientifico() . "<br>";
echo $pesce3->getNome() . "<br>";
echo $pesce3->getprovenienza() . "<br>";
echo $pesce3->getlunghezza() . "<br>";
echo $pesce3->getDescrizione() . "<br>";
echo "<br> <br>";
echo "<hr>";


class Acquario{
  private $modello;
  private $lunghezza;
  private $larghezza;
  private $profondita;
  private $capacita;
  private $acquaSalata;
  private $pesci = [];

  public function __construct($modello, $lunghezza, $larghezza, $profondita, $capacita, $acquaSalata, $pesci) {
        $this->modello = $modello;
        $this->lunghezza = $lunghezza;
        $this->larghezza = $larghezza;
        $this->profondita = $profondita;
        $this->capacita = $capacita;
        $this->acquaSalata = $acquaSalata;
        $this->pesci = $pesci;
  }

  //GETTER
  public function getModello(){
    return $this->modello;
  }
  public function getLunghezza(){
    return $this->lunghezza;
  }
  public function getLarghezza(){
    return $this->larghezza;
  }
  public function getProfondita(){
    return $this->profondita;
  }
  public function getCapacita(){
    return $this->capacita;
  }
  public function getAcquaSalata(){
    return $this->acquaSalata;
  }

  public function getPesci(){
    return $this->pesci;
  }

  //SETTER
  public function setAcquaSalata($acquaSalata){
   $this->acquaSalata = $acquaSalata;
 }

 public function addPesce(Pesce $pesce){
   //Da implementare - Controlla se tipo di acqua compatibile con pesce
   // if($pesce.getAcquaSalata() === $this->getAcquaSalata()){}

   $this->pesci[] = $pesce;
 }

}


// Creazione acquari
$acquario1 = new Acquario("Tetra AquaArt Evolution", "38cm", "42cm", "77cm", "100L", "true",null);
$acquario2 = new Acquario("Haquoss Evolution 40", "40cm", "25cm", "34cm", "21L", "false",null);
$acquario3 = new Acquario("Tetra Starter Line", "61cm", "31cm", "35cm", "54L", "false",null);

echo "<h2> Acquari </h2>";
echo $acquario1->getModello() . "<br>";
echo $acquario1->getLunghezza() . "<br>";
echo $acquario1->getLarghezza() . "<br>";
echo $acquario1->getProfondita() . "<br>";
echo $acquario1->getCapacita() . "<br>";
echo $acquario1->getAcquaSalata() . "<br>";
echo "<br> <br>";

echo $acquario2->getModello() . "<br>";
echo $acquario2->getLunghezza() . "<br>";
echo $acquario2->getLarghezza() . "<br>";
echo $acquario2->getProfondita() . "<br>";
echo $acquario2->getCapacita() . "<br>";
echo $acquario2->getAcquaSalata() . "<br>";
echo "<br> <br>";

echo $acquario3->getModello() . "<br>";
echo $acquario3->getLunghezza() . "<br>";
echo $acquario3->getLarghezza() . "<br>";
echo $acquario3->getProfondita() . "<br>";
echo $acquario3->getCapacita() . "<br>";
echo $acquario3->getAcquaSalata() . "<br>";
echo "<br> <br>";
echo "<hr>";



// Inserimento pesci in Acquario 1
$acquario1->addPesce($pesce1);
$acquario1->addPesce($pesce2);
$acquario1->addPesce($pesce3);

// Inserimento pesci in Acquario 2
$acquario2->addPesce($pesce3);
$acquario2->addPesce($pesce2);
$acquario2->addPesce($pesce1);

// Inserimento pesci in Acquario 3
$acquario3->addPesce($pesce2);
$acquario3->addPesce($pesce3);
$acquario3->addPesce($pesce1);


echo "<h2> Pesci negli acquari </h2>";

echo "<b>" . $acquario1->getModello() . " </b> <br>";
foreach($acquario1->getPesci() as $p){
  echo $p->getNome() . "<br>";
}
echo "<br>";

echo "<b>" . $acquario2->getModello() . " </b> <br>";
foreach($acquario2->getPesci() as $p){
  echo $p->getNome() . "<br>";
}
echo "<br>";

echo "<b>" . $acquario3->getModello() . " </b> <br>";
foreach($acquario3->getPesci() as $p){
  echo $p->getNome() . "<br>";
}
echo "<br>";
