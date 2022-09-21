<?php

require_once __DIR__ . '/04_functions.php';

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // コードを追記
    $body_temperature = $_POST['body_temperature'];
    // POSTされたbody_temperatureを取得
    $msg = create_message($body_temperature);
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
    <?php if ($msg): ?>
        <h1><?= $msg ?></h1>
    <?php endif; ?>
    <h2>体温を入力してください</h2>
    <form action="" method="post">
        <input type="number" step="0.1" name="body_temperature" required>
        <input type="submit" value="送信">
    </form>
</body>

</html>
