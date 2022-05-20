<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api rest com php</title>
    <style>
        body {
            background-color: #c2c2c2;
        }

        h1 {
            font-size: 20pt;
            text-align: center;
        }

        #formulario {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <h1>Insira qualquer nome</h1>
    <form action="../index.php" method="get" id="formulario">
        Aqui : <input type="text" name="option" id="option" /> 
    </form>

</body>

</html>

<?php

define('API BASE', "http://localhost:3000/index.php?option=status") ;

?>