<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
            <?php
            // Definir les informations de connexion
            define('SERVER', 'localhost');
            define('BASEDEDONNEES', 'bibliotheque');
            define('UTILISATEUR', 'root');
            define('MOTDEPASSE', '');
            try {
                $cnx = new PDO('mysql:host='.SERVER.';dbname='.BASEDEDONNEES,UTILISATEUR,MOTDEPASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8", PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $sql="SELECT * FROM auteur WHERE date_naissance BETWEEN 1800 AND 1900";
                $idRequete=$cnx->query($sql);
                while($row=$idRequete->fetch(PDO::FETCH_ASSOC)){
                    echo $row['nom'].' '.$row['prenom'].'-'.$row['date_naissance'].'<br>';
                }
                $cnx = NULL;
            } catch (PDOException $montreMoi) {
                echo 'Erreur releve:'.$montreMoi->getMessage();
                exit();
            }
            ?>
</html>

