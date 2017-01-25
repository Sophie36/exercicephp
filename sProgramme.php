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
            echo "<h2>Les auteurs du XVIII eme siecle</h2>";
            $min=1700;
            $max=1800;
            $varSql = "SELECT * FROM auteur WHERE date_naissance BETWEEN ? AND ?";
            $idRequete = executeRequete($cnx,$varSql,array($min,$max));
            while($ligne=$idRequete->fetch()){
                echo $ligne['nom'].' '.$ligne['prenom'].'-'.$ligne['date_naissance'].'<br>';
            }
            ?>
        </body>
</html>
