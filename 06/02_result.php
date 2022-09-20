<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $name = $_POST['name'];
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
    <p>私の名前は、
    <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
    です。</p>
    <a href="02_form.php">戻る</a>
</body>
</html>
