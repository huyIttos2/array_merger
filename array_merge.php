<?php

$color_1 = array('red', 'green');
$color_2 = array('blue', 'yellow');
$color = array();
//
//$color = array_merge($color_1, $color_2);
echo "<pre>";
print_r($color);
echo "</pre>";
for($i=0;$i<count($color_1);$i++){
    array_push($color,$color_1[$i]);
}
for($j=0;$j<count($color_2);$j++){
    array_push($color,$color_2[$j]);
}
echo "<pre>";
print_r($color);
echo "</pre>";
