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
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;//se não passar nada, o valor do divisor será 1, buscando não alterar o vlor da divisão
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="d1">Dividendo:</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>" >
        <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente = intdiv($dividendo,$divisor);
            $resto = $dividendo % $divisor;
            
            //echo "<ul>";
            //echo "<li>Dividendo: $dividendo</li>";
            //echo "<li>Divisor: $divisor</li>";
            //echo "<li>Quociente: $quociente</li>";
            //echo "<li>Resto: $resto</li>";
            //echo "</ul>";
        
        ?>
        <!--faremos em forma de tabela-->
        <table class="divisao">
            <tr> <!--são as linhas-->
                <td><?=$dividendo?></td> <!--céculas de dados dentro de uma linha-->
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>
