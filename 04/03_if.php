<?php

echo '$scoreの値を入力して下さい: ';
$score = trim(fgets(STDIN));

// ここに処理を記述
if($score >= 60){
    echo '合格です。';
}elseif($score < 60 && $score >= 30){
    echo '追試です。';
}elseif($score < 30){
    echo '不合格です。';
};
