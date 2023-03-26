<?php
$names = ['Andy', 'Betty', 'Carol'];
$tmp = $names[0];
$names[0] = $names[2];
$names[2] = $tmp;

var_dump($names);