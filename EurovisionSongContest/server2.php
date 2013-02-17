<?php

//definiše se mime type
header("Content-type: application/json");?>{"drzave":<?php
require_once "konekcija.php";
// $sql="SELECT drzave.*, predstavnici.ime_prezime FROM drzave, predstavnici WHERE drzave.id_drz=predstavnici.id_drz";
 $sql="SELECT drzave.naziv, predstavnici.ime_prezime, predstavnici.pesma FROM predstavnici INNER JOIN drzave ON predstavnici.id_drz=drzave.id_drz INNER JOIN faze_takmicenja ON drzave.id_faza=faze_takmicenja.id_faza WHERE faze_takmicenja.id_faza='2'";
//$sql="SELECT drzave.naziv, predstavnici.ime_prezime, predstavnici.pesma FROM drzave, faze_takmicenja WHERE predstavnici.id_drz=drzave.id_drz";
if (!$q=$mysqli->query($sql)){
echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
exit();
} else {
if ($q->num_rows>0){
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
//ako nema rezultata u bazi
echo '{"greska":"Nema rezultata."}';
}
}?>}