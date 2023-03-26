<?php
$score = $argv[1];

if ($score >= 80) {
    echo 80 . ' : A';
} elseif ($score >= 60) {
    echo 60 . ' : B';
} else {
    echo 59 . ' : C';
}