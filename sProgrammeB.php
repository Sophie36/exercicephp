<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
        <body>
            <?php
            include 'infoconnexion.php';
            include 'connexion.php';
            include 'executeRequete.php';
            $cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);
            echo "<h2>Les bières de type Bière Blanche</h2>";
            $type="Blanche";
            
            $varSql = "SELECT NomMarque,Version FROM biere WHERE Version =?";
            $idRequete = executeRequete($cnx,$varSql,array($type));
            while($ligne=$idRequete->fetch()){
                echo $ligne['NomMarque'].' '.$ligne['Version']."</br>";
            }
            ?>
        </body>
</html>
