<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome = isset ($_GET["nome"])?$_GET["nome"]:"[NAO INFORMADO]";
$ano = isset ($_GET["ano"])?$_GET["ano"]:0;
$sexo = isset ($_GET["sexo"])?$_GET["sexo"]:"[NAO INFORMADO]";
$idade = date('Y') - $ano;
echo "$nome e $sexo e tem $idade anos.";
?>
<a href="02idade.php"></a>
</body>
</html>


 