<!doctype html>
<html>
<body>
<?php
$mois = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
$arrlength = count($mois);

echo $arrlength;
echo " <br/>";

for($x = 0; $x < $arrlength; $x++) {
  echo $mois[$x];
  echo "<br>";
}


?>