<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP Número Randomico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>.</p>";
            echo "<p>O número gerado foi <strong>$num</strong>.</p>";
            
            /*
            Funções de geração de números aleatórios:
            rand() = descontinuada
            mt_rand() = melhor escolha
            rand_int() = gera números aleatórios criptograficamente seguros - mais lento
            */
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button> <!--Botao de atualizar a pagina para gerar outro numero-->
    </main>
</body>
</html>