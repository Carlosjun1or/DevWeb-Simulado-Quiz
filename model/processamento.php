<?php

$gabarito = [
    "q1" => "b",
    "q2" => "b",
    "q3" => "b",
    "q4" => "b",
    "q5" => ["b","c"],
    "q6" => "c",
    "q7" => "b",
    "q8" => "b",
    "q9" => "b",
    "q10" => "c",
    "q11" => "c",
    "q12" => "b",
    "q13" => "b",
    "q14" => "b",
    "q15" => "b",
    "q16" => "b",
    "q17" => ["a","b"],
    "q18" => "b",
    "q19" => "b",
    "q20" => "a"
];

//verificação das respostas
$pontuacao = 0;
for ($i = 1; $i <= 20; $i++) {
    if(isset($_POST["q$i"])){
        if(is_array($gabarito["q$i"])){
            $resp = $_POST["q$i"];
            sort($resp);
            sort($gabarito["q$i"]);
            if($resp == $gabarito["q$i"]){
                $pontuacao++;
            }
        }else{
            if($_POST["q$i"] == $gabarito["q$i"]){
                $pontuacao++;
            }
        }
    }
}
// Função de feedback
function resultado($pontuacao){
    if($pontuacao <= 10){
    return "Sua pontuação é: " . $pontuacao . ". Você precisa revisar os conteúdos e tentar novamente.";
    }elseif($pontuacao <= 17){
        return "Sua pontuação é: " . $pontuacao . ". Bom resultado! Continue praticando para melhorar ainda mais.";
    } else {
        return "Sua pontuação é: " . $pontuacao . ". Parabéns! Você demonstrou excelente domínio do conteúdo.";
    }
}
?>