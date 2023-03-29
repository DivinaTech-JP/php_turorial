<?php
function search($scores, $target)
{
    return in_array($target, $scores);
}

$scores = [90, 72, 58, 80, 66, 50];
$target = $argv[1];

$found = search($scores, $target);
if ($found === true) {
    echo 'Found' . PHP_EOL;
} else {
    echo 'Not Found' . PHP_EOL;
}
