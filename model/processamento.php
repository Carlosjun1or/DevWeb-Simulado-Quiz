<?php
$gabarito = [
    "q1"  => "b",
    "q2"  => "b",
    "q3"  => "b",
    "q4"  => "b",
    "q5"  => ["b", "c"],
    "q6"  => "c",
    "q7"  => "b",
    "q8"  => "b",
    "q9"  => "b",
    "q10" => "c",
    "q11" => "c",
    "q12" => "b",
    "q13" => "b",
    "q14" => "b",
    "q15" => "b",
    "q16" => "b",
    "q17" => ["a", "b"],
    "q18" => "b",
    "q19" => "b",
    "q20" => "a"
];

$pontuacao = 0;
for ($i = 1; $i <= 20; $i++) {
    if (isset($_POST["q$i"])) {
        if (is_array($gabarito["q$i"])) {
            $resp = $_POST["q$i"];
            sort($resp);
            sort($gabarito["q$i"]);
            if ($resp == $gabarito["q$i"]) $pontuacao++;
        } else {
            if ($_POST["q$i"] == $gabarito["q$i"]) $pontuacao++;
        }
    }
}

function resultado($pontuacao) {
    if ($pontuacao <= 10) {
        $msg = "Você precisa revisar os conteúdos e tentar novamente.";
    } elseif ($pontuacao <= 17) {
        $msg = "Quase lá! Continue praticando para melhorar ainda mais.";
    } else {
        $msg = "Excelente! Você demonstrou domínio completo do conteúdo.";
    }

    return "
        <div class='pontuacao-badge'>
            <span class='pontuacao'>{$pontuacao}/20</span>
        </div>
        <hr class='divisor'>
        <p class='msg-resultado'>{$msg}</p>
    ";
}
?>