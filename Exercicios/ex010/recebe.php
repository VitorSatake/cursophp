<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>A soma é:</h2>
        <section>
        <?php 
        $num1 = $_GET['num1'] ?? 0;
        $num2 = $_GET['num2'] ?? 0;

        $soma = $num1 + $num2;

        echo "A soma de $num1 + $num2 é igual a $soma."

        ?>
        </section>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>

