<?php
echo '<br> -------------------Nr.1 <br> ';

// 1. uzdavinys
$vardas = 'Giedrius';
$pavarde = 'Savickas';
if (strlen($vardas) > strlen($pavarde )) echo $vardas;
elseif (strlen($vardas) < strlen($pavarde )) echo $pavarde;
else echo 'Abu stringai yra vienodo ilgio!';

echo '<br> -------------------Nr.2 <br> ';

// 2. uzdavinys
echo strtoupper($vardas), '<br>';
echo strtolower($pavarde), '<br>';

echo '<br> -------------------Nr.3 <br> ';

// 3. uzdavinys
$pirmosRaides = $vardas[0].$pavarde[0];
echo $pirmosRaides,  '<br>';

echo '<br> -------------------Nr.4 <br> ';

// 4. uzdavinys
$trysPaskutines = substr($vardas, -3).substr($pavarde, -3);
echo $trysPaskutines,  '<br>';

echo '<br> -------------------Nr.5 <br> ';

// 5. uzdavinys
$raidziuKeitimas = 'An American in Paris';
echo str_ireplace('a', '*', $raidziuKeitimas),  '<br>';

echo '<br> -------------------Nr.6 <br> ';

// 6. uzdavinys

echo 'Viso "a" raidziu yra:', substr_count(strtolower($raidziuKeitimas), 'a'),  '<br>';

echo '<br> -------------------Nr.7 <br> ';

// 7. uzdavinys
$balses = array('a', 'e', 'i', 'o', 'u');
$antrasPavadinimas = 'Breakfast at Tiffany`s';
$treciasPavadinimas = '2001: A Space Odyssey';
$ketvirtasPavdinimas = 'It`s a Wonderful Life';
echo 'Nr.1 stringas be balsiu: ', str_ireplace($balses, '', $raidziuKeitimas),  '<br>';
echo 'Nr.2 stringas be balsiu: ', str_ireplace($balses, '', $antrasPavadinimas),  '<br>';
echo 'Nr.3 stringas be balsiu: ', str_ireplace($balses, '', $treciasPavadinimas),  '<br>';
echo 'Nr.4 stringas be balsiu: ', str_ireplace($balses, '', $ketvirtasPavdinimas),  '<br>';

echo '<br> -------------------Nr.8 <br> ';

// 8. uzdavinys

echo $randEpizodas =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)).rand(1,9).' - A New Hope',  '<br>';
$skaicius = '';
for ($i=0; $i < strlen($randEpizodas); $i++) { 
    if (is_numeric($randEpizodas[$i])) {
        $skaicius.=$randEpizodas[$i];
    }
}
echo "Epizodo numeris yra: $skaicius",  '<br>';

echo '<br> -------------------Nr.9 <br> ';

// 9. uzdavinys BEDA!!!!!

$pirmaFilmas = 'Don`t Be a Menace to South Central While Drinking Your Juice in the Hood';
$antrasFilmas = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$trumpiZodziai = 0;
$zodziuKiekisPirmameStringe =  explode( ' ', $pirmaFilmas);
$visoZodziuPirmame =  count($zodziuKiekisPirmameStringe);
for ($i=0; $i < $visoZodziuPirmame; $i++) { 
    if(strlen($zodziuKiekisPirmameStringe[$i]) <= 5){
        $trumpiZodziai++; 
    }
}echo "Zodziai kurie yra sudaryti is 5 ir maziau raidziu Pirmame stringe: $trumpiZodziai.",  '<br>';

$trumpiZodziaiTen = 0;
$zodziuKiekisAntrameStringe =  explode(" " ,$antrasFilmas);
$visoZodziuAntrame =  count($zodziuKiekisAntrameStringe);
for ($i=0; $i < $visoZodziuAntrame; $i++) { 
    if(mb_strlen($zodziuKiekisAntrameStringe[$i]) <6){
        $trumpiZodziaiTen++;
    }
}echo "Zodziai kurie yra sudaryti is 5 ir maziau raidziu Antrame stringe: $trumpiZodziaiTen.",  '<br>';

echo '<br> -------------------Nr.10 <br> ';

// 10. uzdavinys

$ilgis = 3;
function gautiZodi($ilgis){
    $raides = 'abcdefghijklmnopqrstuvwxyz';
    $atsitiktinisZodis = '';
    for ($i=0; $i < $ilgis; $i++) { 
        $atsitiktinisZodis.=$raides[rand(0, strlen($raides) - 1)];
    }return $atsitiktinisZodis;
}
echo gautiZodi($ilgis);

echo '<br> -------------------Nr.11 <br> ';

// 11. uzdavinys
$sujungtiDevintoMasyvai = array_merge($zodziuKiekisAntrameStringe, $zodziuKiekisPirmameStringe);
$atsitiktinisZodis = $sujungtiDevintoMasyvai[array_rand($sujungtiDevintoMasyvai, 1)];


$strigoIlgis = 10;
function gautiSakini($strigoIlgis, $sujungtiDevintoMasyvai){
    $manoStringas = '';
    while (count(explode(' ', $manoStringas)) <= $strigoIlgis) { 
        $atsitiktinisZodis = $sujungtiDevintoMasyvai[array_rand($sujungtiDevintoMasyvai, 1)];
        if (!strpos($manoStringas, $atsitiktinisZodis)) {
            $manoStringas.= $atsitiktinisZodis.' ';
        }
    }return  $manoStringas;
}
echo gautiSakini($strigoIlgis, $sujungtiDevintoMasyvai);




// $strigoIlgis = 10;
// function gautiSakini($strigoIlgis, $sujungtiDevintoMasyvai){
//     $manoStringas = ' ';
//     for ($i=0; $i < $strigoIlgis; $i++) { 
//         $atsitiktinisZodis = $sujungtiDevintoMasyvai[array_rand($sujungtiDevintoMasyvai, 1)];
//         if (!strpos($manoStringas, $atsitiktinisZodis)) {
//             $manoStringas.= $atsitiktinisZodis.' ';
//         }
        
//     }return  $manoStringas;
// }
// echo gautiSakini($strigoIlgis, $sujungtiDevintoMasyvai);