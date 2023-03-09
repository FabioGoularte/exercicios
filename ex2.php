<?php
// Lendo os dados do arquivo JSON
$data = file_get_contents('faturamento.json');
$faturamento = json_decode($data, true);

// Calculando o menor e o maior valor de faturamento
$min = $faturamento[0];
$max = $faturamento[0];
foreach ($faturamento as $valor) {
    if ($valor < $min) {
        $min = $valor;
    }
    if ($valor > $max) {
        $max = $valor;
    }
}

// Calculando a média mensal
$soma = 0;
$diasComFaturamento = 0;
foreach ($faturamento as $valor) {
    $soma += $valor;
    if ($valor > 0) {
        $diasComFaturamento++;
    }
}
$media = $soma / $diasComFaturamento;

// Calculando o número de dias em que o valor de faturamento foi superior à média mensal
$diasAcimaDaMedia = 0;
foreach ($faturamento as $valor) {
    if ($valor > $media) {
        $diasAcimaDaMedia++;
    }
}

// Imprimindo os resultados
echo "Menor faturamento: $min \n";
echo "Maior faturamento: $max \n";
echo "Número de dias com faturamento acima da média: $diasAcimaDaMedia \n";
?>
Nessa implementação, primeiramente é feita a leitura dos dados do arquivo JSON contendo os valores de faturamento diário. Em seguida, é calculado o menor e o maior valor de faturamento percorrendo todos os valores do vetor. Depois, é calculada a média mensal ignorando os dias sem faturamento e, por fim, é contado o número de dias em que o valor de f



