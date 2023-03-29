<?php
$scores = [
    [90, 88, 80],
    [64, 72, 72],
    [90,92, 94],
];
$file = 'score.csv';
$handle = fopen($file, 'w');
if ($handle === false) {
    die("can't not open file");
}
foreach ($scores as $value) {
    // fwrite($handle, implode(',', $value) . PHP_EOL);
    fputcsv($handle, $value);
}
fclose($handle);
