<?php

function izracunajKamatu($godina,$iznosKredita) {
 $kamata=0;   
if($godina<2000){
    $kamata= 0.05;
}
elseif($godina>=2000 && $godina<=2010){
    $kamata = 0.08;
}
elseif($godina>=2011 && $godina<=2020){
    $kamata= 0.1;
}
else {
    $kamata= 0.14;
}
 return $iznosKredita * $kamata;
}
$kredit2000 =izracunajKamatu(20000,1999);
echo $kredit2000;

$noviKredit= izracunajKamatu(10000,2008);
echo $noviKredit;

$kreditPre2010 = izracunajKamatu(99999,2014);
echo $kreditPre2010;

?>