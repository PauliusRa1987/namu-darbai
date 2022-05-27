<?php
$skaicius = rand(100, 999);
$pirma = function($sk){
    return $sk*3;
};
$antra = function($sk){
    return $sk*5;
};
$trecia = function($sk){
    return $sk*7;
};

$masyvas = [ $pirma, $antra, $trecia];


foreach ($masyvas as $value){
    $value($skaicius);
    echo $value($skaicius), '<br>';
}

// foreach ($masyvas as &$value){
//   $value =   $value($skaicius);
//     echo $value, '<br>';
// }
