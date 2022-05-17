<?php
echo '<br> ----------1---------Nr.1 <br> ';
echo '<pre>';
// 1. uzdavinys.Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
$row10 = [];

for ($i=0; $i < 10; $i++) { 
    $col5 = [];
    for ($j=0; $j < 5; $j++) { 
        $col5[] = rand(5, 25);
    }
    $row10[] = $col5;
}
echo '<br>';echo '<br>';
foreach ($row10 as $eilute) {
    foreach ($eilute as $skaiciukas) {
        echo " $skaiciukas ";
    }echo '<br>';
}

echo '<br> -------------------Nr.2 <br> ';
echo '<br> ---------a----------Nr.2 a) <br> ';
// 2. uzdavinys2.Naudodamiesi 1 uždavinio masyvu:
// a)Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// b)Raskite didžiausio elemento reikšmę;
// c)Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// d)Visus masyvus “pailginkite” iki 7 elementų
// e)Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
$greater_10 = 0;
foreach ($row10 as $eilute) {
    foreach ($eilute as $skaiciukas) {
        if($skaiciukas > 10){
            $greater_10++;
        }
    }
}
// echo $greater_10;
echo '<br> ---------b----------Nr.2 b) <br> ';
$maxValue = [];
foreach ($row10 as $eilute) {
    foreach ($eilute as $skaiciukas) {
        $maxValue[]=$skaiciukas;
        }
    }
echo max($maxValue);

echo '<br> ---------c----------Nr.2 c) <br> ';
$sumKey_0 = 0;
$sumKey_1 = 0;
$sumKey_2 = 0;
$sumKey_3 = 0;
$sumKey_4 = 0;

foreach ($row10 as $eilute) {
    foreach ($eilute as $key => $skaiciukas) {        
    }
    $sumKey_0+=$eilute[0];
    $sumKey_1+=$eilute[1];;
    $sumKey_2+=$eilute[2];;
    $sumKey_3+=$eilute[3];;
    $sumKey_4+=$eilute[4];;
}
print_r($sumKey_0); echo '<br>'; 
print_r($sumKey_1); echo '<br>';
print_r($sumKey_2); echo '<br>';
print_r($sumKey_3); echo '<br>';
print_r($sumKey_4); echo '<br>';

echo '<br> ---------d----------Nr.2 d) <br> ';


foreach ($row10 as $key => $eilute) {
    array_push($row10[$key], rand(5,25), rand(5,25));
    
}

foreach ($row10 as  $eilute) {
    foreach ($eilute as  $value) {
        echo " $value ";
    }echo '<br>';
    
}
echo '<br> ---------e----------Nr.2 e) <br> ';
$newArrayFromSums = [];
foreach ($row10 as $key => $eilute) {
    $newArrayFromSums[]=array_sum($row10[$key]);
}
print_r($newArrayFromSums);

echo '<br> -------------------Nr.3  <br> ';
// 3. uzdavinys3.Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$arrMain = [];
for ($i=0; $i < 10; $i++) { 
    $arrInside = [];
    $letters = range('A', 'Z');
    for ($j=0; $j < rand(2, 20); $j++) { 
        $arrInside[]=$letters[rand(0, count($letters)-1)];
    }
    $arrMain[]=$arrInside;
}

foreach($arrMain as $key => $arrInside){
  sort($arrMain[$key]);
}

foreach ($arrMain as  $arrInside) {
    foreach($arrInside as $value){
        echo " $value ";
    }echo '<br>';
}

echo '<br> -------------------Nr.4  <br> ';
// 4. uzdavinys  BLOGAI! 4.Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
array_multisort(array_map('count',$arrMain), SORT_ASC, $arrMain );

// foreach ($arrMain as $key =>  $arrInside) {
//     print_r($arrInside);
//     foreach($arrInside as $ratas => $value){
    
//     }echo '<br>';
// }

echo '<br> -------------------Nr.5  <br> ';
// 5. uzdavinys  BLOGAI! Reikia validacijos!Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.
$userArr = [];
for ($i=0; $i < 30; $i++) { 

        $id = rand(1, 1000000);
        $place = rand(0, 100);

    $userArr[]=['user_id'=> $id, 'place_in_row' => $place];
}
// print_r($userArr);

echo '<br> -------------------Nr. 6 <br> ';
// 6. uzdavinys  6.Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
foreach ($userArr as $key =>  $dataArr) {
    foreach($dataArr as $ratas => $value){
     $kiekis = array_column($userArr, 'user_id');
    }
}
array_multisort($kiekis, SORT_DESC, $userArr);
// print_r($userArr);
foreach ($userArr as $key =>  $dataArr) {
    foreach($dataArr as $ratas => $value){
     $placeNr = array_column($userArr, 'place_in_row');
    }
}
array_multisort($placeNr, SORT_NUMERIC, $userArr);
// print_r($userArr);
echo '<br> -------------------Nr. 7 <br> ';
// 7. uzdavinys 7.Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
foreach ($userArr as &$dataArr) { 

    $raides =  range('A', 'Z');
    $raides2 = range('a', 'z');
    $name = '';
    $surname = '';
    for ($j=0; $j < rand(5, 15); $j++) { 
        $name.=$raides[rand(0, count($raides)-1)];
        $surname.=$raides2[rand(0, count($raides2)-1)];
    }
    $dataArr['name'] = $name;
    $dataArr['surname'] = $surname; 
    
   
}
unset($dataArr);
echo '<br>';
// print_r($userArr);

echo '<br> -------------------Nr. 8 <br> ';
// 8. uzdavinys 8.Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
$arrayNr_8 = [];
for ($i=0; $i < 10; $i++) { 
    $insideArrNr_8 = [];
    for ($j=0; $j < rand(0, 5); $j++) { 
        if([$j ]== 0){
        }
        $insideArrNr_8[]=rand(0, 10);
    }
    $arrayNr_8[]=$insideArrNr_8;
}
// print_r($arrayNr_8);
foreach($arrayNr_8 as $key => &$valueNr_8){
    if (count($arrayNr_8[$key]) < 1) {
        $valueNr_8[]=rand(0, 10);
    }
    
}unset($valueNr_8);
// print_r($arrayNr_8);

echo '<br> -------------------Nr. 9 <br> ';
// 9. uzdavinys 9.Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
$sumOfAll = 0;
foreach($arrayNr_8 as $key => $valueNr_8){
    foreach($valueNr_8 as $valueForSum){
        $sumOfAll+=$valueForSum;
}
}
// echo $sumOfAll;
foreach($arrayNr_8 as $key => $valueNr_8){
    foreach($valueNr_8 as $valueForSum){
        $sumOfAll+=$valueForSum;
}
}
// print_r($sumOfAll);
foreach($arrayNr_8 as $key => $valueNr_8){
    $eachArrSum[] = array_sum($valueNr_8);   
}
// print_r($eachArrSum);
array_multisort($eachArrSum, SORT_ASC, $arrayNr_8);
// print_r($arrayNr_8);

echo '<br> -------------------Nr. 10 <br> ';
// 10. uzdavinys 10.Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
$arrNt_10 = [];
for ($i=0; $i < 10; $i++) { 
    $subArrNr_10 = [];
    for ($j=0; $j < 10; $j++) { 
        $values = '#%+*@裡';
        $valuePosition = rand(0, strlen($values)-1);
        $subArrNr_10['value'] = $values[$valuePosition];
        $hexValue = '0123456789ABCDEF';
        $cod = ''; 
        for ($k=0; $k < 6; $k++) { 
            $cod.=$hexValue[rand(0, strlen($hexValue)-1)];
        } 
        $subArrNr_10['color']='#'.$cod;
    }
    $arrNt_10[]= $subArrNr_10;
}

foreach($arrNt_10 as $key => $subArrNr_10){ 
    foreach($subArrNr_10 as $simbols){ 
      
    }echo '<br>';
  
}print_r($arrNt_10 );

// 11.Duotas kodas, generuojantis masyvą:
// do {
//     $a = rand(0, 1000);
//     $b = rand(0, 1000);
// } while ($a == $b);
// $long = rand(10,30);
// $sk1 = $sk2 = 0;
// echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
// $c = [];
// for ($i=0; $i<$long; $i++) {
//     $c[] = array_rand(array_flip([$a, $b]));
// }
// echo '<h4>Masyvas:</h4>';
// echo '<pre>';
// print_r($c);
// echo '</pre>';
// Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
// NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
// NEGALIMA! naudoti jokių regex ir string funkcijų.