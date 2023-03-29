<?php
$file = 'score.csv';
// $line = file($file, FILE_IGNORE_NEW_LINES);
// $total = 0;
// foreach ($line as $value) {
//     $scores = explode(',', $value);
//     $total += array_sum($scores);
// }
// echo $total . PHP_EOL;
$handle = fopen($file, 'r');
if ($handle === false) {
    die("can't not open faile");
}
$line = fgetcsv($handle);
$total = 0;
while ($line !== false) {
    foreach ($line as $value) {
        $scores = explode(',', $value);
        $total += array_sum($scores);
    }
    $line = fgetcsv($handle);        
}
fclose($handle);
echo $total . PHP_EOL;
