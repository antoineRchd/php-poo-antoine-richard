<?php

require_once "../src/Controller/PoissonController.php";
require_once "../src/Controller/SingeController.php";

$singe1 = new Singe("Bobo", ["noir", "blanc"]);
$singe2 = new Singe("Loulou", ["roux", "marron"]);

$poisson1 = new Poisson("Nemo",["orange", "blanc"]);
$poisson2 = new Poisson("Dory",["jaune", "bleu"]);

var_dump($singe1, $singe2, $poisson1, $poisson2);
?>