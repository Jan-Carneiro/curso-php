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
        $minimo = 1_380.60; //esse underline cria o ponto das milhares
        $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu Salário</h1>
        <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01"> <!--step esta configurando o número para casas decimais-->
            <p>Considerando o salário mínimo de R$ <strong><?=number_format($minimo,2,",",".")?></strong></p>
            <input type="submit" value="Calcular">     
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario,$minimo);
            $dif = $salario % $minimo;
            echo "<p>Ganha $tot salários mínimos + R$".number_format($dif,2,",",".").".</p>"

        ?>
    </section>
</body>
</html>