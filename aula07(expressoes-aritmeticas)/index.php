<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>EXPRESSÕES ARITMÉTICAS</h1>
    </header>
    <main>
        <?php 
            $res = 50/2+3**2;
            echo "O resultado será igual a $res <br>";
            $res = abs(-2000); //valor sem o sinal
            echo "O valor absoluto será igual a $res <br>";
            $res = base_convert(254,10,8);//base decimal para a octal
            echo "O resultado será igual a $res <br>";
            $res = base_convert(254,10,16);//base decimal para a hexadecimal
            echo "O resultado será igual a $res <br>";
            $res = base_convert(254,10,2);//base decimal para a binária
            echo "O resultado será igual a $res <br>";
            $res = intdiv(5,2);
            echo "A divisão inteira será igual a $res <br>";
            $res = min(5,2,3,4,5,0);
            echo "O valor mínimo da sequência será igual a $res <br>";
            $res = max(5,2,3,4,5,0);
            echo "O valor máximo da sequência será igual a $res <br>";
            $res = pi();//pode tambem declarar a constante M_PI
            echo "O valor de pi será igual a $res <br>";
            $res = M_PI;
            echo "O valor de pi será igual a $res <br>";
            $res = pow(2,2);
            echo "2 elevado a 2 será igual a $res <br>";
            $res = sqrt(4);
            echo "A raiz quadrado do número será igual a $res <br>";
            $res = 27**(1/3);
            echo "A raiz cúbica de 27 será igual a $res <br>";
            
            $res = "2"+"2";//somátorio de 2 strings, gerando um número 4 inteiro. Se quisesse concatenar, utilizaria o "." 
            var_dump($res);

            $res = "2"."2";
            echo "$res <br>"
        ?>
    </main>
    
</body>
</html>