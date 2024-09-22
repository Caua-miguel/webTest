<?php

    // Exercício 1

    $nome = "Cauã Miguel";
    $idade = 22;

    echo "Eu sou " . $nome . " e tenho " . $idade . " anos <br>";

    // Exercício 2

    $linguagem = "PHP";
    echo "Programar em " . $linguagem . " é muito legal!<br>";
    echo 'Programar em $linguagem é muito legal!<br>';

    /*
    Qual a diferença entre a utilização de aspas simples e aspas duplas?

        Com aspas simples ele imprime literalmente a mensagem, ignorando a variável e printando
        o nome da variável em vez do valor dela.

    */

    // Exerício 3

    $id = "fruta";
    $fruta = "laranja";

    echo $id."<br>";
    echo $$id."<br>";

    /*

        Nesse trecho vai ser impresso a palavra fruta e logo abaixo a palavra laranja
        por conta da propriedade do php que faz com que possa existir uma variável de
        variável.

    */

    // Exerício 4

    echo "I'm the best PHP programmer in the World!<br>";

    // Exerício 5

    $a = 10;
    $b = "20";
    echo $a + $b."<br>"; # 30

    $a = "10";
    $b = "20";
    echo $a + $b."<br>"; # 30

    $a = "10";
    $b = "20 vinte";
    echo $a + $b."<br>"; # 30

//    $a = 10;
//    $b = "vinte 20";
//    echo $a + $b."<br>"; # Erro int + String

    $a = "10";
    $b = "20 <br>";
    echo $a . $b; # 1020

    /*
        O que você conclui após executar cada trecho de código e verificar o resultado?

        Ponto concatena e "+" soma, independente de ser String, como não é bem tipado ele soma
        int e String. Contanto que ambos sejam inteiros. Se for palavra mais numero vai dar erro.

    */

    // Exerício 6

    $estado = ["PR" => "Paraná", "SC" => "Santa Catarina", "RS" => "Rio Grande do Sul"];

    // Exerício 7 e 8
    # Está no arquivo "TesteDinamico.php"

    // Exerício 9
    # Está no arquivo "Galeria.php"

