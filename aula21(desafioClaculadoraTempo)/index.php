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
        $segundo = $_GET['seg'] ;
    ?>
    <main>
        <h1>CALCULADORA DE TEMPO</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$segundo?>" min="0" step="1" required >
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $semanas = $segundo/604800;
            $semanas_inteiro = intval($semanas);
            $semanas_decimal = $semanas - floor($semanas);
            
            $dias = 7 * $semanas_decimal;
            $dias_inteiro = intval($dias);
            $dias_decimal = $dias - floor($dias);

            $horas = 24 * $dias_decimal;
            $horas_inteiro = intval($horas);
            $horas_decimal = $horas - floor($horas);

            $minutos = 60 * $horas_decimal;
            $minutos_inteiro = intval($minutos);
            $minutos_decimal = $minutos - floor ($minutos);
            
            $segundos = 60 * $minutos_decimal;
            $segundos_inteiro = intval($segundos);

        ?>
       <h1>TOTALIZANDO TUDO</h1>
       <p>Analisando o valor que você digitou, <?=number_format($segundo,0,',','.')?> segundos equivale a um total de:</p>
       <ul>
        <li><?=$semanas_inteiro?> semana(s)</li>
        <li><?=$dias_inteiro?> dia(s)</li>
        <li><?=$horas_inteiro?> horas</li>
        <li><?=$minutos_inteiro?> minuto(s)</li>
        <li><?=$segundos_inteiro?> segundos</li>
       </ul> 
    </section>
</body>
</html>