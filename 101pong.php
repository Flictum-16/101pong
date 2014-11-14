<?php

//vecteur vitesse

if (count($argv) != 8)
{
   echo "Syntax Error\nUsage : Entrez les paramètres suivant : x(a) y(a) z(a) x(b) y(b) z(b) t";
   exit(0);
}

$xv = ($argv[4] - $argv[1]);
$yv = ($argv[5] - $argv[2]);
$zv = ($argv[6] - $argv[3]);

if (pow($xv,2) + pow($yv,2) + pow($zv,2) == 0)
{   
    echo "Les coordonnées du vecteur vitesse sont nulles";
    exit(1);
}
echo "Les coordonnées du vecteur vitesse sont ($xv; $yv; $zv).\n";

// coordonnées position

$vectorv = array();
$vectorv[0] = $argv[4];
$vectorv[1] = $argv[5];
$vectorv[2] = $argv[6];
for ($i = 0; $i < $argv[7]; $i++)
{
	$vectorv[0] = $vectorv[0] + ($argv[4] - $argv[1]);
	$vectorv[1] = $vectorv[1] + ($argv[5] - $argv[2]);
	$vectorv[2] = $vectorv[2] + ($argv[6] - $argv[3]);
}
echo "A l'instant t+".$argv[7].", les coordonnées de la balle seront (".$vectorv[0].";".$vectorv[1].";".$vectorv[2].").\n";

// angle d'incidence

$resultat = sqrt(pow(-($argv[5] - $argv[2]), 2) + pow(($argv[4] - $argv[1]), 2));

$resultat = $resultat / sqrt(pow(($argv[4] - $argv[1]), 2) + pow(($argv[5] - $argv[2]), 2) + pow(($argv[6] - $argv[3]), 2));

echo "L'angle d'incidence est de " . round((acos($resultat) * 57.295779), 2) . " degrés.\n";

?>