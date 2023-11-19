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
        <?php 
            //var_dump($_GET);
            $num = $_GET["numero"]; //string
            $numInt = (int)$num; //inteiro
            $numAnt = $numInt - 1;
            $numSuc = $numInt + 1;
            echo "O número escolhido foi o $numInt <br>";
            echo "O antecessor deste número é o $numAnt <br>";
            echo "O sucessor deste número é o $numSuc";   
        ?>
        <p><a href="index.html">Voltar</a></p>
    </section>
    
    
</body>
</html>