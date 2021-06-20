<?php 

class Treinador{
    public $nome;
    public $idade;
    public $pokemons;
    
    public function __construct($nome, $idade, $pokemons = array()){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->pokemons = $pokemons;
    }
    
    public function inserirPokemons($pokemon1, $pokemon2, $pokemon3){
        $this->pokemons[0] = $pokemon1;
        $this->pokemons[1] = $pokemon2;
        $this->pokemons[2] = $pokemon3;
    }
    public function fight($treinador){

        $pts = 3;
        for ($i = 0; $i < 3; $i++) { 
            if($this->pokemons[$i]->poder > $treinador->pokemons[$i]->poder){
                echo $this->nome."</br>";
            }else{
                echo $treinador->nome."</br>";
                $pts--;
            }
        }
        if($pts >= 2){
            echo $this->nome." Ganha o duelo";
        }else{
            echo $treinador->nome." Ganha o duelo";
        }
    }

}