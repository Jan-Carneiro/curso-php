<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                //var_dump($_GET);
                $num = $_GET["numero"] ?? 0; //string ?? 0, indica, se o numero não vinher, será colocado o valor 0
                $numAnt = $num - 1;
                $numSuc = $num + 1;
                echo "O número escolhido foi o <strong>$num</strong> <br>";
                echo "O antecessor deste número é o <em>$numAnt</em> <br>";
                echo "O sucessor deste número é o <em>$numSuc</em>";
            ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>    
        </p> 
        
    </main>
    
    
    
</body>
</html>