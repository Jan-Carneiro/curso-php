<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="color: white;font-size: 24px;">
        <h1>RESULTADO FINAL</h1>
    </header>
    <section>
        <ul>
            <?php
                //var_dump($_GET);
                $numString = $_GET["numero"]; //string
                $numFloat = (float)$numString; //float
                echo " $numFloat";
                var_dump($numFloat);
            
            ?>
        </ul>
        <p><a href="index.html">Voltar</a></p>
    </section>
    
    
</body>
</html>