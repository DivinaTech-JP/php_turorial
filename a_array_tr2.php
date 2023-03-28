<?php
$scores = [
    ['english' => 90, 'math' => 88, 'science' => 80],
    ['english' => 64, 'math' => 72, 'science' => 72],
    ['english' => 90, 'math' => 92, 'science' => 94],
];

$total = 0;
for ($i = 0; $i < count($scores); $i++) {
    foreach ($scores[$i] as $key => $value) {
        if ($key === 'math') {
            $total += $value;
        }
    }
}


echo $total . PHP_EOL;
