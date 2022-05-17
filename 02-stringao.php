<?php
echo '<br> -------------------Nr.1 <br> ';

// 1. uzdavinys.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
$vardas = 'Giedrius';
$pavarde = 'Savickas';
if (strlen($vardas) > strlen($pavarde )) echo $vardas;
elseif (strlen($vardas) < strlen($pavarde )) echo $pavarde;
else echo 'Abu stringai yra vienodo ilgio!';

echo '<br> -------------------Nr.2 <br> ';

// 2.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
echo strtoupper($vardas), '<br>';
echo strtolower($pavarde), '<br>';

echo '<br> -------------------Nr.3 <br> ';

// 3. 3.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
$pirmosRaides = $vardas[0].$pavarde[0];
echo $pirmosRaides,  '<br>';

echo '<br> -------------------Nr.4 <br> ';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti
$trysPaskutines = substr($vardas, -3).substr($pavarde, -3);
echo $trysPaskutines,  '<br>';

echo '<br> -------------------Nr.5 <br> ';

// 5. uzdavinys. 5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
$raidziuKeitimas = 'An American in Paris';
echo str_ireplace('a', '*', $raidziuKeitimas),  '<br>';

echo '<br> -------------------Nr.6 <br> ';

// 6. uzdavinys. 6.Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

echo 'Viso "a" raidziu yra:', substr_count(strtolower($raidziuKeitimas), 'a'),  '<br>';

echo '<br> -------------------Nr.7 <br> ';

// 7. uzdavinys. 7.Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
$balses = array('a', 'e', 'i', 'o', 'u');
$antrasPavadinimas = 'Breakfast at Tiffany`s';
$treciasPavadinimas = '2001: A Space Odyssey';
$ketvirtasPavdinimas = 'It`s a Wonderful Life';
echo 'Nr.1 stringas be balsiu: ', str_ireplace($balses, '', $raidziuKeitimas),  '<br>';
echo 'Nr.2 stringas be balsiu: ', str_ireplace($balses, '', $antrasPavadinimas),  '<br>';
echo 'Nr.3 stringas be balsiu: ', str_ireplace($balses, '', $treciasPavadinimas),  '<br>';
echo 'Nr.4 stringas be balsiu: ', str_ireplace($balses, '', $ketvirtasPavdinimas),  '<br>';

echo '<br> -------------------Nr.8 <br> ';

// 8. 8.Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo $randEpizodas =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)).rand(1,9).' - A New Hope',  '<br>';
$skaicius = '';
for ($i=0; $i < strlen($randEpizodas); $i++) { 
    if (is_numeric($randEpizodas[$i])) {
        $skaicius.=$randEpizodas[$i];
    }
}
echo "Epizodo numeris yra: $skaicius",  '<br>';

echo '<br> -------------------Nr.9 <br> ';

// 9.Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

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

// 10. 10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

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

// Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo
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