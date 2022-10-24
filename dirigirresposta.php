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
    $ano= isset($_GET["ano"]) ?$_GET["ano"]: 1900;
    $i= date("Y") - $ano; 


    if ($i < 16) {
        $votar= "Não Obrigatório";
    }
    elseif(($i >= 16 && $i < 18) || ($i > 65)) {
            $votar="Voto opcional";
        }
        else{ 
            $votar ="Voto obrigatorio";  
        }
    echo $votar;
    
    ?>
</body>
</html>