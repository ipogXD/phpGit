<?php
error_reporting( E_ALL );
ini_set( "display_errors",1);
$color = "blue";
$propStyle = "color:";

$html =
    "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <p style='$propStyle  $color'>Test task</p>
</body>
</html>";

echo $html;
