<?php

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

// ここに処理を記述
if($point % 2 == 0){
    echo $point . 'は偶数です。'; 
}elseif($point % 2 == 1){
    echo $point . 'は奇数です。'; 
};

//小数点だとエラー
//Deprecated: Implicit conversion from float-string "5.5" to int loses precision in /var/www/html/04/02_if.php on line 7
//Deprecated: Implicit conversion from float-string "5.5" to int loses precision in /var/www/html/04/02_if.php on line 9
