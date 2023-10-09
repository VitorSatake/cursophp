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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem numero";
            echo "<br/>O número escolhido foi <strong>$nome</strong>.<br/>";
            $ant = $nome - 1;
            echo "O seu antecessor é <strong>$ant </strong>.<br/>";
            $suc = $nome + 1;
            echo "O seu sucessor é <strong>$suc</strong>.";
            //echo "O seu sucessor é " . $nome + 1; outra forma sem precisar declarar outra variavel
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>