<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>TESTE DE TIPOS PRIMITIVOS</h1>
    <?php
        //0x = hexadecimal .0b = binário . 0 = octal
        $num = 300;
        $num1 = 0x1A;
        echo "O valor da primeira variável é $num <br>";
        echo "O valor da segunda variável é $num1 <br>";//bases numéricas 

        $v = "JanCarneiro ";
        var_dump($v);//me dá as caracteristicas da variável

        $num2 = (int) "850"; //forma de eu declarar o tipo primitivo
        var_dump($num2);

        $casado = false;
        $treinado = true;
        var_dump($casado);
        echo "O valor para casado é $casado";//como é falso, ficou 0
        echo "O valor para treinado é $treinado";//como é verdadeiro, ficou 1

        $vet = [6,2,9,3,5]; //vetor=array
        var_dump($vet);

        $vet1 = [6,"Maria",9.9,false,9]; //vetor
        var_dump($vet1);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>