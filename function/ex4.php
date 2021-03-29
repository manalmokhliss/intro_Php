<?php
function ex4( $x , $y ){
    if ($x < $y) {
        return "$x plus petit que $y";
    }
    if ($x > $y ){
        return "$x plus grand que $y";
    }
    if ($x==$y){
        return " $x egale $y";
    }
 

}
echo ex4 (66 , 93);
echo '</br>';
echo ex4 (54 , 17);
echo '</br>';
echo ex4 (66 , 66);
echo '</br>';

    









?>