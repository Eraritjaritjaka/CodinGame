<?php

$n = 5;
$temps = '-5 -4 -2 12 -40 4 2 18 11 5';

$chaine = explode(' ', $temps);

$ref = 0;
$check = 5526;

if ($n != null)
{
    foreach ($chaine as $temp)
    {
        if (abs($temp) <= $check)
        {
            if (abs($temp) == $check && $temp != $ref)
            {
                $ref = abs($temp);
            }
            else
            {
                $ref = $temp;
            }
            $check = abs($temp);
        }
    }
}
else
{
    $ref = 0;
}

echo $ref;