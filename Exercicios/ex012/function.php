<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
        // function teste() {
        //     echo "testando funções";
        
        // }

        // teste();

        function sum($a, $b){
            $add = $a + $b;
            //return $add; precisa do echo para executar depois ou
            echo $add; // ja coloca o echo dentro da função

        }

        sum(4,7);

        // overload de função , mesmo nome mas com parametros diferentes
    ?>
</body>
</html>