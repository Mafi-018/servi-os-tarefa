<?php 

include("AnimalInterface.php");
include("Animal.php");
include("Cachorro.php");
include("Gato.php");

$cao = new Cachorro(
    "Totó",
    "Vira-lata",
    5,
    "Caramelo"
);

$gato = new Gato(
    "Mingau",
    "Vira-lata",
    3,
    "Branco"
);

$cao->falar(); // O animal fala
$cao->andar();
$cao->comer();


$gato->falar(); // O animal fala
$gato->andar();

echo "O doguinho chama: " . $cao->getNome() . "<br>";