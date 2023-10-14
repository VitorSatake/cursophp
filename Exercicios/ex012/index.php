<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to website</title>
</head>
<body>
    <?php 
        include "header.php"; // incluindo a parte do header chamando do arquivo header
    ?>
    <?php 
        include "nav.php"; // incluindo a parte de nav chamando do arquivo header
    ?>
    <div>
        <h1>Main content area</h1>
    </div>

    <?php 
        include "footer.php";

        /*
        include = caso nao exista o arquivo chamado, aparece a mensagem de erro mas executa o restante depois

        require = caso nao exista o arquivo chamado, aparece a mensagem de erro e não executa o restante depois
        */
    ?>
</body>
</html>