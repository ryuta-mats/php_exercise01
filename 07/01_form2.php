<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

// ここにコードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $select_stylist = $_POST['stylist'];
};
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            // ここにコードを追記
            <?php foreach($stylists as $key => $stylist): ?>
                <option value="<?= $stylist ?>"><?= $key ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <!--// ここにコードを追記-->
    <?php if(!empty($select_stylist)) : ?>
        <p>あなたの担当は<?= $select_stylist ?>です</p>
    <?php endif ; ?>
</body>

</html>
