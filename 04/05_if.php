<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

// ここに処理を記述
$msg = 'は素数です。';
for($i = 2 ; $num > $i; $i++){
    if($num % $i == 0){
        $msg = 'は素数ではありません。';
    }
};

echo $num . $msg;
