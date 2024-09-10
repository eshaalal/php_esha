
<?php

function mystrlen($str)
{
    $i = 0;
    while ($str != '')
    {
        $str = substr($str, 1);
        $i++;
    }
    return $i;
}

echo mystrlen('bhjikn kjoko')
?>