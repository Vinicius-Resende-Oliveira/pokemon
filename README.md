Desafio MC2 (Etapa 1)

⇒ Descrição da atividade:

Pokémon são monstros que vivem nos matinhos dos jogos de Gameboy, e são capturados por seus treinadores. Eventualmente, treinadores Pokémon se encontram e duelam, fazendo seus Pokémon lutarem entre si (o que poderia ser considerado crime ambiental (rinha), portanto não façam isso).

Sua missão é escrever um programa utilizando orientação a objetos (OOP), que simule a luta entre dois treinadores Pokémon e decida qual dos dois vai ganhar a luta. As regras para o programa estão descritas abaixo.



⇒ Um Treinador é caracterizado pelos seguintes atributos:

Nome (string)
Idade (int)
Pokémon 1
Pokémon 2
Pokémon 3
⇒ Cada Pokémon é caracterizado pelos seguintes atributos:

Nome (string)
Tipo (string)
Poder (int)


⇒ Regras das batalhas:

Em um duelo entre treinadores, os Pokémon 1, 2 e 3 lutam entre si, e o ganhador é aquele que ganhar mais lutas. Para decidir qual Pokémon ganha a luta, compara-se seus poderes, o Pokémon com maior poder ganha a luta.

Você deverá implementar duas classes (Treinador e Pokemon), e deverá instanciar dois jogadores. Deverá então ler o nome, idade e os dados (nome, tipo e poder) de cada um dos Pokémon de cada jogador.

 

⇒ Resultado esperado:

A saída deve conter o nome do jogador que ganha cada rodada e por fim uma string informando qual jogador ganhou o duelo. Considere que não há empates.

# Exemplo de entrada:

Ash
10
Pikachu
Elétrico
400
Charizard
Fogo
500
Squirtle
Água
400

Misty
10
Starmie
Água
100
Horsea
Água
300
Gyarados
Dragão
800

 

# Exemplo de saída:

Ash
Ash
Misty

Ash ganha o duelo