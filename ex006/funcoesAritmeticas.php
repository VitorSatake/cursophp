
<?php 
    // Funções Aritméticas do PHP
    $r = abs(500); // valor absoluto, o valor sem o sinal 
    echo "A resposta é <strong>$r</strong>";

    $r2 = base_convert(254, 10, 8); // coversosr de base, converter 254 da base 10 para a base 8
    echo "\nA resposta é <strong>$r2</strong>";

    $r3 = ceil(254.3); // arredonda para cima // floor() arredonda para baixo e round() arredondamento aritmética
    echo "\nA resposta é <strong>$r3</strong>";

    $r4 = hypot(35, 23); // calcula hypotenusa
    echo "\nA resposta é <strong>$r4</strong>";

    $r5 = intdiv(5, 2); // retorna a divisão inteira, não real
    echo "\nA resposta é <strong>$r5</strong>";

    $r6 = min(254, 10, 8); // retorna o valor minimo entre 254, 10, 8 // max() retorna o valor maximo
    echo "\nA resposta é <strong>$r6</strong>";

    $r7 = pi(); // retorna o valor de pi, ou M_PI é a constante de pi
    echo "\nA resposta é <strong>$r7</strong>";
    
    $r8 = pow(2, 3); // gera a potencia, ou 2 ** 2,  quando utiliza o pow(), vc perde a ordem de precedencia
    echo "\nA resposta é <strong>$r8</strong>";

    // sin() calcula o seno, cos() calcula o cosseno e tan() calcula a tangente

    $r9 = sqrt(81); // calcula a raiz quadrada
    echo "\nA resposta é <strong>$r9</strong>";

    // 81 ** (1/2) calcula raiz quadrada, 27 ** (1,3) calcula raiz cubica
?>