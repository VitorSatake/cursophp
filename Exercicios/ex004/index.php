<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
/*
Tipos primitivos:
    Categorias dos tipos primitivos:
        Escalares: string, int/integer, float/double, bool/boolean
        0x = hexadecimal , 0b = binario 0 = octal
        Compostos: array, object
        Especiais: null, resource, callabe, mixed     
*/
    //$num = 300;
    //echo "O valor da variavel é $num";

    //$v = 300;
    //var_dump($v); // função que mostra as informações sobre a variavel
    // coersão = forçar uma variavel a ser de outro tipo

    //$vet = [6,2,"maria",9,false,3,5]; // array
    //var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa; // objeto
    var_dump($p);

    ?>
</body>
</html>