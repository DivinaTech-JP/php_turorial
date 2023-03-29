<?php
$scores = [90, 72, 58, 80];
$file = 'score.txt';
$handle = fopen($file, 'w');
if ($handle === false) {
    die("can't not open file");
}
for ($i = 0; $i < count($scores); $i++) {
    fwrite($handle, $scores[$i] . PHP_EOL);
}
fclose($handle);

// $array = file($file, FILE_IGNORE_NEW_LINES);
// $total = array_sum($array);
// echo $total . PHP_EOL;

$reed_handle = fopen($file, 'r');
if ($reed_handle === false) {
    die("can't not open reedfile");
}
$line = fgets($reed_handle);
$score = [];
while ($line !== false) {
    $score[] = trim($line);
    $line = fgets($reed_handle);
}
fclose($reed_handle);
$total = array_sum($score);
echo $total;
