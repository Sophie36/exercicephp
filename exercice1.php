<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>Exercice 1</h1>";
echo "<h2>Intitule de l'exercice: un programme qui affiche</h2>";
$i=0;
$nbvaleurs=1;
$resultats="";
while($i<8){
    $resultats=pow(2,$i);
    $nbvaleurs+=$resultats;
    echo $resultats."<br>";
    $i++;
}
echo "Soit de valeur=".$nbvaleurs."<br>";
?>
