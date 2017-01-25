<?php
   $tab[]="Un tableau numerique";
   $i=0;
   $c="T";
   $v="O";
   while ($i<10){
       if(($i%2)==0){
           $tab[$i]="T";
       }else{
           $tab[$i]="O";
       }
       $i++;
   }
   print_r($tab);
   var_dump($tab);
?>
