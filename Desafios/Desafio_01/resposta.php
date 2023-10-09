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
            $num = $_REQUEST["num"] ?? 0; // atribui valor padaro de 0 caso nao seja inserido algum valor
            echo "<br/>O número escolhido foi <strong>$num</strong>.<br/>";
            $ant = $num - 1;
            echo "O seu antecessor é <strong>$ant </strong>.<br/>";
            $suc = $num + 1;
            echo "O seu sucessor é <strong>$suc</strong>.";
            //echo "O seu sucessor é " . $num + 1; outra forma sem precisar declarar outra variavel
        ?>
        <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>" botao de voltar em javascript--> 
        <br/><br/>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button> 
        
    </main>
</body>
</html>