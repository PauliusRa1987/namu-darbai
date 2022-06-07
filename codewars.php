<?php

function highAndLow($numbers){
    $dar = explode(' ', $numbers);
    function sortByLength($a,$b){
        return strlen($b)-strlen($a);
    }
    usort($dar,'sortByLength');
    $kon = $dar[count($dar)-1];
    return strlen($kon);

  
}
$nume = "bitcoin take over the world maybe who knows perhaps";

// print_r($dar);
print_r(highAndLow($nume));