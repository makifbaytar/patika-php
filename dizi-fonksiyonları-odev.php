<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function new_func($arr_x, $amount){
    $filteredarray = array_filter($arr_x);
    $rand_keys = array_rand($filteredarray, $amount);
    $show_result = array_map(function ($a) use ($filteredarray){
        return $filteredarray[$a];
    },$rand_keys);
    return $show_result;
}

echo "<pre>";
print_r(new_func($planets,5));
print_r(new_func($planets,4));
print_r(new_func($planets,2));
print_r(new_func($planets,3));
print_r(new_func($planets,4));

?>