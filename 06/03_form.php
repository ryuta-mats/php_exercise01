<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $age = $_POST['age'];

    // 初期化
    $errors = [];

    if (empty($age)) {
        $errors[] = "年齢を入力して下さい。";
    }
};



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
    <h1>POSTメソッド</h1>

    <?php if (!empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    <form action="" method="post">
        <p>年齢</p>
        <input id="age_area" name="age" type="text">
        <input type="submit" value="送信">
    </form>
    <?php if ($age) : ?>
        <p>私は<?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>歳です。</p>
    <?php endif; ?>
</body>

</html>
