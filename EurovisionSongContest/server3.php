<?php
//proverava se MIME tip sadrzaja koji zahteva klijent. Ukoliko nije zadat, generise se JSON
if (isset ($_SERVER['HTTP_ACCEPT'])){
switch ($_SERVER['HTTP_ACCEPT']){
case "application/json":
generisiJSON();
break;
case "application/xml":
generisiXML();
break;
default:
generisiJSON();
break;
}
} else {
generisiJSON();
}

function generisiJSON(){
require "konekcija.php";
//definiše se mime type
header("Content-type: application/json");?>{"drzave":<?php
$sql="SELECT drzave.naziv, predstavnici.ime_prezime, predstavnici.pesma FROM predstavnici INNER JOIN drzave ON predstavnici.id_drz=drzave.id_drz INNER JOIN faze_takmicenja ON drzave.id_faza=faze_takmicenja.id_faza WHERE faze_takmicenja.id_faza='3'";
if (!$q=$mysqli->query($sql)){
//ako se upit ne izvrši
echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
exit();
} else {
//ako je upit u redu
if ($q->num_rows>0){
//ako ima rezultata u bazi
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
//print_r ($niz);
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
//ako nema rezultata u bazi
echo '{"greska":"Nema rezultata."}';
}
}?>}
<?php
$mysqli->close();
}

function generisiXML(){
//definiše se mime type
header("Content-type: application/xml");
//konekcija ka bazi
require_once "konekcija.php";
//priprema upita
 $sql="SELECT drzave.naziv, predstavnici.ime_prezime, predstavnici.pesma FROM predstavnici INNER JOIN drzave ON predstavnici.id_drz=drzave.id_drz INNER JOIN faze_takmicenja ON drzave.id_faza=faze_takmicenja.id_faza WHERE faze_takmicenja.id_faza='3'";
//kreiranje XMLDOM dokumenta
$dom = new DomDocument('1.0','utf-8');

//dodaje se koreni element
 $drzave = $dom->appendChild($dom->createElement('drzave'));

//izvršavanje upita
if (!$q=$mysqli->query($sql)){

 $greska = $drzave->appendChild($dom->createElement('greska'));

 $greska->appendChild($dom->createTextNode("Došlo je do greške pri izvršavanju upita"));
} else {
//ako je upit u redu
if ($q->num_rows>0){
//ako ima rezultata u bazi
$niz = array();
while ($red=$q->fetch_object()){
  
 $drzava = $drzave->appendChild($dom->createElement('drzava'));
$naziv = $drzava->appendChild($dom->createElement('naziv'));

 $naziv->appendChild($dom->createTextNode($red->naziv));

 $ime_prezime = $drzava->appendChild($dom->createElement('ime_prezime'));
 
 $ime_prezime->appendChild($dom->createTextNode($red->ime_prezime));
  $pesma = $drzava->appendChild($dom->createElement('pesma'));
 
 $pesma->appendChild($dom->createTextNode($red->pesma));
}
} else {
//ako nema rezultata u bazi
  //dodaje se element <greska> u korenom elementu <proizvodi>
 $greska = $tekst->appendChild($dom->createElement('greska'));

 $greska->appendChild($dom->createTextNode("Nema unetih proizvoda"));
}
}
//cuvanje XML-a
$xml_string = $dom->saveXML(); 
echo $xml_string;
//zatvaranje konekcije
$mysqli->close();
}
?>









