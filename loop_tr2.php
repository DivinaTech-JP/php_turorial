<?php
$colors = ['Red', 'Green', 'Blue'];

for ($i = 1; $i <= count($colors); $i++) {
    echo $i . ':' . $colors[$i - 1] . PHP_EOL;
}
