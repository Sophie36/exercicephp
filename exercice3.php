<?php
echo "<h1>Exercice 3</h1>";
$a="vrai";
$i=0;
$min=-15;
$max=15;
$nbvaleurs=0;
$resultats="";
while($a=="vrai"){
    $resultats=rand($min, $max);
    if($resultats ==0){
        //echo "la boucle s'est arrete";
        break;
    }
    else {
        echo $resultats."<br>";     
    }
    $i++;
    $nbvaleurs=$i;
}
echo "Soit de valeur=".$nbvaleurs."<br>";
?>
