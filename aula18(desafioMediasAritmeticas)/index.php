<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? "";
        $peso1 = $_GET['p1'] ?? "";
        $valor2 = $_GET['v2'] ?? "";
        $peso2 = $_GET['p2'] ?? "";
        $media = ($valor1 + $valor2)/2 ;
        $ponderada = (($peso1*$valor1)+($peso2*$valor2))/($peso1+$peso2) ;
    ?>
    <main>
        <h1>MÉDIAS ARITMÉTICAS</h1>
        <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="p1">1º peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="v2">2º valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="p2">2º peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
            
               
        </form>
    </main>
    <section>
        <h2>CÁLCULO DAS MÉDIAS</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?> </p>
        <ul>
            <li>A média aritmética simples entre os valores é igual a <strong><?=$media?></strong> </li>
            <li>A média aritmética ponderada com pesos <strong><?=$peso1?></strong> e <strong><?=$peso2?></strong> é igual a <strong><?=$ponderada?></strong></li>
        </ul>        
    </section>
</body>
</html>