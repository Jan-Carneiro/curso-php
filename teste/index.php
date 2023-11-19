<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1302;
        $salario = $_GET['sal'] ?? 0;
        $quantidadeSal = intdiv($salario,$minimo);
        $quantidadeSobra = $salario % $minimo;
    ?>
    <main>
        <h1>INFORME O SEU SALÁRIO</h1>
        <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$):</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de R$ <?=number_format($minimo,2,",",".")?> </p>
            <input type="submit" value="Calcular">
        </form>
   </main>
   <section>
    <h2>RESULTADO FINAL</h2>
    <p>Quem recebe um salário de R$ <?=number_format($salario,2,",",".")?>, ganha <?=$quantidadeSal?> salários mínimos + R$ <?=number_format($quantidadeSobra,2,",",".")?>   </p>
   </section>
</body>
</html>