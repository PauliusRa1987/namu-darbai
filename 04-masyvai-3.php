<?php
echo '<br> ----------3---------Nr.3 <br> ';
echo '<pre>';
// 3. uzdavinys3.Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
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
// 4. uzdavinys.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
sort($letters, SORT_STRING);
// print_r($letters);
echo '<br> -------------------Nr.5 <br> ';
// 5. uzdavinys 5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
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
// 6. uzdavinys6.Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
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
// 7. uzdavinys 7.Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
$velMasyvas = [];
for ($i=0; $i < count($masePirmas); $i++) { 
    if(!in_array($masePirmas[$i], $maseAntra)){
       $velMasyvas[]= $masePirmas[$i]; 
    }
}

// print_r($velMasyvas);
echo '<br> -------------------Nr.8 <br> ';
// 8. uzdavinys 8.Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
$tasKurKartoasiMasyvas = [];
for ($i=0; $i < count($masePirmas); $i++) { 
    if(in_array($masePirmas[$i], $maseAntra)){
        $tasKurKartoasiMasyvas[]= $masePirmas[$i]; 
    }
}
// print_r($tasKurKartoasiMasyvas);

echo '<br> -------------------Nr.9 <br> ';
// 9. uzdavinys9.Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
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
// 10. uzdavinys10.Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
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
// 11. uzdavinys11.Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)
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
