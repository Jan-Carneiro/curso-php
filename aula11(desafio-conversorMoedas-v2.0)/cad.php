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
            $moedaDolar = $moedaRealFloat / 5.14; //aqui, colocarei a cotação do dólar que pegarei no site do BACEN
            $moedaDolarFormatada = number_format($moedaDolar, 2);
            echo "Seus R$ $moedaRealFloat equivale a US$ $moedaDolarFormatada";

            $url =  'https://www.bcb.gov.br/estabilidadefinanceira/historicocotacoes'; 
            //acesso o url do site

            $curl = curl_init($url);
            //acesso a biblioteca

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            //configuração da curl
            
            $response = curl_exec($curl);
            //executa a solicitação cURL

            if ($response === false) {
                die('Erro ao acessar a página do BACEN: ' . curl_error($curl));
            }
            //verifica se a solicitação foi bem sucedida

            curl_close($curl);
            //fecha a sessão cURL

            $dom = new DOMDocument;
            @$dom->loadHTML($response);
            //carrego o htlm da página

            $xpath = new DOMXPath($dom);
            $query = '//div[contains(@class, "conteudo-container")]//tr[1]/td[5]';
            $node = $xpath->query($query)->item(0);
            //procura o elemento que contém a cotação dólar

            if ($node) {
                $cotacaoDolar = trim($node->textContent);
                echo "Cotação do dólar atual: R$ $cotacaoDolar";
            } else {
                echo 'Cotação do dólar não encontrada.';
            }


        ?>
        <p>Cotação do dólar atual: R$ 5,14</p>
        <p><a href="index.html">Voltar</a></p>
    </section>
    
    
</body>
</html>