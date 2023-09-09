<?php
echo "hello world";
echo "<h3>Hello</h3>";
$nom = "Alexis";
$age = 1;
$travail = "dev";
// <----- Commentaire
echo "<p> bonjour $nom vous avez $age et travail $travail</p>";

$nombre1 = 1;
$nombre2 = 5;

echo "<p> je suis agée de $nombre1 et ma soeur $nombre2";

$result = $nombre1 + $nombre2;
echo "<p> addition de $nombre1 et $nombre2 est egal a $result";

$chaine = "Ceci est le titre de mon site";

$bool = true;

$chaine2 = "c'est une seconde ligne de texte pour les tests CDA";

echo $chaine2[10];

var_dump($chaine, $nombre1,$bool);

//Remplacer un caractére
$chaine3 = "Manipules les chaines de caractéres";
$chaine3[0] = "C";
echo $chaine3;

$ligne = "Encore une ligne de texte";
var_dump(substr($ligne,0,4));

//Remplacer une partie de mot
$linea = "Manipuler les chaines";
$linea = str_replace('Manipuler','Modifier', $linea);
echo $linea;

$linea = str_ireplace('Les', 'd\'autres', $linea);
var_dump($linea);

?>