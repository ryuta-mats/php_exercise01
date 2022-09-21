<?php 

require_once __DIR__ . '/01_functions.php';

// コードを追記
$time_zone = '夜';
$greeting = get_greeting($time_zone);
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
<h2>
    <?= $greeting ?>
</h2>
</body>
</html>
