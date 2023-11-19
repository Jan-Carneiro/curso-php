<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Contantes</title>
</head>
<body>
    <?php 
        $nome = "Jan";
        $sobrenome = "Carneiro";
        const PAIS = "Brasil";
        echo "Muito prazer, $nome $sobrenome! Você mora no ".PAIS. "<br>";

        $idade = 43 ; //inteiro
        $peso = 118.5 ; //real
        $casado = false ; //bouleano
        const CURSO = "TI";//não pode ser alterado 
        echo "Tenho $idade anos, peso $peso Kg e faço curso de".CURSO. "<br>";
    ?>
    
</body>
</html>