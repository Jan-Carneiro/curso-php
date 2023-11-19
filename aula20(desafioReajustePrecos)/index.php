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
        $preço = $_GET['preco'] ;
        $reajuste = $_GET['reaj'];
        $res = ($reajuste/100)*$preço;
        $novoPreco = $preço + $res ;
    ?>
    <main>
        <h1>REAJUSTADOR DE PREÇOS</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preço?>" >

            <label for="reaj">Qual será o percentual de reajuste? (<span id="p">?</span>%) </label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>" >

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>RESULTADO DO REAJUSTE</h2>
        <p>O produto que custava R$<?=number_format($preço,2,",",".")?>, com <?=$reajuste?>% de aumento, vai passar a custar R$ <?=$novoPreco?>  a partir de agora</p>
    </section>
    <script>
        mudaValor()
        
        function mudaValor() {
            p.innerText = reaj.value;       
        }
    </script>
    
</body>
</html>