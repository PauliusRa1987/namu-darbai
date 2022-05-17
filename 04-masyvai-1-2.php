<?php
echo '<br> -------------------Nr.1 a)<br> ';
echo '<pre>';
// 1. 1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

for ($i=0; $i < 30; $i++) { 
    $masyvas[]=rand(5,25);
}
print_r($masyvas);
echo '<br> ---------a----------Nr.1<br> ';
// 2. 2.Naudodamiesi 1 uždavinio masyvu:
// a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b)Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// c)Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g)Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
// 2.a) 
$sumaDidesniu = 0;
foreach ($masyvas as $key => $reiksmes) {
    if ($reiksmes > 10){
        $sumaDidesniu++;
    }
}echo $sumaDidesniu;
echo '<br> ----------b---------<br> ';
// 2.b) 

foreach ($masyvas as $key => $reiksmes) {
    if (max($masyvas) === $reiksmes){
        echo "Index: $key", '<br>';
        echo  "Value:  $reiksmes", '<br>';
    }
}
echo '<br> -----------c--------<br> ';
// 2.c) 
$sumaReiksniu = 0;
foreach ($masyvas as $key => $reiksmes) {
    if ($key%2==0){
        $sumaReiksniu+=$reiksmes;
    }
}echo $sumaReiksniu;
echo '<br> -----------d--------<br> ';
// 2.d) 
foreach ($masyvas as $key => $value) { 
    $naujasMasyvas[]=$value-$key ;
}
print_r($naujasMasyvas);
echo '<br> -----------e--------<br> ';
// 2.e) 
for ($i=0; $i < 10; $i++) { 
    $naujasMasyvas[]= rand(5,25);
}
print_r($naujasMasyvas);
echo '<br> -----------f--------<br> ';
// 2.f) 

foreach ($naujasMasyvas as $key => $value){
    if($key%2 == 0){
        $porinisMasyvas[]=$value;
    }else{$neporinisMasyvas[]=$value;}
}
print_r($porinisMasyvas);
print_r($neporinisMasyvas);

echo '<br> -----------g--------<br> ';
// 2.g) 
foreach ($porinisMasyvas as &$value){
    if($value>15){
        $value=0;
    }
}
unset($value);
print_r($porinisMasyvas);
echo '<br> -----------h--------<br> ';
// 2.h) 
foreach ($porinisMasyvas as $key => $value){
    if ($value > 10) {
        echo $key;
        break;    
    }
}
echo '<br> -----------i--------<br> ';
// 2.i) 
foreach ($porinisMasyvas as $key => $value){
    if ($key%2 == 0) {
        unset($porinisMasyvas[$key]);   
    }
}
print_r($porinisMasyvas);