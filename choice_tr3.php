<?php

// var_dump($argv);
$id = $argv[1];
$password = $argv[2];

if ($id === 'Andy' && $password === 'secret') {
    echo 'OK';
} else {
    echo 'NG';
}