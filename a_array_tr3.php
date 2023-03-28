<?php
$countries = [
  'Japan' => ['Tokyo', 'Osaka', 'Nagoya'],
  'England' => ['London', 'Birmingham', 'Glasgow'],
  'France' => ['Paris', 'Marseitle', 'Lyon'],
];

foreach ($countries as $key => $value) {
    if ($key === 'England') {
        foreach ($value as $res) {
            echo $res . PHP_EOL;
        }
    }
}
