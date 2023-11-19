<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
        
        <main>
            <h1>CONVERSOR DE MOEDAS</h1>
            <?php
                //formatacao de moedas com internacionalização. Biblioteca intl, Internalization PHP
                $cotacao = 5.17;
                $real = $_GET["din"] ?? 0;
                $dolar = $real / $cotacao;
                echo "Seus R\$".number_format($real,2,",",".")." equivalem a US\$".number_format($dolar,2,",","."); //formatação com 2 casas decimais "":separador de decimal; "":separador de milhar

                
            
                //$padrao = numfmt_create("pt_BR", NumberFormatter:: CURRENCY); //"pt_BR": como a moeda é vista no determinado país
            
                //echo "Seus ". numfmt_format_currency($padrao, $real, "BRL"). "equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
                //($padrao, $real, "BRL"): a função será para o valor dado em real, sendo uma moeda brasileira. ($padrao, $dolar, "USD"): a função será para o valor gerado em dólar, sendo a moeda dolar
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
        
    
    
    
</body>
</html>