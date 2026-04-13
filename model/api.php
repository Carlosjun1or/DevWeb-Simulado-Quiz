<?php

// traduz um texto de inglês para português usando a MyMemory API
function traduzir($texto)
{
    $url = "https://api.mymemory.translated.net/get?q=" . urlencode($texto) . "&langpair=en|pt-BR";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $resposta = curl_exec($ch);
    curl_close($ch);

    $dados = json_decode($resposta, true);
    return $dados['responseData']['translatedText'] ?? $texto; // se falhar, retorna o original
}

// busca uma frase motivacional na ZenQuotes (Retorno: [{"q": "frase", "a": "autor"}]) e traduz para pt-BR
function buscarFraseMotivacional()
{
    $ch = curl_init("https://zenquotes.io/api/random");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $resposta = curl_exec($ch);
    $erro = curl_error($ch);
    curl_close($ch);

    // se a API falhar, usa uma frase padrão
    if ($erro || !$resposta) {
        return ["frase" => "Continue tentando, o esforço sempre vale a pena.", "autor" => "Provérbio"];
    }

    $dados = json_decode($resposta, true);
    return [
        "frase" => traduzir($dados[0]['q']),
        "autor" => $dados[0]['a']
    ];
}
?>