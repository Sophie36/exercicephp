<?php
/*// 1er cas,pas de paramètre et pas de retour
annonce();
function annonce(){
    $message= "Hello les DISSI";
    echo $message;
}
// 2eme cas,parametre obligatoire sans retour
$nb1=14;
$nb2=4;
somme($nb1,$nb2);
function somme($nb1,$nb2){
    $resultat = $nb1+$nb2;
    printf("La somme des nombres est :%d", $resultat);
}*/
/*// 3eme cas,parametre obligatoire et parametre facultatif et sans retour
$flag = true;
$nb1=14;
$nb2=4;
$nbadd=6;
$nbMul=2;
if($flag){
    multiplication($nb1,$nb2);
} else {
    multiplication($nb1,$nb2, $nbadd, $nbMul);
}
function multiplication($nb1,$nb2, $nbadd=0, $nbMul=1){
    $resultat = ($nb1 + $nb2 + $nbadd)*$nbMul;
    printf("Le resultat : %2f", $resultat);
}*/
/*//4 eme cas,sans paramètre avec une valeur de retour
$var=annonceNew();
function annonceNew(){
    $message= "Helloooo ! les DISSI";
    return $message;
}
echo $var;*/
// 5eme cas,avec parametre et retour
$valeur = 101;
$var = paireImpaire($valeur);
echo $var;

function paireImpaire($valeur){
    if($valeur%2 == 0){
        $resultat = sprintf("La valeur %d est paire ", $valeur);
    } else {
        $resultat = sprintf("La valeur %d est impair ", $valeur);
    }
    return $resultat;
}
?>
