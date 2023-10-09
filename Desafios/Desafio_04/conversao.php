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
            // cotação vinda da API do banco central
            $inicio = date("m-d-Y", strtotime("-7 days")); // paga a data meos 7 dias para inicar a contagem
            $fim = date("m-d-Y"); // pega a data atual
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // vai ser atualizado automaticamente independente do dia que rodar, com data de inicio 7 dias antes da data atual

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // quanto $$ você tem ?
            $real = $_REQUEST["din"] ?? 0; // atribui a variavel $real o valor recebido de din

            // equivalencia em dolar
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //deixa como padrao a visaulização de moedas internacionais no Brasil

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") // pede para exibir no formato brasileiro de moeda 
            . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "." . "<strong></p>"; // pede para exibir no formato americano de moeda

        ?>
        <br/><br/>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>