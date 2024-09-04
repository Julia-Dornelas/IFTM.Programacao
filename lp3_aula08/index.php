<?php

require_once "Cachorro.php";

$c1 = new Cachorro();

$c1->nome = "Paulão";
$c1->raca = "Pinscher";
$c1->corPelo = "Preto";
$c1->peso = "1 Kg";
$c1->porte = "Grandão";

$c1->dormir();

$c2 = new Cachorro();

$c2->nome = "Paulinho";
$c2->raca = "Pastpr Alemão";
$c2->corPelo = "Braco";
$c2->peso = "100 Kg";
$c2->porte = "Pequeno";

$c2->dormir();



