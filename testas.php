<?php
echo '<pre>';
$ziurkes = 0;
$ratai = 0;
do{
    $pagauna = rand(3, 5);
    $ziurkes+=$pagauna;
    $ratai++;
}while($ziurkes < 20 );
echo "Pagavo ziurkiu: $ziurkes", '<br>';
echo "Prasuko rata: $ratai";

$animals = [

    ['name' => 'Pilkis', 'type' => 'cat'],

    ['name' => 'Šarikas', 'type' => 'dog'],

    ['name' => 'Bobikas', 'type' => 'dog'],

    ['name' => 'Juodis', 'type' => 'cat'],

    ['name' => 'Pūkis', 'type' => 'dog']

];
foreach ($animals as $key => $values){
    
    if ('cat' == $values['type']){
        echo '<br>';
        print_r($values['name']);
    }
    
}

foreach ($animals as $key => &$values){
    
    if ('Pūkis' == $values['name']){
        echo '<br>';
        $values['type'] = 'cat';
       
    }
    
} print_r($animals);



$_6X6 = [];

for ($k = 0; $k < 6; $k++) {
    
    $row = [];
    for ($i = 0; $i < 6; $i++) {
        $row[] = rand(6, 36);
    }

    $_6X6[] = $row;

}

echo '<br>';echo '<br>';

foreach($_6X6 as $row) {

    foreach($row as $number) {
        // echo " $number ";
    }
    
    // echo '<br>';
}



// print_r($_6X6);
