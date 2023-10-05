<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // muda a timezone para Sao Paulo (GMT-3)
        echo "Hoje é dia ffffff" . date("d/M/Y"); // coloca dia mes e ano
        echo " e a hora atual é " . date("G:i:s"); // coloca hora minuto e segundo
    ?>
</body>
</html>