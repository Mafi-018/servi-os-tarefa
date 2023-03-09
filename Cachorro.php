<?php 

class Cachorro extends Animal implements AnimalInterface {

    public function __construct($nome, $raca, $idade, $cor) {
        parent::__construct($nome, $raca, $idade, $cor);
    }

    public function falar() {
        echo "O cachorro fala: Au Au Au <br>";
    }

    public function andar() {
        echo "O cachorro anda: 4 patas <br>";
    }

    public function comer() {
        echo "O cachorro come: Ração <br>";
    }
}
