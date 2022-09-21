<?php

function check_temperature($body_temperature)
{
    // コードを追記
    // 37度未満の場合はtrue
    // 37度以上の場合はfalse
    if($body_temperature < 37){
        return true;
    }else{
        return false;
    }
}

function create_message($body_temperature)
{
    // コードを追記
    // check_temperature関数を呼び出す
    // check_temperature関数の結果によって文字列を変更し、関数の戻り値として設定
    $flag = check_temperature($body_temperature);
    if($flag){
        return 'あなたは平熱なので、問題なく参加できます';
    }else{
        return 'あなたは発熱しているので、参加できません';
    }
}
?>
