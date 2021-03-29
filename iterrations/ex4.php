<?php

// $s=1;
// $n=rand(1,10);
// echo $n;
// echo "</br>";
// while($s<=10)
// {
// $diviser=$n/2;
// echo $diviser;

$s = 1 ;
while ($s <=10){
    $diviseur = $s / 2 ;

    echo " - " . $diviseur ;
    
    $s++;
}

echo '<h1>ex5</h1>';

$r=1;
while($r<=15){
    echo $r.' : On y arrive presque... <br/>';

    $r++;

}
echo ' <h1>exercice 6</h1> ';
$s=20;
while ($s>=0){
    echo" $s : C'est presque bon... <br/> ";
    $s--;
}
echo ' <h1> Exercice 7 </h1> ';
$t=1;
while ($t<100){
    echo" $t : On tient le bon bout... <br/>";
    $t +=15;

}
echo ' <h1> Exercice 8</h1> ';
$m=200;
while ($m>=0){
    echo  "$m Enfin ! ! ! <br/> ";
    $m -=12;
}
?>