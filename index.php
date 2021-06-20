<?php
    require("classes/treinador.class.php");
    require("classes/pokemon.class.php");

    $treinador1 = new Treinador("Ash", 10);
    $pokemons[0] = new Pokemon("Pikachu", "Elétrico", 400);
    $pokemons[1] = new Pokemon("Charizard", "Fogo", 500);
    $pokemons[2] = new Pokemon("Squirtle", "Agua", 400);
    $treinador1->inserirPokemons($pokemons[0], $pokemons[1], $pokemons[2]);

    $treinador2 = new Treinador("Misty", 10);
    $pokemons[0] = new Pokemon("Starmie", "Agua", 100);
    $pokemons[1] = new Pokemon("Horsea", "Agua", 300);
    $pokemons[2] = new Pokemon("Gyarados", "Dragão", 800);
    $treinador2->inserirPokemons($pokemons[0], $pokemons[1], $pokemons[2]);

    $treinador1->fight($treinador2);
    


