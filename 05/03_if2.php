<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述
echo 'わたしは' . PHP_EOL;
foreach($foods as $key => $food){
    echo $key . 'に' . $food . PHP_EOL;
};
echo 'を食べます。';
