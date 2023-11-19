<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <p>TRABALHANDO COM NÚMEROS ALEATÓRIOS</p>
    </header>
    <main>
        <p>Trabalhando com números aleatórios entre 0 e 100...</p>
        <?php 
            $min = 0;
            $max = 100;
            $numeroAleatorio = rand ($min,$max);
            echo "O valor aleatório gerado foi $numeroAleatorio";
        ?>
        <form action="" method="post">
            <input type="submit" name="reiniciar" value="Reiniciar">
        </form>
    </main>
    
</body>
</html>
