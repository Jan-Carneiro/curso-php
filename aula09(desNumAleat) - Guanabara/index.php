<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $numeroAleatorio = mt_rand ($min,$max);
            //$numeroAleatorio = random_int($min,$max); 
            
            //a função rand() utiliza uma tecnologia bem antiga, de 1951 chamada Linear Congrential Generator. Há outra mais moderna a mt_rand() que surgiu em 1997 chamada Mersene Twister, sendo 4x mais rápido do que a anterior. Segundo o manual, a partir do php 7.1, rand() é um simples apontamento para o mt_rand()
            //random_int() gera números aleatórios criptograficamente seguros. Ele é o mais lento de todos.
            
            echo "<p>Gerando um número aleatório entre $min e $max...<br> O valor gerado foi <strong>$numeroAleatorio</strong> </p>";
           
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
        
    </main>
    
</body>
</html>
