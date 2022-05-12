<?php
echo '<br> -------------------Nr.1 a)<br> ';

// 1. uzdavinys

//c)
for ($i=0; $i < 400; $i++) { 
    echo "<div style= 'display: inline-block;'>*</div>";
} 

echo '<br> -------------------Nr.1 d)<br> ';
//d)
for ($i=0; $i < 8; $i++) { 
    for ($j=0; $j < 50; $j++) { 
        echo '*';
    }echo '<br>';
}


echo '<br> -------------------Nr.2 <br> ';




// 2. uzdavinys NUSPALVOTO!!

$skaiciai = '';
for ($i=1; $i < 300; $i++) { 
    $narys =rand(0, 300).' ';
    if($narys > 275){
        $skaiciai.="<span style= 'color: red;'>$narys</span>"; 
    }else { 
    $skaiciai.="<span>$narys</span>";}
}echo $skaiciai,  '<br>';

$skaiciuEile = explode(' ', $skaiciai);
echo 'Viso skaiciu yra: ', count($skaiciuEile),  '<br>';



echo '<br> -------------------Nr.3 <br> ';

// 3. uzdavinys

$randNumber = rand(3000, 4000);
$stringas = '';
for ($i=1; $i < $randNumber; $i++) {
  if ($i%77 === 0) {
    $stringas.=$i.',';
  }

    
}echo "<div style= 'overflow-wrap: break-word;'>".mb_substr($stringas, 0, -1)."</div>";

echo '<br> -------------------Nr.4 <br> ';

// 4. uzdavinys
echo '<br> -------------------Nr.4 a)<br> ';
$taskai = '*';
$eile = '';
for ($i=0; $i < 625; $i++) { 
    $eile .= $taskai++;   
}
echo "<div style= 'letter-spacing: 12px;'>".chunk_split($eile, 25, '<br>')."</div>";

echo '<br> -------------------Nr.4 b)<br> ';
for ($i=0; $i < 25; $i++) { 
    for ($j=0; $j < 25; $j++) { 
        echo "<p style= 'display: inline;letter-spacing: 12px;'>*</p>";
    }echo '<br>';
}


echo '<br> -------------------Nr.5 <br> ';

// 5. uzdavinys
$krastine = 25;
for ($i=1; $i <= $krastine; $i++) { 
    for ($j=1; $j <= $krastine; $j++) { 
        if ($i==$j || $j == ($krastine-$i+1)){
            echo "<p style= 'color: red; display: inline;letter-spacing: 12px;'>*</p>";
        }else {
            echo "<p style= 'letter-spacing: 12px; display: inline;'>*</p>";}
    }echo '<br>';
}
echo '<br> -------------------Nr.6 <br> ';

// 6. uzdavinys
echo '<br> -------------------Nr.6 a)<br> ';
do{
    $moneta = rand(0, 1) ? 'S' : 'H';
    echo $moneta.'<br>';
}while ($moneta != 'H');
echo '<br> -------------------Nr.6 b)<br> ';
$darome = 0;
do{
    $moneta1 = rand(0, 1) ? 'S' : 'H';
   if ($moneta1 === 'H') {
       $darome++;
   }
    echo $moneta1.'<br>';

}while ($darome < 3);

echo '<br> -------------------Nr.6 c)<br> ';
$darome1 = '';
do{
    $moneta2 = rand(0, 1) ? 'S' : 'H';
    if ($moneta2 == 'H') {   
        $darome1++;  
    }
    if($moneta2 == 'S'){
        $darome1=0;       
    }echo $moneta2; 
}while ($darome1 < 3);


// 7. uzdavinys NEBAIGTAS!!!
echo '<br> -------------------Nr.7 <br> ';
$kazioSuma = 0;
$petroSuma = 0;
do{
    $kozioTaskai = rand(10, 20);
    $kazioSuma+=$kozioTaskai;
    if($kazioSuma > 222){
        continue;
    }
    $petroTaskai = rand(5, 25);
    $petroSuma += $petroTaskai;
    if($petroSuma > 222){
        continue;
    }
}while($kazioSuma < 222 && $petroSuma < 222);
if ($kazioSuma > $petroSuma){
    $laimetojas = 'Kazys';
}else if($kazioSuma < $petroSuma){
    $laimetojas = 'Petras';
}else {
    $laimetojas = 'Lygu';
}
echo "Kazio taskai: $kazioSuma ", "Petro taskai: $petroSuma ", "Partija laimejo: $laimetojas.";

// 8. uzdavinys Ne-mano!
echo '<br> -------------------Nr.8 <br> ';
$eiliuSkaicius = 11;
for ($i = 1; $i < $eiliuSkaicius; $i++) {
    for ($j = $i; $j < $eiliuSkaicius; $j++){ 
        echo "&nbsp;&nbsp;";}
    for ($j = 2 * $i - 1; $j > 0; $j--){
        $spalva = 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.73)';
        echo "<span style= 'color: $spalva; display: inline;'>*</span>";
    }
    echo "<br>";
}
for ($i = $eiliuSkaicius; $i > 0; $i--) {
    for ($j = $eiliuSkaicius - $i; $j >0; $j--){ 
        echo "&nbsp;&nbsp;";}
    for ($j = 2 * $i - 1; $j > 0; $j--){ 
        $spalva = 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.73)';
        echo "<span style= 'color: $spalva; display: inline;'>*</span>";
    }
    echo "<br>";
}

// 10. uzdavinys
echo '<br> -------------------Nr.10 <br> ';



$smugiai = 0;
$visoSmugiu = 0;
for ($i=0; $i < 5; $i++) { 
    $darboAtlikta = 0;
    do{
        $vienasSmugis = rand(5, 20);
        $darboAtlikta+=$vienasSmugis;
        $smugiai++;
    }while($darboAtlikta < 85);
    
    
   
} echo "Viso reikes smugiu:  $smugiai ";

// 11. uzdavinys 
echo '<br> -------------------Nr.11 <br> ';
$stringas = [];
do{
    $unikalusNr = rand(0, 200);
    if(in_array($unikalusNr, $stringas)){
        continue;
    }
    array_push($stringas, $unikalusNr);
  
    
}while (count($stringas) < 50);
$arrays = $stringas;
print_r(implode(' ', $arrays,)) ;
echo '<br> <br> ';

$pirminisStringas = [];

for ($i=0; $i < count($stringas); $i++) { 
   $skaiciuokle = 0;
   for ($j=1; $j < 200; $j++) { 
    if ($stringas[$i]%$j === 0) { 
        $skaiciuokle++;
    }
    if ($skaiciuokle == 2) {
    array_push($pirminisStringas, $stringas[$i]);
    }
}

}print_r($pirminisStringas);


