<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("diadasemana", "SEGUNDA", time() + 3600); //configurando o cookie. Esse cookie durará do momento atual + 3600 segundos. ["diadasemana"] => "SEGUNDA"

                session_start();
                $_SESSION["teste"]= "FUNCIONOU";
                
                echo "<h1>SuperGlobal GET</h1>";
                var_dump($_GET);

                echo "<h1>SuperGlobal POST</h1>";
                var_dump($_POST);

                echo "<h1>SuperGlobal Request</h1>";
                var_dump($_REQUEST);
                
                echo "<h1>SuperGlobal Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>SuperGlobal Session</h1>";
                var_dump($_SESSION);

                echo "<h1>SuperGlobal Env</h1>";
                var_dump($_ENV);

                echo "<h1>SuperGlobal Server</h1>";
                var_dump($_SERVER);

                echo "<h1>SuperGlobal globals</h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
    </main>
</body>
</html>