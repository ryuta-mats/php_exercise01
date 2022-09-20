<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $num1 = filter_input(INPUT_POST, 'num1');
    $num2 = filter_input(INPUT_POST, 'num2');
    $num3 = filter_input(INPUT_POST, 'num3');

    $errors  = num_varidate($num1, $num2, $num3);

    if (empty($errors)) {
        $total = $num1 + $num2 + $num3;
    }
}


function num_varidate($num1, $num2, $num3)
{
    $errors = [];

    if (empty($num1) || empty($num2) || empty($num3)) {
        $errors[] = 'すべてに数字を入力してください';
    }
    return $errors;
}

function h($str)
{
    // ENT_QUOTES: シングルクオートとダブルクオートを共に変換する。
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
    <h1>数字を入力して下さい</h1>
    <?php if (!empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= h($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="" method="post">
        <p>1つ目の数字</p>
        <p><input type="text" name="num1"></p>
        <p>2つ目の数字</p>
        <p><input type="text" name="num2"></p>
        <p>3つ目の数字</p>
        <p><input type="text" name="num3"></p>
        <input type="submit">
    </form>

    <?php if (!empty($total)) : ?>
        <p>合計値は<?= $total ?>です</p>
    <?php endif; ?>

</body>

</html>
