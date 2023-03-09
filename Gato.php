<?php 

class Gato extends Animal implements AnimalInterface {

    public function __construct($nome, $raca, $idade, $cor) {
        parent::__construct($nome, $raca, $idade, $cor);
    }

    public function falar() {
        echo "O gato fala: Miau Miau Miau <br>";
    }

    public function andar() {
        echo "O gato anda: 4 patas <br>";
    }

    public function comer() {
        echo "O gato come: Ração <br>";
    }
}