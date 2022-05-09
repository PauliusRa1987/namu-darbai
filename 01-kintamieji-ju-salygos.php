<?php
// 1. uzdavinys
$vardas = 'Paulius';
$pavarde = 'Rasamavicius';
$gimimoMetai = 1987;
$sieMetai = 2022;
$metuSkirtumas = $sieMetai - $gimimoMetai;

echo "As esu $vardas $pavarde. Man yra $metuSkirtumas metai.";
echo '<br> -------------------Nr.2 <br> ';

// 2. uzdavinys
$pirmasKintamasis = rand(0, 4); echo "Pirmas skaicius: $pirmasKintamasis", '<br>';
$antrasisKintamasis = rand(0, 4); echo "Antras skaicius: $antrasisKintamasis", '<br>';

if ($pirmasKintamasis === 0 || $antrasisKintamasis === 0) echo 'Veiksmas su nuliu negalimas arba tiesiog Atsakymas yra lygus nuliui';
elseif ($pirmasKintamasis > $antrasisKintamasis) echo 'Atsakymas: ', round($pirmasKintamasis/$antrasisKintamasis, 2);
else echo 'Atsakymas: ', round($antrasisKintamasis/$pirmasKintamasis, 2);

echo '<br> --------------------Nr.3 <br> ';

// 3. uzdavinys
$ketvirtasKintamasis = rand(0, 25); echo "Pirmas skaicius: $ketvirtasKintamasis", '<br>';
$penktasKintamasis = rand(0, 25); echo "Antras skaicius: $penktasKintamasis", '<br>';
$sestasKintamasis = rand(0, 25); echo "Trecias skaicius: $sestasKintamasis", '<br>';

if ($ketvirtasKintamasis < $penktasKintamasis && $ketvirtasKintamasis > $sestasKintamasis ||$ketvirtasKintamasis > $penktasKintamasis && $ketvirtasKintamasis < $sestasKintamasis) echo "Vidurinis skaicius yra: $ketvirtasKintamasis";
elseif ($penktasKintamasis < $ketvirtasKintamasis && $penktasKintamasis > $sestasKintamasis || $penktasKintamasis > $ketvirtasKintamasis && $penktasKintamasis < $sestasKintamasis) echo "Vidurinis skaicius yra: $penktasKintamasis";
elseif ($ketvirtasKintamasis === $penktasKintamasis || $ketvirtasKintamasis === $sestasKintamasis || $penktasKintamasis === $sestasKintamasis) echo "Vidurinio skaiciaus nera, nes du skaiciai pasikartoja.";
elseif ($ketvirtasKintamasis === $penktasKintamasis && $ketvirtasKintamasis === $sestasKintamasis && $penktasKintamasis === $sestasKintamasis) echo "Visi skaiciai yra vienodi!";
else echo("Vidurinis skaicius yra: $sestasKintamasis");

echo '<br> -------------------Nr.4 <br> ';

// 4. uzdavinys
$a = rand(1, 10); 
$b = rand(1, 10); 
$c = rand(1, 10);

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) echo "Is duotuju krastinius $a, $b, $c trikampi sudaryti galima";
else echo "Is krastinius $a, $b, $c trikampis NEIMANOMAS!";

echo '<br> -------------------Nr.5 <br> ';

// 5. uzdavinys

$kintamasisVienas = rand(0, 2); echo "Pirmas: $kintamasisVienas", '<br>';
$kintamasisDu = rand(0, 2); echo "Antras: $kintamasisDu", '<br>';
$kintamasisTrys = rand(0, 2); echo "Trecias: $kintamasisTrys", '<br>';
$kintamasisKeturi = rand(0, 2); echo "Ketvirtas: $kintamasisKeturi", '<br>';

$nuliai = 0;
if ($kintamasisVienas === 0) $nuliai++;
if ($kintamasisDu === 0) $nuliai++;
if ($kintamasisTrys === 0) $nuliai++;
if ($kintamasisKeturi === 0) $nuliai++;


$vienetukai = 0;
if ($kintamasisVienas === 1) $vienetukai++;
if ($kintamasisDu === 1) $vienetukai++;
if ($kintamasisTrys === 1) $vienetukai++;
if ($kintamasisKeturi === 1) $vienetukai++;

$dvejetukai = 4 - $vienetukai - $nuliai;

echo "Nuliai: $nuliai, Vienetai: $vienetukai, Dvejetai: $dvejetukai.";

echo '<br> -------------------Nr.6 <br> ';

// 6. uzdavinys 
$tagSkaicius = rand(1, 6);
echo "<h$tagSkaicius>$tagSkaicius</h$tagSkaicius>";

echo '<br> -------------------Nr.7 <br> ';

// 7. uzdavinys 
$septintoPirmasSkaicius = rand(-10,10); 
$septintoAntrasSkaicius = rand(-10,10); 
$septintoTreciasSkaicius = rand(-10,10); 

if($septintoPirmasSkaicius < 0) echo "<p style= 'color: green'>$septintoPirmasSkaicius</p>";
elseif($septintoPirmasSkaicius === 0) echo "<p style= 'color: red'>$septintoPirmasSkaicius</p>";
else echo "<p style= 'color: blue'>$septintoPirmasSkaicius</p>";

if($septintoAntrasSkaicius < 0) echo "<p style= 'color: green'>$septintoAntrasSkaicius</p>";
elseif($septintoAntrasSkaicius === 0) echo "<p style= 'color: red'>$septintoAntrasSkaicius</p>";
else echo "<p style= 'color: blue'>$septintoAntrasSkaicius</p>";

if($septintoTreciasSkaicius < 0) echo "<p style= 'color: green'>$septintoTreciasSkaicius</p>";
elseif($septintoTreciasSkaicius === 0) echo "<p style= 'color: red'>$septintoTreciasSkaicius</p>";
else echo "<p style= 'color: blue'>$septintoTreciasSkaicius</p>";

echo '<br> -------------------Nr.8 <br> ';

// 8. uzdavinys 
$zvakiuKiekis = rand(5, 3000);
$zvakiuKainaBeNuolaidos = 1 * $zvakiuKiekis;
if($zvakiuKainaBeNuolaidos > 2000){ 
    $zvakiuKainaSuKeturiProc = $zvakiuKainaBeNuolaidos*0.96;

    echo "Perkama $zvakiuKiekis vnt. uz $zvakiuKainaSuKeturiProc EUR.";}
elseif ($zvakiuKainaBeNuolaidos > 1000){ 
    $zvakiuKainaSuTrysProc = $zvakiuKainaBeNuolaidos*0.97;
    echo "Perkama $zvakiuKiekis vnt. uz $zvakiuKainaSuTrysProc EUR.";}



else echo "Perkama $zvakiuKiekis vnt. uz $zvakiuKainaBeNuolaidos EUR. ";

echo '<br><br> -------------------Nr.9 <br> ';

// 9. uzdavinys 
$devintoPirmasSkaicius = rand(0, 100); echo "Pirmas skaicius:  $devintoPirmasSkaicius", '<br>';
$devintoAntrasSkaicius = rand(0, 100); echo "Antras skaicius:  $devintoAntrasSkaicius", '<br>';
$devintoTreciasSkaicius = rand(0, 100); echo "Trecias skaicius:  $devintoTreciasSkaicius", '<br>';

$vidurkis = round(($devintoPirmasSkaicius+$devintoAntrasSkaicius+$devintoTreciasSkaicius)/3); 

if($devintoPirmasSkaicius<10 || $devintoPirmasSkaicius>90) $devintoPirmasSkaicius=0;
if($devintoAntrasSkaicius<10 || $devintoAntrasSkaicius>90) $devintoAntrasSkaicius=0;
if($devintoTreciasSkaicius<10 || $devintoTreciasSkaicius>90) $devintoTreciasSkaicius=0;

if($devintoPirmasSkaicius === 0 &&  $devintoAntrasSkaicius === 0 || $devintoPirmasSkaicius === 0 &&  $devintoTreciasSkaicius === 0 || $devintoTreciasSkaicius === 0 &&  $devintoAntrasSkaicius === 0) $dalikliss = 1;
if($devintoPirmasSkaicius === 0 && $devintoAntrasSkaicius !==0 && $devintoTreciasSkaicius !==0 || $devintoPirmasSkaicius !== 0 && $devintoAntrasSkaicius ===0 && $devintoTreciasSkaicius !==0 || $devintoPirmasSkaicius !== 0 && $devintoAntrasSkaicius !==0 && $devintoTreciasSkaicius ===0 ) $dalikliss = 2;
if($devintoPirmasSkaicius !== 0 && $devintoAntrasSkaicius !==0 && $devintoTreciasSkaicius !==0) $dalikliss = 3; 


$newVidurkis = round(($devintoPirmasSkaicius+$devintoAntrasSkaicius+$devintoTreciasSkaicius)/$dalikliss);

echo "Skaiciu vidurkis yra $vidurkis , atmetus  <10 ir  >90 skaicius vidurkis yra $newVidurkis. <br>";


echo '<br> -------------------Nr.10 <br> ';

// 10. uzdavinys 
$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$zero = '0';
if($valandos < 10) $valandos = $zero.$valandos;
if($minutes < 10) $minutes = $zero.$minutes;
if($sekundes < 10) $sekundes = $zero.$sekundes;

echo "Laikrodis rodo     $valandos : $minutes : $sekundes", '<br>';

$pridetinisLaikas = rand(0, 300);

if($sekundes + $pridetinisLaikas < 60) $newSekundes = $sekundes + $pridetinisLaikas;
if($sekundes + $pridetinisLaikas >= 60) 
$minutes += floor(($sekundes + $pridetinisLaikas)/60);
$newSekundes = ($sekundes + $pridetinisLaikas) - (floor(($sekundes + $pridetinisLaikas)/60))*60;

if($minutes >= 60) {
$valandos += floor(($minutes)/60);
$minutes -= 60;}


if ($valandos >= 24) $valandos -= 24;
if($minutes < 10) $minutes = $zero.$minutes;
if($newSekundes < 10) $newSekundes = $zero.$newSekundes;

echo "Pridejus $pridetinisLaikas sekundes dabar laikrodis rodo $valandos : $minutes : $newSekundes";

echo '<br> -------------------Nr.11 <br> ';

// 11. uzdavinys 

$extraPirmas = rand(1000, 9999); echo "1)  $extraPirmas", '<br>';
$extraAntras = rand(1000, 9999); echo "2)  $extraAntras", '<br>';
$extraTrecias = rand(1000, 9999); echo "3)  $extraTrecias", '<br>';
$extraKetvirtas = rand(1000, 9999); echo "4)  $extraKetvirtas", '<br>';
$extraPenktas = rand(1000, 9999); echo "5)  $extraPenktas", '<br>';
$extraSestas = rand(1000, 9999); echo "6)  $extraSestas", '<br>';





$nrFirst = min($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);
$nrSix = max($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);
if($extraPirmas < $nrSix) $extraPirmas;
else $extraPirmas = 0;
if($extraAntras < $nrSix) $extraAntras;
else $extraAntras = 0;
if($extraTrecias < $nrSix) $extraTrecias;
else $extraTrecias = 0;
if($extraKetvirtas < $nrSix) $extraKetvirtas;
else $extraKetvirtas = 0;
if($extraPenktas < $nrSix) $extraPenktas;
else $extraPenktas = 0;
if($extraSestas < $nrSix) $extraSestas;
else $extraSestas = 0;

$nrFive = max($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);

if($extraPirmas < $nrFive) $extraPirmas;
else $extraPirmas = 0;
if($extraAntras < $nrFive) $extraAntras;
else $extraAntras = 0;
if($extraTrecias < $nrFive)  $extraTrecias;
else $extraTrecias = 0;
if($extraKetvirtas < $nrFive) $extraKetvirtas;
else $extraKetvirtas = 0;
if($extraPenktas < $nrFive) $extraPenktas;
else $extraPenktas = 0;
if($extraSestas < $nrFive) $extraSestas;
else $extraSestas = 0;

$nrFour = max($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);

if($extraPirmas < $nrFour) $extraPirmas;
else $extraPirmas = 0;
if($extraAntras < $nrFour) $extraAntras;
else $extraAntras = 0;
if($extraTrecias < $nrFour) $extraTrecias;
else $extraTrecias = 0;
if($extraKetvirtas < $nrFour) $extraKetvirtas;
else $extraKetvirtas = 0;
if($extraPenktas < $nrFour) $extraPenktas;
else $extraPenktas = 0;
if($extraSestas < $nrFour) $extraSestas;
else $extraSestas = 0;

$nrThree = max($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);

if($extraPirmas < $nrThree) $extraPirmas;
else $extraPirmas = 0;
if($extraAntras < $nrThree) $extraAntras;
else $extraAntras = 0;
if($extraTrecias < $nrThree) $extraTrecias;
else $extraTrecias = 0;
if($extraKetvirtas < $nrThree) $extraKetvirtas;
else $extraKetvirtas = 0;
if($extraPenktas < $nrThree) $extraPenktas;
else $extraPenktas = 0;
if($extraSestas < $nrThree) $extraSestas;
else $extraSestas = 0;

$nrTo = max($extraPirmas, $extraAntras, $extraTrecias, $extraKetvirtas, $extraPenktas, $extraSestas);

$result = "Ats: $nrFirst, $nrTo, $nrThree, $nrFour, $nrFive, $nrSix.";

echo $result;