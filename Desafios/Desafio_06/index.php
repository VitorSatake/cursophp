<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["d1"] ?? 0;
        $divisor = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 

            // Calculos
            //$quociente = (int) ($dividendo / $divisor); // pega só a ou parte inteira da divisão
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            /*
            echo "<ul>"; // abre a lista
            echo "<li>Dividendo: $dividendo</li>"; // mostra cada item da lista
            echo "<li>Divisor: $divisor</li>"; // mostra cada item da lista
            echo "<li>Quociente: $quociente</li>"; // mostra cada item da lista
            echo "<li>Resto: $resto</li>"; // mostra cada item da lista
            echo "</ul>"; // fecha a lista
            */
        ?>
        
        <table class="divisao">
            <tr> <!--linhas-->
                <td><?=$dividendo?></td> <!--celulas-->
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>