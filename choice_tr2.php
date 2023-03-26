<?php
$scores = [90, 72, 58, 80];

for ($i = 0; $i < count($scores); $i++) {
    $rank = 'C';
    if ($scores[$i] >= 80) {
        $rank = 'A';
    } elseif ($scores[$i] > 60) {
        $rank = 'B';       
    }
    echo $scores[$i] . ' : ' . $rank . PHP_EOL;
}