<?php

$score = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <!--//ここにコードを追記-->
    <!--<?php var_dump($score) ?>-->
    <?php if(empty($score)): ?>
        <h1>点数を入力して下さい</h1>
    <?php elseif($score >= 60): ?>
        <h1>合格です。</h1>
    <?php else: ?>
        <h1>不合格です。</h1>
    <?php endif; ?>

    <?php if(!empty($err_msg)) : ?>
        <ul>
            <li>点数が入力されていません</li>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
