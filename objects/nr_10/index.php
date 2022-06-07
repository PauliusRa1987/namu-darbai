<!-- 10.(STATIC) Sukurti klasę Tenisininkas. Klasė Tenisininkas turi privačią savybę vardas, privačią savybę kamuoliukas  (true jei turi ir false jei ne) privačią static savybę zaidejas1, privačią static savybę zaidejas2 (žaidėjų objektams saugoti)  Klasė turi tokius metodus: 
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. Iškviesti statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką. Žaidėjo objekto metodu perduotiKamuoliuka() perduoti kamuoliuką kitam žaidėjui ir grąžinti atgal iš kito žaidėjo objekto.  -->

<?php

require __DIR__ . '/Tenisininkas.php';

$t1 = new Tenisininkas('Petrovichius');
$t2 = new Tenisininkas('Marija DB');

Tenisininkas::zaidimoPradzia();

echo '<pre>';

print_r($t1);
print_r($t2);

$t1->perduotiKamuoliuka();

print_r($t1);
print_r($t2);

$t1->perduotiKamuoliuka();

print_r($t1);
print_r($t2);