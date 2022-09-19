<?php

echo '$aの値を入力して下さい: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力して下さい: ';
$b = trim(fgets(STDIN));

// ここに処理を記述
if($a>$b)
{
    echo $a;
}elseif($a<$b){
    echo $b;
}elseif($a==$b){
    echo "入力された値は等しいです";
};
