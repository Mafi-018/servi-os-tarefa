<?php 

class Animal {
    private $nome;
    private $raca;
    private $idade;
    private $cor;

    public function __construct($nome, $raca, $idade, $cor) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->cor = $cor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCor() {
        return $this->cor;
    }

    public function falar() {
        echo "O animal fala";
    }
}