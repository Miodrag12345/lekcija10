
<?php
function izracunajPopust($cena){
    return $cena*0.1;
}
// prvi deo zadatka da izracunamo popust
$brojevi =[250,330,1000,2000,5000];
$popusti= [];


foreach($brojevi as $broj){
  $popust=izracunajPopust($broj);  
  array_push($popusti,$popust);   // u array_push ubacujemo u prazan niz ono sto smo izracunali iz varijable popust
}

 // imamo aray sa $popusti =[izracunate vrednosti]
// drugi deo zadataka 
$ukupanPopust = array_sum($popusti);
echo "Ukupan popust za danasnji dan je $ukupanPopust";
// treci deo zadataka

   
   

  


    

    
    






?>