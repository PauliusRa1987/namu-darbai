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
else echo("Vidurinis skaicius yra: $sestasKintamasis");

echo '<br> -------------------Nr.4 <br> ';

// 4. uzdavinys
$a = rand(1, 10); 
$b = rand(1, 10); 
$c = rand(1, 10);

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) echo "Is duouju krastinius $a, $b, $c trikampi sudaryti galima";
else echo "Is krastinius $a, $b, $c trikampis NEIMANOMAS!";

echo '<br> -------------------Nr.5 <br> ';

// 5. uzdavinys NEBAIGTAS!

$kVienas = rand(0, 2); echo "Pirmas: $kVienas", '<br>';
$kDu = rand(0, 2); echo "Antras: $kDu", '<br>';
$kTrys = rand(0, 2); echo "Trecias: $kTrys", '<br>';
$kKeturi = rand(0, 2); echo "Ketvirtas: $kKeturi", '<br>';

if($kVienas === 0 && $kDu === 0 && $kTrys === 0 && $kKeturi === 1) echo "Ats: nuliu: 4, vienetu: 0,  dvejetu: 0.";
if($kVienas === 1 && $kDu === 0 && $kTrys === 0 && $kKeturi === 0 || $kVienas === 0 && $kDu === 1 && $kTrys === 0 && $kKeturi === 0 || $kVienas === 0 && $kDu === 0 && $kTrys === 1 && $kKeturi === 0 || $kVienas === 0 && $kDu === 0 && $kTrys === 0 && $kKeturi === 1) echo "Ats: nuliu: 3, vienetu: 1,  dvejetu: 0.";
if($kVienas === 1 && $kDu === 1 && $kTrys === 1 && $kKeturi === 1) echo "Ats: nuliu: 0, vienetu: 4,  dvejetu: 0.";
if($kVienas === 2 && $kDu === 2 && $kTrys === 2 && $kKeturi === 2) echo "Ats: nuliu: 0, vienetu: 4,  dvejetu: 0.";


echo '<br> -------------------Nr.6 <br> ';

// 6. uzdavinys 
$tagSkaicius = rand(1, 6);
echo "<h$tagSkaicius>$tagSkaicius</h$tagSkaicius>";

echo '<br> -------------------Nr.7 <br> ';

// 7. uzdavinys 
$spePirmas = rand(-10,10); 
$speAntras = rand(-10,10); 
$speTrecias = rand(-10,10); 

if($spePirmas < 0) echo "<p style= 'color: green'>$spePirmas</p>";
elseif($spePirmas === 0) echo "<p style= 'color: red'>$spePirmas</p>";
else echo "<p style= 'color: blue'>$spePirmas</p>";

if($speAntras < 0) echo "<p style= 'color: green'>$speAntras</p>";
elseif($speAntras === 0) echo "<p style= 'color: red'>$speAntras</p>";
else echo "<p style= 'color: blue'>$speAntras</p>";

if($speTrecias < 0) echo "<p style= 'color: green'>$speTrecias</p>";
elseif($speTrecias === 0) echo "<p style= 'color: red'>$speTrecias</p>";
else echo "<p style= 'color: blue'>$speTrecias</p>";

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
$devPirmas = rand(0, 100); echo "Pirmas skaicius:  $devPirmas", '<br>';
$devAntras = rand(0, 100); echo "Antras skaicius:  $devAntras", '<br>';
$devTrecias = rand(0, 100); echo "Trecias skaicius:  $devTrecias", '<br>';

$vidurkis = round(($devPirmas+$devAntras+$devTrecias)/3); 

if($devPirmas<10 || $devPirmas>90) $devPirmas=0;
if($devAntras<10 || $devAntras>90) $devAntras=0;
if($devTrecias<10 || $devTrecias>90) $devTrecias=0;

if($devPirmas === 0 &&  $devAntras === 0 || $devPirmas === 0 &&  $devTrecias === 0 || $devTrecias === 0 &&  $devAntras === 0) $dalikliss = 1;
if($devPirmas === 0 && $devAntras !==0 && $devTrecias !==0 || $devPirmas !== 0 && $devAntras ===0 && $devTrecias !==0 || $devPirmas !== 0 && $devAntras !==0 && $devTrecias ===0 ) $dalikliss = 2;
if($devPirmas !== 0 && $devAntras !==0 && $devTrecias !==0) $dalikliss = 3; 


$newVidurkis = round(($devPirmas+$devAntras+$devTrecias)/$dalikliss);

echo "Skaiciu vidurkis yra $vidurkis , atmetus  <10 ir  >90 skaicius vidurkis yra $newVidurkis. <br>";


echo '<br> -------------------Nr.10 <br> ';

// 10. uzdavinys 
$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

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

echo "Pridejus $pridetinisLaikas sekundes dabar laikrodis rodo $valandos : $minutes : $newSekundes";

echo '<br> -------------------Nr.11 <br> ';

// 11. uzdavinys 

$extraPirmas = rand(1000, 9999); echo "1)  $extraPirmas", '<br>';
$extraAntras = rand(1000, 9999); echo "2)  $extraAntras", '<br>';
$extraTrecias = rand(1000, 9999); echo "3)  $extraTrecias", '<br>';
$extraKetvirtas = rand(1000, 9999); echo "4)  $extraKetvirtas", '<br>';
$extraPenktas = rand(1000, 9999); echo "5)  $extraPenktas", '<br>';
$extraSestas = rand(1000, 9999); echo "6)  $extraSestas", '<br>';