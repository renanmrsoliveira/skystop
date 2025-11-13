<?php

$nome = "Renan";

$head = "<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Site PhP de {$nome} </title>
</head>";

$body = "
    <body>
        <h1> Meu nome é {$nome} </h1>
        <p> Ola {$nome} , tudo bem com voce ? </p>
    </body>
</html>";

$html = $head . $body;

echo $html;