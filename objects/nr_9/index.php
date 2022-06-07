<!-- 9.(STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka. -->
<pre>
<?php
require __DIR__ . '/MarsoPalydovas.php';

$palydovas1 = MarsoPalydovas::createObj();
$palydovas2 = MarsoPalydovas::createObj();
$palydovas3 = MarsoPalydovas::createObj();

var_dump($palydovas1);
echo '<br>';
var_dump($palydovas2);
echo '<br>';
var_dump($palydovas3);
echo '<br>';

echo $palydovas1->get_title();
echo '<br>';
echo $palydovas2->get_title();
echo '<br>';
echo $palydovas3->get_title();
echo '<br>';


// require __DIR__.'/MarsoPalydovas.php';

// $marsas1 = MarsoPalydovas::create('aaa');
// $marsas2 = MarsoPalydovas::create('bbb');

// print_r($marsas1::$title);
// var_dump(MarsoPalydovas::$title);

