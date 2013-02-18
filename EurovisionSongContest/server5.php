
<?php
//definiše se mime type
header("Content-type: application/json");?>{"predstavnici":<?php
require_once "konekcija.php";

$sql="SELECT predstavnici.id_pred, predstavnici.ime_prezime FROM predstavnici";
if (!$q=$mysqli->query($sql)){
echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
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