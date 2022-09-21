<?php
$flag = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flag = false;
    $today = date("Y年n月j日");
    $dow = create_dow_str(date("w"));

    $msg = '今日は、' . $today . $dow .'です';
}

function create_dow_str($dow_index)
{
    switch ($dow_index) {
        case 0:
            $dow_str = "日曜日";
            break;
        case 1:
            $dow_str = "月曜日";
            break;
        case 2:
            $dow_str = "火曜日";
            break;
        case 3:
            $dow_str = "水曜日";
            break;
        case 4:
            $dow_str = "木曜日";
            break;
        case 5:
            $dow_str = "金曜日";
            break;
        case 6:
            $dow_str = "土曜日";
            break;
    }

    return $dow_str;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($flag) : ?>
        <h1>本日の日付、曜日を確認しますか？</h1>
        <form action="" method="POST">
            <input type="submit" value="はい">
        </form>
    <?php else: ?>
        <h1><?= $msg ?></h1>
        <a href="">戻る</a>
    <?php endif; ?>

</body>

</html>
