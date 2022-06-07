<?php 
// Naudoja Kazkas kitas
require __DIR__.'/Bebras.php';


$bebras1 = new Bebras('Jonas', []);
$bebras2 = new Bebras('Jane', [1, 2]);
$bebras3 = $bebras1;
$bebras4 = clone($bebras1);
echo '<pre>';

// var_dump($bebras1);
// var_dump($bebras2);
// // var_dump($bebras3);
// var_dump($bebras4);

// echo $bebras1 -> tail;
// echo '<br>';
// $bebras1 -> tail = 'very long';
// echo $bebras1 -> tail;
echo $bebras1 ->name =' Burokas';
// $bebras1 -> changeAnge('bb');

// $bebras1 ->  eathIsYourAge();

