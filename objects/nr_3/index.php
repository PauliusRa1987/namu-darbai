<!-- 3.(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą. -->

<?php

require __DIR__.'/Kibiras2.php';
$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;

// Kibiras2::prideti1Akmeni();


// var_dump(Kibiras2::prideti1Akmeni());

$kibiras1->pridetiDaugAkmenu(50);
$kibiras2->pridetiDaugAkmenu(6);
$kibiras3->pridetiDaugAkmenu(10);

var_dump(Kibiras2::kiekPririnktaAkmenu());