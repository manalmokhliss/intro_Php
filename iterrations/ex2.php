<?php

$m=0;
$r=rand(1,100);
echo $r;
echo "</br>";
echo"le nommbre".' '.$r.' '."à ete multiplié 20 fois pars la variable m";
echo "</br>";
while($m<=20){


    $produit=$m*$r;
    echo $produit;
    echo "</br>";
    $m++;
}
?>