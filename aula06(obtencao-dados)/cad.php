<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>RESULTADO DO PROCESSAMENTO</h1>
    </header>
    <main>
        <?php //tenho que puxar, do html, o nome e o sobrenome da pessoa, que ele colocou lá no input
            //var_dump($_GET); //quando envia o formulário com o método get
            //var_dump($_POST); //quando envia o formulário com o método post
            //var_dump($_REQUEST); //funciona para o method get e post. É uma junção da $_GET, $_POST $_COOKIES
            $n = $_GET["nome"] ?? "sem nome";//?? chama-se operador de coalescência nula.Se não tiver nada na variável nome, será preenchido com "sem nome"
            $s = $_GET["sobrenome"] ?? "desconhecido";//se não tiver nada na variável sobrenome, será preenchido com "desconhecido"
            echo "É um prazer te conhecer, $n $s";
        
        ?>
        <p><a href="index.html">Clique aqui para página anterior</a></p>
    </main>
</body>
</html>