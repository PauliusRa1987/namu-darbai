
<!-- 1.Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą. -->

<?php
require __DIR__.'/Kibiras1.php';
$kibiras = new Kibiras1;

// echo $kibiras->akmenuKiekis;
$kibiras->prideti1Akmeni();
$kibiras->pridetiDaugAkmenu(50);
echo $kibiras->kiekPririnktaAkmenu(), '<br>';


