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
        $atual = date("Y");
        $ano = $atual; //ano atual
        $nasc = $_GET['nasc'] ?? '2000'; //ano que nasceu
        $anoSaber = $_GET['ano'] ?? $atual; //ano que quer saber a idade
        $idade = $anoSaber - $nasc;

    ?>
    <main>
        <h1>CALCULANDO A SUA IDADE</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$ano?>" value="<?=$nasc?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <?=$atual?>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$anoSaber?>" >
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>RESULTADO</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <?=$idade?> anos em <?=$anoSaber?>  </p>
    </section>
      
</body>
</html>