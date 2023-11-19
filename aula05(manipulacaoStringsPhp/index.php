<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
        $nome = "JanCarneiro";
        echo "Olá $nome \n";
        echo 'Olá $nome';
        const ESTADO = "RJ ";
        echo "Moro no ESTADO \t"; 
        echo "Moro no \\ ".ESTADO;
        echo "Estamos no ano de ".date('Y'); //função para atualização do ano

        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom 'Minotauro' $snom \n";
        echo "$nom \"Minotauro\" $snom \$"; //sequência de escape
    ?>
</body>
</html>