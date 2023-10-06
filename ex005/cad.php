<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome"; // ?? operador de coalescência nulo, se não receber nada, ele atribui um valor padrão especificado
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "É um prazer te conhecer <strong>$nome $sobrenome</strong>, este é um teste !"; // strong deixa em negrito
            //var_dump($_GET); // $_REQUEST = junção de $_GET, $_POST e $_COOKIES
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>