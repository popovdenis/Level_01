<?php

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');


foreach ($arr as $key => $value) {
    $en[] = $key;
}
print_r($en);
foreach ($arr as $key => $value) {
    $ru[] = $value;
}
print_r($ru);