<?php 
// ex1_bases
#ex1 PHP
/* ex1 PHP */
    echo 'hello PHP <br><br>';
?>
<?php
require 'config.php';

/* Exercice 1.1 : noms des variables
   $x       : valide (car il commence par une lettre)
   $_x      : valide (car il commence par un underscore)
   $2x      : INVALIDE (car il commence par un chiffre)
   $x-y     : INVALIDE (car le tiret est interprété comme l'opérateur moins)
   $Prix_HT : valide (car il contient des lettres, majuscules et underscore autorisés)
   $prix ht : INVALIDE (car l'espace n'est pas autorisé dans un variable)
   $état    : valide (car PHP accepte les caractères accentués)
*/

$x = 1;
$_x = 2;
$Prix_HT = 100;
$état = "actif";

echo "x = $x, _x = $_x, Prix_HT = $Prix_HT, état = $état <br>";

// $a et $A sont distinctes car PHP est sensible à la casse pour les variables
$a = "minuscule";
$A = "MAJUSCULE";
echo "a = $a <br>";
echo "A = $A <br>";
var_dump($a === $A);
echo "<br><br>";

// Exercice 1.2 : constantes
echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "NOTE_MIN : " . NOTE_MIN . "<br>";
echo "NOTE_MAX : " . NOTE_MAX . "<br>";
echo "SEUIL : " . SEUIL . "<br>";

echo "defined('SEUIL') : ";
var_dump(defined('SEUIL'));
echo "<br>";

echo "defined('INCONNUE') : ";
var_dump(defined('INCONNUE'));
echo "<br>";

/* Q1 : Que se passe-t-il si on affiche une constante non définie ?
    une Error est levée ("Undefined constant") et le script s'arrête.
   

   Q2 : Différence entre const et define() ?
   - const est évalué à la compilation, define() à l'exécution.
   - const doit être au niveau global (pas dans un if, une boucle ou une fonction),
     alors que define() peut être appelé n'importe où, par exemple dans un if.
   - const peut aussi servir à déclarer des constantes de classe.
*/

$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);

echo "Le prix TTC du produit est de $prix_ttc €.<br>";

$test = 42;
$test = (string) $test;
var_dump($test);
echo "<br>";

echo "<pre>";
var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);

var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);
echo "</pre>";

echo 255 . "<br>";
echo 0xFF . "<br>";
echo 0377 . "<br>";
echo 0b11111111 . "<br>";

$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"' . "<br>";
echo 'Voulez-vous supprimer C:\*.*?' . "<br>";
echo 'Ceci n\'affichera pas \n de nouvelle ligne' . "<br>";
echo 'Les variables ne seront pas $traitees $ici' . "<br>";
echo "Les variables seront $traitees $ici<br>";

$phrase = "*Bonjour les développeurs*";
$propre = trim($phrase, "*");
echo $propre . "<br>";

for ($i = 0; $i < strlen($propre); $i++) {
    echo $propre[$i] . "<br>";
}

for ($i = 0; $i < mb_strlen($propre); $i++) {
    echo mb_substr($propre, $i, 1) . "<br>";
}
?>