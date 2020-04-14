<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $lib = $_GET['lib'] ?? 'Landing';
        $lib = $lib.'.css';
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $lib ?>"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home in Phone</title>
</head>
<body>
<div class="head">
    <div>
        <div class="logo">Home in Phone</div>
        <div class="logo2">Система розумного будинку</div>
    </div>
    <div class="head_text">
        <a href="main.php?page=Landing_content&lib=Landing">Головна</a>
        <a href="main.php?page=Shop_content&lib=Shop_page">Каталог</a>
        <a href="main.php?page=Inform_content&lib=Inform_page">Про нас</a>
        <button id="btn_search"></button>
        <button id="btn_phone"></button>
        <button id="btn_buy"></button>
        <button id="btn_menu"></button>
    </div>
</div>
</body>

