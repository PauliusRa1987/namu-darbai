<!-- 4.(EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą. -->
<?php
require __DIR__.'/Kibiras3.php';
require __DIR__.'/KibirasNePo1.php';
$kibiras4 = new KibirasNePo1;

echo $kibiras4->prideti1Akmeni();

$kibiras4->pridetiDaugAkmenu(50);

echo $kibiras4->kiekPririnktaAkmenu();