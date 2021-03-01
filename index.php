<?php

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */

require "./Classes/DB.php";

$pdo = DB::getInstance();

/*$request = "DELETE FROM exo_192.user WHERE id = 4";
$pdo->exec($request);*/

/*$request = "TRUNCATE TABLE user";
$pdo->exec($request);*/

/*$sql = " INSERT INTO exo_192.user(nom, prenom, rue, numero, code_postal, ville, pays, mail)
        VALUES ('Caillou', 'Pierre', 'Rue des gravier', 15, 46589, 'Silex-City', 'Oreland', 'Jesuisuncaillou@gmail.com')
";

$pdo->exec($sql);*/

/*$request = "TRUNCATE TABLE user";
$pdo->exec($request);*/

$request = "DROP DATABASE exo_192";
$pdo->exec($request);