<?php
header("Content-type: application/json");?>{"drzave":<?php
require_once "konekcija.php";
$sql="SELECT drzave.id_drz, drzave.naziv FROM drzave";
if (!$q=$mysqli->query($sql)){
echo '{"greska":"Error."}';
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
echo '{"greska":"Empty."}';
}
}
?>}