<?php
$score = ['english' => 90, 'math' => 88, 'science' => 80];
$total = 0;

foreach ($score as $s) {
    $total += $s;
}

echo $total;
