<?php

//Propriété pour ce co a une base de donnée

define("DBHOST", "127.0.0.1");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "cda-store");


// je définie le nom de la source des données ( accès )
$dsn = "mysql:dbname=" .DBNAME.";host=".DBHOST;

// Try to connect à la BDD

try{$db = new PDO($dsn, DBUSER, DBPASS);
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
}

//je gére les erreurs
catch(PDOException $e)
{die("Erreur de connexion".$e->getMessage());
}
