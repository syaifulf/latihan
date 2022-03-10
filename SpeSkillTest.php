<?php

function narsis($par)
{
	$angka = $par;
    $digit = strlen($angka);
    $stringangka = (string)$angka;
    // pow(5,3);
    $n=0;
    $jumlah = 0;
    while($n<$digit){
        $jumlah = $jumlah + pow((int)$stringangka[$n],$digit); 
        $n++;
}

return $jumlah==$angka?"true":"false";
}

function blueocean($arr1,$arr2)
{
   return $result = array_diff($arr1,$arr2);
}

function needle($arr, $var)
{
    return array_search($var, $arr); 
}

?>
