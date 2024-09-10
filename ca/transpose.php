<?php
$a = array
(
array(1, 2, 3),
array(4, 5, 6),
array(7, 8, 9)
);
$rows = count($a);
$cols = count($a[0]);
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
$t[$i][$j] = 0;
$t[$i][$j] = $a[$j][$i];
}
}
echo("Original matrix is: <br>"); 
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo ($a[$i][$j] . " ");
}
echo( "<br>");
}
echo( "Transpose of given matrix is:<br>");
for($i = 0; $i < $cols; $i++)
{
for($j = 0; $j < $rows; $j++)
{
echo($t[$i][$j] . " ");
}
echo( "<br>");
}
?>