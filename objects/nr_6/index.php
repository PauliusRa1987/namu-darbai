<!-- 6.Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę. -->

<?php
require __DIR__.'/Stikline.php';
$stikline100 = new Stikline(100);
$stikline150 = new Stikline(150);
$stikline200 = new Stikline(200);


$stikline200->ipilti(300);
$stikline150->ipilti($stikline200->ispilti());
$stikline100->ipilti($stikline150->ispilti());

var_dump($stikline200);
var_dump($stikline150);
var_dump($stikline100);
