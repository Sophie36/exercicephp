<html>
    <body>
        <?php
            if(isset($_POST['bvalider'])){
                    $maxvaleur=$_POST['ztexte'];
                    $i=0;
                    $nbvaleurs=1;
                    $resultats="";
                    while($i<$maxvaleur){
                        $resultats=pow(2,$i);
                        $nbvaleurs+=$resultats;
                        $i++;    
                    }
                    echo "Soit de valeur=".$nbvaleurs."<br>";              
                }
                else {
                    echo <<<_toto
                    <form method="post" action="">
                        Saisissez une valeur entre 1 et 32
                        <input type="number" name="ztexte" value="" min="1" max="32" step="1">
                        <input type="submit" name="bvalider" value="Valider">
                </form>
_toto;
                }
        ?>
        
    </body>
</html>
 

