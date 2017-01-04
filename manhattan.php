<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Manhattan</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<?php

    $L = 4;
    $H = 5;
    $T = 'M@NH@TT@N';
    $chaine = ' #  ##   ## ##  ### ###  ## # # ###  ## # # #   # # ###  #  ##   #  ##   ## ### # # # # # # # # # # ### ### 
# # # # #   # # #   #   #   # #  #    # # # #   ### # # # # # # # # # # #    #  # # # # # # # # # #   #   # 
### ##  #   # # ##  ##  # # ###  #    # ##  #   ### # # # # ##  # # ##   #   #  # # # # ###  #   #   #   ## 
# # # # #   # # #   #   # # # #  #  # # # # #   # # # # # # #    ## # #   #  #  # # # # ### # #  #  #       
# # ##   ## ##  ### #    ## # # ###  #  # # ### # # # #  #  #     # # # ##   #  ###  #  # # # #  #  ###  #  ';

    $split = preg_split('//u', strtoupper($T), -1, PREG_SPLIT_NO_EMPTY);
    $ascii = [];
    foreach ($split as $key)
    {
        if (ord($key) > 64 && ord($key) < 91)
        {
            $ascii[] = ord($key) - 65;
        }
        else
        {
            $ascii[] = 26;
        }
    }

    $lines = explode(PHP_EOL, $chaine);

    echo '<pre>';
    foreach ($lines as $line)
    {
        for ($i = 0; $i < count($ascii); $i++)
        {
            echo substr($line, $ascii[$i] * $L, $L);
        }
        echo '<br />';
    }
    echo '</pre>';

?>
</body>
</html>