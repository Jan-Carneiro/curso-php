<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Area de declaracoes
        $numero = $_GET['num'] ?? 0;
        $quadrada = sqrt($numero);
        $cubica = $numero ** (1/3);
    ?>
    <main>
        <h1>INFORME UM NÚMERO</h1>
        <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="Número">Número:</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>RESULTADO FINAL</h2>
        <p>Analisando o número <strong><?=$numero?></strong> , temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($quadrada,2,'.','')?></strong>  </li>
            <li>A sua raiz cúbica é <strong><?=number_format($cubica,2,'.','')?></strong> </li>
            
        </ul>
    </section>
</body>
</html>