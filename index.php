<?php
// ez a buborékos rendezés
$tomb=array(11, 5, 4, 8, 7, 9);
$maxIndex=count($tomb)-1;
print_r($tomb);
echo "<br>";

//&referencia 
function csere(&$tomb, $j):void
{
    $b=$tomb[$j+1];
    $tomb[$j+1]=$tomb[$j];
    $tomb[$j]=$b;
}
for($i=$maxIndex;$i>=1;$j--)
{
    for($j=0;$j<=$i-1;$j++)
    {
        if($tomb[$j]>$tomb[$j+1])
            {
                csere($tomb, $j);
            }
    }
}
print_r($tomb);