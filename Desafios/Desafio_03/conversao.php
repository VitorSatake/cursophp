<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // cotação copiada do google
            $cotacao = 5.17;

            // quanto $$ você tem ?
            $real = $_REQUEST["din"] ?? 0; // atribui a variavel $real o valor recebido de din

            // equivalencia em dolar
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //deixa como padrao a visaulização de moedas internacionais no Brasil

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") // pede para exibir no formato brasileiro de moeda 
            . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "." . "</p>"; // pede para exibir no formato americano de moeda

        ?>
        <br/><br/>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>