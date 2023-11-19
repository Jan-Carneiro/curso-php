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
        $valor = $_GET['val'];
    ?>
         <main>
            <h1>Caixa Eletrônico</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="val">Qual valor você deseja sacar? *</label>
                <input type="number" name="val" id="val" value="<?=$valor?>" min="0" required step="5" >
                <p style="font-size: 0.3cm;" >* Notas disponíveis: R$ 100?, R$ 50?, R$ 10? e R$ 5?</p>
                <input type="submit" value="Sacar">
            </form>
         </main>
         <?php 
            $qtd100 = $valor / 100;
            $qtd100Inteiro = intval($qtd100); //qtdnota
            $qtd100Decimal = fmod($qtd100, 1); //qtdnota
            $sobra = $qtd100Decimal * 100; //dinheiro sobra

            $qtd50 = $sobra / 50;
            $qtd50Inteiro = intval($qtd50); //qtdnota
            $qtd50Decimal = fmod($qtd50, 1); //qtdnota
            $sobra1 = $qtd50Decimal * 50; //dinheiro sobra

            $qtd10 = $sobra1 / 10;
            $qtd10Inteiro = intval($qtd10); //qtdnota
            $qtd10Decimal = fmod($qtd10, 1); //qtdnota
            $sobra2 = $qtd10Decimal * 10; //dinheiro sobra

            $qtd5 = $sobra2 / 5;  //ajeitar esta última conta
            $qtd5Arred = ceil($qtd5); 
            $qtd5Inteiro = intval($qtd5); //qtdnota
            $qtd5Decimal = fmod($qtd5, 1); //qtdnota
            $sobra3 = $qtd5Decimal * 5; //dinheiro sobra
                        
         ?>
         <section>
            <h2>Saque de R$<?=$valor?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li>Nota de 100  x  <?=$qtd100Inteiro?> /<?=$qtd100Decimal?>/ sobra <?=$sobra?> reais  </li>
                <li>Nota de 50   x  <?=$qtd50Inteiro?> /<?=$qtd50Decimal?>/ sobra <?=$sobra1?> reais</li>
                <li>Nota de 10   x  <?=$qtd10Inteiro?> /<?=$qtd10Decimal?>/ sobra <?=$sobra2?> reais</li>
                <li>Nota de 5    x  <?=$qtd5Arred?> </li>
            </ul>

         </section>   
    
</body>
</html>