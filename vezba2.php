<?php



function izracunajPopust($cena,$popust){
$popust=$popust/100;    
return $cena*$popust;


}
$rezultatPopusta=izracunajPopust(1500,10);
$rezultatPopusta2= izracunajPopust(2000,22);
$rezultatPopusta3= izracunajPopust(3000,20);

$totalniPopust=$rezultatPopusta+$rezultatPopusta2+$rezultatPopusta3;
echo "Ukupno danas popusta bilo je $totalniPopust";