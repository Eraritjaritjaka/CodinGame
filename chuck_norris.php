<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Chuck Norris</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php

$MESSAGE = '%';

/*$strHex = unpack('H*', $MESSAGE);
$strBin = base_convert($strHex[1], 16, 2);
var_dump($strBin);*/

/*$caracteres = str_split($MESSAGE);
$strBin = '';
foreach ($caracteres as $caractere)
{
    $strBin .=  decbin(ord($caractere));
}*/

$caracteres = str_split($MESSAGE);
$strBin = '';
foreach ($caracteres as $caractere)
{
    $strBin .= str_pad(decbin(ord($caractere)), 7, 0, STR_PAD_LEFT);
}

$msgBinArray = str_split($strBin);
$strChuckNorris = '';
$check = '3';

foreach ($msgBinArray as $msgBin)
{
    if ($msgBin == $check)
    {
        $strChuckNorris .= '0';
    }
    else
    {
        if ($msgBin == 1)
        {
            $strChuckNorris .= ($strChuckNorris == null) ?  '0 ' :  ' 0 ';
        }
        else
        {
            $strChuckNorris .= ($strChuckNorris == null) ?  '00 ' :  ' 00 ';
        }
        $strChuckNorris .= '0';
    }
    $check = $msgBin;
}

echo $strChuckNorris;

/*
$caracteres = str_split($MESSAGE);
$chaine = '';
foreach ($caracteres as $caractere)
{
    $chaine .=  decbin(ord($caractere));
}
echo $chaine;
*/

?>
</body>
</html>