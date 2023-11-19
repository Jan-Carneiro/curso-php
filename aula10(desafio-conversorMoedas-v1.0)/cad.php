<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="color: white;font-size: 24px;">
        <h1>RESULTADO FINAL</h1>
    </header>
    <section>
        <h1>CONVERSOR DE MOEDAS V-1.0</h1>
        <?php 
            //var_dump($_GET);
            $moedaRealString = $_GET["valor_reais"];
            $moedaRealFloat = floatval($moedaRealString);
            $moedaDolar = $moedaRealFloat / 5.14;
            $moedaDolarFormatada = number_format($moedaDolar, 2);
            echo "Seus R$ $moedaRealFloat equivale a US$ $moedaDolarFormatada."
            
        ?>
        <p>Cotação do dólar atual: R$ 5,14</p>
        <p><a href="index.html">Voltar</a></p>
    </section>
    
    
</body>
</html>