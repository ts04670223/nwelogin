<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>白金會員中心</title>
</head>

<body>
    <h1>白金會員中心</h1>
    尊爵的
    <?php
    if (isset($_COOKIE['login'])) {
        echo $_COOKIE['login'] . "歡迎";
    } ?>
    你好，歡迎你
</body>

</html>