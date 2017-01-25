<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
            <?php
            // Definir les informations de connexion
            define('SERVER', 'localhost');
            define('BASEDEDONNES', 'bibliotheque');
            define('UTILISATEUR', 'root');
            define('MOTDEPASSE', '');

            // etablir une connexion avec le serveur de BD et a la BD
            $cnx = new mysqli(SERVER, UTILISATEUR, MOTDEPASSE, BASEDEDONNES);
            // indique que les informations remonté doivent etre encodé en UTF-8
            $forceUTF = "SET NAMES utf8";
            if (!$cnx->query($forceUTF)){
                die($env->error);
            }
            // teste la connexion
            if($cnx->connect_error){
                die($cnx->connect_error);
            }
            // creation de la requete
            $sql="SELECT * FROM auteur";
            // Execution de la requête
            $idRequete = $cnx ->query($sql);
            if(!$idRequete){
                die($cnx->error);
            }
            while($ligne=$idRequete->fetch_array(MYSQLI_ASSOC)){
                echo $ligne['nom'].' '.$ligne['prenom'].'-'.$ligne['date_naissance'].'<br>';
            }
            // on l'instance de connexion serrvant à exectuer la requete
            $idRequete->close(); 
            // on ferme la connexion a la base de donnée
            $cnx->close();
            ?>
</html>