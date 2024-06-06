<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Economia de Energia Solar</title>
    <style>
        body {
            background-color: #003366;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            text-align: center;
        }

        h2 {
            text-align: center;
            font-size: 24px;
        }

        p {
            font-size: 18px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #ffcc00, #ff9900);
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-button:hover {
            background: linear-gradient(45deg, #ff9900, #ffcc00);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Resultado da Economia de Energia Solar</h2>
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

        echo "<p>Para o consumo de $consumo_kw KW e custo da fatura de R$ $custo_fatura, o investimento em uma placa de energia solar será recuperado em aproximadamente $tempo_recuperacao_meses meses.</p>";
    ?>
    <a href="index.html" class="back-button">Voltar</a>
</div>

</body>
</html>
