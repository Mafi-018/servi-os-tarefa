<?php 

class Servico {
    private $Nome;
    private $Valor;
    private $Descricao;


    public function __construct($Nome, $Valor, $Descricao,) {
        $this->Nome = $Nome;
        $this->Valor = $Valor;
        $this->Descricao = $Descricao;
    }

    public function getnome() {
        return $this->Nome;
    }
    
    public function getvalor() {
        return $this->Valor;
    }

    public function getdescricao() {
        return $this->Descricao;
    }

    
}

