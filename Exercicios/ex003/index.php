<?php 
    $nome = "Joao";
    $sobrenome = "Almeida";
    echo "Muito prazer, $nome $sobrenome";

    $nome = "Pedro"; // atribuição de novo valor a variavel nome
    echo " Muito prazer, $nome $sobrenome";
    
    const PAIS = "Barsil"; // constantes não usam o $, e não podem ser alteradas durante a alteração do programa, escreve com letras maiusculas
    echo " Muito prazer, $nome $sobrenome! Você mora no " . PAIS;

    /*
    Regras para nomes identificadores:
        variaveis sempre comçam com  o simbolo $
        o segundo pode ser letra ou o simbolo _
        do terceiro caracter em diante aceita caracteres de a-z, A-Z, 0-9 e _
        aceita caracteres da tabela ASCII a partir de 128
        aceita caracteres acentuados como á, õ , ç
        a linguagem é case sensitive em relação aos nomes
        nomes especiais como $this não podem ser usados
    */

    /*
    Recomendações para dar nomes:
        tente dar nomes claros e de fácil identificação
        evite nomes muito curtos ou muito longos
        defina um padrão de nomeação e siga em todo o projeto
        para variáveis, de preferencia a letras minusculas
        para constantes, de preferencia a letras maiusculas
        use camelCase para métodos e atributos
        use SNAKE_CASE para nomear constantes
    */
    ?>

    