<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
$flag = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];

    $flag = true;

    if (empty($name)) {
        $err_msgs[] = '名前を入力してください';
        $flag = false;
    }
    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力してください';
        $flag = false;
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力してください';
        $flag = false;
    }

    if ($flag) {
        header("Location: http://localhost/07/05_confirm.php?item={$item_key}");
        exit;
    }
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
    <!--    <?php var_dump($name) ?>
    <?php var_dump($tel) ?>
    <?php var_dump($email) ?>
    <?php var_dump($item_key) ?> -->

    <h3>個人情報を入力してください</h3>

    <?php if (!empty($err_msgs)) : ?>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <label for="name">名前</label><br>
            <input id="name" type="text" name="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="tel">電話番号</label><br>
            <input id="tel" type="text" name="tel" value="<?= $tel ?>">
        </div>
        <div>
            <label for="email">メールアドレス</label><br>
            <input id="email" type="email" name="email" value="<?= $email ?>">
        </div>
        <div>
            <label for="item_key">
                <h3>購入するものを選択して下さい</h3>
            </label>
            <select name="item_key">
                <?php foreach ($items as $item) : ?>
                    <?php if ($item == $item_key) : ?>
                        <option selected value="<?= $item ?>"><?= $item ?></option>
                    <?php else : ?>
                        <option value="<?= $item ?>"><?= $item ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>

        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

    <?php if ($flag) : ?>
        <h3>以下の内容を送信しました</h3>
        <table>
            <tr>
                <td>名前:</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>電話番号:</td>
                <td><?= $tel ?></td>
            </tr>
            <tr>
                <td>メールアドレス:</td>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <td>購入するもの:</td>
                <td><?= $item_key ?></td>
            </tr>
        </table>
    <?php endif; ?>

</body>

</html>
