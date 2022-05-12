<?php
echo '<br> ----------3---------Nr.3 <br> ';
echo '<pre>';
// 3. uzdavinys
$duotosRaides = ('ABCD');
$letters = [];
for ($i=0; $i < 200; $i++) { 
    $raide=rand(0, strlen($duotosRaides)-1);
    $letters[]=$duotosRaides[$raide];
} 
$rA=0;
$rB=0;
$rC=0;
foreach($letters as $key => $value){
    if ($value == 'A'){
        $rA++;
    }
    if ($value == 'B'){
        $rB++;
    }
    if ($value == 'C'){
        $rC++;
    }
}$dr= 200 - $rA - $rB - $rC;
echo "A: $rA, B: $rB, C: $rC, D: $dr";

echo '<br> -------------------Nr.4 <br> ';
// 4. uzdavinys
sort($letters, SORT_STRING);
// print_r($letters);
echo '<br> -------------------Nr.5 <br> ';
// 5. uzdavinys
$pirmasMasyvas = [];
$antrasMasyvas = [];
$treciasMasyvas = [];
for ($i=0; $i < 200; $i++) { 
    $raide=rand(0, strlen($duotosRaides)-1);
    $pirmasMasyvas[]=$duotosRaides[$raide];
}
for ($i=0; $i < 200; $i++) { 
    $raide=rand(0, strlen($duotosRaides)-1);
    $antrasMasyvas[]=$duotosRaides[$raide];
}  
for ($i=0; $i < 200; $i++) { 
    $raide=rand(0, strlen($duotosRaides)-1);
    $treciasMasyvas[]=$duotosRaides[$raide];
} 
$naujasMase = [];
for ($i=0; $i < 200; $i++){
    $naujasMase[]= $pirmasMasyvas[$i].$antrasMasyvas[$i].$treciasMasyvas[$i];
}
// print_r($naujasMase); echo '<br>';
$unikaliosReiksme = array_unique($naujasMase);
// print_r($unikaliosReiksme);echo '<br>';
print_r(count($unikaliosReiksme));

echo '<br> -------------------Nr.6 <br> ';
// 6. uzdavinys
$masePirmas = [];
$maseAntra = [];
do{
    $number = rand(100, 999);
    if (in_array($number, $masePirmas )) {
        continue;
    }$masePirmas[]= $number;
}while(count($masePirmas) < 100);
// print_r($masePirmas);echo '<br>';
do{
    $number = rand(100, 999);
    if (in_array($number, $maseAntra )) {
        continue;
    }$maseAntra[]= $number;
}while(count($maseAntra) < 100);
// print_r($maseAntra);echo '<br>';

echo '<br> -------------------Nr.7 <br> ';
// 7. uzdavinys
$velMasyvas = [];
for ($i=0; $i < count($masePirmas); $i++) { 
    if(!in_array($masePirmas[$i], $maseAntra)){
       $velMasyvas[]= $masePirmas[$i]; 
    }
}

// print_r($velMasyvas);
echo '<br> -------------------Nr.8 <br> ';
// 8. uzdavinys
$tasKurKartoasiMasyvas = [];
for ($i=0; $i < count($masePirmas); $i++) { 
    if(in_array($masePirmas[$i], $maseAntra)){
        $tasKurKartoasiMasyvas[]= $masePirmas[$i]; 
    }
}
// print_r($tasKurKartoasiMasyvas);

echo '<br> -------------------Nr.9 <br> ';
// 9. uzdavinys
$raktusKeiciam = array_flip($masePirmas);
// print_r($raktusKeiciam);
$darbas = 0;
foreach ($raktusKeiciam  as  &$value) {
    $value = $maseAntra[$darbas];
    $darbas++;
}
unset($value);
// print_r($raktusKeiciam);

echo '<br> -------------------Nr.10 <br> ';
// 10. uzdavinys
$pirmokas = rand(5, 25);
$antruolis = rand(5, 25);
$naujokas= [];
array_push($naujokas, $pirmokas, $antruolis);
$intexas = 0;
do{
    $naujokas[]=$naujokas[$intexas]+$naujokas[$intexas+1];
    $intexas++;
}while(count($naujokas)< 10);
// print_r($naujokas);

echo '<br> -------------------Nr.11 <br> ';
// 11. uzdavinys
$extraMasyvas = [];
for ($i=0; $i < 101; $i++) { 
    $mumsReikai = rand(0,300);
    $extraMasyvas[]=$mumsReikai;
  }  print_r($extraMasyvas);
// print_r($extraMasyvas);

// foreach ($extraMasyvas as &$value){
//     while (in_array($value, $extraMasyvas)) {
         
//     }
    
// }

// $pasikartojimai = array_count_values($extraMasyvas);
// print_r($pasikartojimai);
//     foreach ($extraMasyvas  as $key => &$value) {
//         if ($pasikartojimai[$value] == 1 ) {
//            echo $pasikartojimai[$value], '<br>' ;
//             $value= rand(0,300);
//         }
//     }


print_r($extraMasyvas);
print_r(array_unique($extraMasyvas));
