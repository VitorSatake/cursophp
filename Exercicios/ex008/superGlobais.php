<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time()+3600); //adiciona um cookie, por uma hora, 3600 segundos

                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal Request</h1>";
                var_dump($_REQUEST); // unifica em um unico array os dados recebidos de get e post

                // superglobais : $_GET, $_POST, $_REQUEST, $_COOKIE, $_FILES, $_SESSION, $_ENV, $_SERVER, $GLOBALS

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);
                
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS); // junta todas as superGlobais
            ?>
        </pre>
    </main>
</body>
</html>