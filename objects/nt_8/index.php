<!-- 8.Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui. -->

<?php
require __DIR__.'/Pinigine.php';
$pinigine = new Pinigine;
$pinigine->ideti(32);
$pinigine->ideti(1);
$pinigine->ideti(3);
$pinigine->ideti(2);
$pinigine->ideti(0.5);

echo $pinigine->monetos(), $pinigine->Banknotai();