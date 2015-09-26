<?php
function empty_value($value){
    return empty(trim($value));
}
function has_value($value){
    return isset($value) && $value !== "";
}
function max_size($value, $max){
    return strlen($value) <= $max;
}
function min_size($value, $min){
    return strlen($value) >= $min;
}