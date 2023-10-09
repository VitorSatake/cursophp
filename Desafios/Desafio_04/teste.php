<pre>
<?php 

    $inicio = date("m-d-Y", strtotime("-7 days")); // paga a data meos 7 dias para inicar a contagem
    $fim = date("m-d-Y"); // pega a data atual
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // vai ser atualizado automaticamente independente do dia que rodar, com data de inicio 7 dias antes da data atual

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];
    echo "A cotação foi $cotacao";
?>
</pre>