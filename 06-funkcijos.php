<?php
echo'<pre>';
echo '<br> -------------------Nr. 1 <br> ';
// 1. uzdavinys 1.Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function head($text){
    return '<h1>'.$text.'</h1>';
}
echo head('Sveiks! Valio!');
echo '<br> -------------------Nr. 2 <br> ';
// 2. uzdavinys 2.Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
function head2($text, $nr){
    return "<h$nr>$text</h$nr>";
}
echo head2('Mano tekstas', 3);
echo '<br> -------------------Nr. 3 <br> ';
// // 3. uzdavinys ------------------------------------------------------------nebaigtas
// 3.Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
// $randomString = filter_var(md5(time()), FILTER_SANITIZE_NUMBER_INT);
// echo head($randomString);
$randomString = md5(time());
preg_match_all('!\d+!', $randomString, $result);
foreach($result as $key => $value){
    foreach($value as $single){
        // echo head($single);
    }
} 
echo '<br> -------------------Nr. 4 <br> ';
// 4. uzdavinys4.Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
function integerCounter($number){
    if (gettype($number) != 'integer') {
        return 'Bad imput type!!!';
    }
    $sumOfIneger = 0;
    for ($i=1; $i <= abs($number); $i++) { 
        if ($number%$i == 0) {
            $sumOfIneger++;
        }
    }
    if ($sumOfIneger > 2 ) {
        return $sumOfIneger-2;
    }else{
        return 0;
    }
}
echo integerCounter(-4.2);
echo '<br> -------------------Nr. 5 <br> ';
// 5. uzdavinys5.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
$randArray = [];
for ($i=0; $i < 100; $i++) { 
    $randArray[]=rand(33, 77);
}
// print_r($randArray);
$sorVar=[];
foreach($randArray as $val){
    $sorVar[]=integerCounter($val);
}
array_multisort($sorVar, SORT_DESC, $randArray);
// print_r($randArray);
echo '<br> -------------------Nr. 6 <br> ';
// 6. uzdavinys6.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
$randForPrime = [];
for ($i=0; $i < 100; $i++) { 
    $randForPrime[]=rand(333, 777);
}
$primeNumbers = [];
foreach($randForPrime as $isItPrime){
    if (integerCounter($isItPrime) == 0){
        $primeNumbers[]=$isItPrime;
    }
}
print_r($primeNumbers);
echo '<br> -------------------Nr. 7 <br> ';
//7.7.Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;
function deepArray(){
    static $bank = 0;
    $arrLong = [];
    $bank++;
    $repeat = rand(10, 30);
    $length = rand(10, 20);
   
    for ($i=0; $i < $length; $i++) { 
         $arrInsider = rand(0, 10);
         $arrLong[]=$arrInsider;
    }
    if ($bank < $repeat) {
                $arrLong[]=deepArray();    
            }
    else{
        $arrLong[]=0;
    }
return $arrLong;
}
$skyScraper = deepArray();
print_r($skyScraper );

echo '<br> -------------------Nr. 8 <br> ';
// 8. uzdavinys8.Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
function arraySum($masyvas) {
    $suma = 0;
    foreach ($masyvas as $value) {
        if (!is_array($value)) {
            $suma += $value;
        }
        else {
            $suma += arraySum($value);
        }
    }
    return $suma;
}
echo arraySum($skyScraper);

echo '<br> -------------------Nr. 9 <br> ';
// 9. uzdavinys9.Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 

function primeNumber(){
    $arrNr_9 = [];
    for ($i=0; $i < 3; $i++) { 
        $arrNr_9[] = rand(1, 33);
    }
    $lasTree = array_slice($arrNr_9, -3);
    
foreach($lasTree as $value){ 
    if ($value == 1 || $value == 0 || $value % 2 !== 0)  {
        $arrNr_9[]= rand(1, 33);  primeNumber();
    }
         return $arrNr_9;

}
}
$resultPrimeArr = primeNumber();
print_r($resultPrimeArr);