<?php

class Pokemon{
    public $nome;
    public $tipo;
    public $poder;

    public function __construct($nome, $tipo, $poder){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->poder = $poder;
    }

}