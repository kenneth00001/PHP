<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02idade.php" method="get">
    Nome: <input type="text" name="nome"/><br/>
    Ano de nascimento: <input type="number" name="ano"/><br/>
    <fieldset><legend>Sexo</legend>
        <input type="radio" name="sexo" id="masc" value="Homem" checked/>
        <label for="masc" >Masculino</label><br/>
        <input type="radio" name="sexo" id="femi" value="Mulher"/>
        <label for="femi">Feminino</label><br/>
    </fieldset>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>