<?php 
$predstavnici = $_POST['dugme2'];
$drzave = $_POST['dugme'];
if(isset($drzave)){

//defini�e se mime type
header("Content-type: application/json");?>{"drzave":<?php
require_once "konekcija.php";
$sql="SELECT drzave.id_drz, drzave.naziv FROM drzave";
if (!$q=$mysqli->query($sql)){
echo '{"greska":"Nastala je gre�ka pri izvr�avanju upita."}';
exit();
} else {
//ako je upit u redu
if ($q->num_rows>0){
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
//print_r ($niz);
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
echo '{"greska":"Nema rezultata."}';
}
}
?>}
<?php
}else if(isset($predstavnici)){

//defini�e se mime type
header("Content-type: application/json");?>{"predstavnici":<?php
require_once "konekcija.php";

$sql="SELECT predstavnici.id_pred, predstavnici.ime_prezime, predstavnici.pesma FROM predstavnici";
if (!$q=$mysqli->query($sql)){
echo '{"greska":"Nastala je gre�ka pri izvr�avanju upita."}';
exit();
} else {
//ako je upit u redu
if ($q->num_rows>0){
$niz = array();
while ($red=$q->fetch_object()){
$niz[] = $red;
}
//print_r ($niz);
$niz_json = json_encode ($niz);
print ($niz_json);
} else {
echo '{"greska":"Nema rezultata."}';
}
}
?>}
<?php} ?>
