<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
$msg ='';
foreach($subjects as $subject){
    switch($subject) {
        case '数学':
            $msg .= "{$subject}の試験は明日です。" . PHP_EOL;
            break;    

        case '英語':
            $msg .= "{$subject}の試験は明後日です。" . PHP_EOL;
            break;    

        case '理科':
            $msg .= "{$subject}の試験は明々後日です。" . PHP_EOL;
            break;    

        case '社会':
            $msg .= "{$subject}の試験は昨日です。" . PHP_EOL;
            break;    

        case '国語':
            $msg .= "{$subject}の試験は中止です。" . PHP_EOL;
            break;    

    };
};

echo $msg;
