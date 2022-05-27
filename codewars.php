<?php

function incrementer($nums) {
    $newArr = [];
    for ($i=1; $i <= count($nums); $i++) { 
        $newArr[]=$i;
    }
    if($nums == []){
        return [];
    }
    $yes=[];
    $mazas= '';
    for ($i=0; $i < count($nums); $i++) {
        if ($nums[$i]+$newArr[$i] >= 10) {
            $mazas.=$nums[$i]+$newArr[$i];
            $naujas = substr($mazas,-1);
            $yes[]=intval($naujas);
        } else{ 
        $yes[]=$nums[$i]+$newArr[$i];}
    }return $yes;

  }

// print_r(incrementer([1, 2, 3]));
// print_r(incrementer([4, 6, 7, 1, 3]));
// print_r(incrementer([3, 6, 9, 8, 9]));
print_r(incrementer([3, 6, 9, 8, 9, 10, 12, 13, 14]));