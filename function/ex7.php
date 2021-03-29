<?php
function ex7($age , $sex){    
$ageString="  vous êtes majeu";
if ($age<=18){
    $ageString="vous êtes mineur";

}
$sexString="homme";
$accord = "";
if ($sex==="f"){
    $sexString="femme";
    $accord="e";

}
return ("vous etes un".$accord." ".$sexString." et ".$ageString.$accord);

}
echo ex7( 24,"f");

?>