<?php 
    $aluno = array(
        array("nome" => "Renildo", "nota" => 95),
        array("nome" => "Estevão", "nota" => 88),
        array("nome" => "Ana", "nota" => 92),
        array("nome" => "Esther", "nota" => 97)
    );

    echo $aluno[0]["nome"] . " - " . $aluno[0]["nota"] . "<br>";
    echo $aluno[1]["nome"] . " - " . $aluno[1]["nota"] . "<br>";
    echo $aluno[2]["nome"] . " - " . $aluno[2]["nota"] . "<br>";
    echo $aluno[3]["nome"] . " - " . $aluno[3]["nota"];
?>