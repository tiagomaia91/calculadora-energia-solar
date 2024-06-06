<?php

// Dados do investimento e economia
$investimento = 10000; // Investimento em reais
$economia_mensal = 0.8; // 80% de economia mensal

// Dados fornecidos pelo usuário
$consumo_kw = $_POST['consumo_kw']; // Consumo mensal em KW
$custo_fatura = $_POST['custo_fatura']; // Custo mensal da fatura em reais

// Reduzir 80% do custo fornecido pelo usuário
$custo_com_desconto = $custo_fatura * (1 - $economia_mensal);

// Calcular economia mensal até atingir o investimento inicial
$economia_total = 0;
$tempo_recuperacao_meses = 0;
while ($economia_total < $investimento) {
    $economia_total += $custo_com_desconto;
    $tempo_recuperacao_meses++;
}

echo "Para o consumo de $consumo_kw KW e custo da fatura de R$ $custo_fatura, o investimento em uma placa de energia solar será recuperado em aproximadamente $tempo_recuperacao_meses meses.";

?>
