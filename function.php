<?php
session_start();

require_once 'config.php';

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$user = 'SELECT * FROM `shop_user`';
$userQuery = mysqli_query($link, $user) or die();

$shop = 'SELECT * FROM `shop_user_shop`';
$shopQuery = mysqli_query($link, $shop) or die();

$items = 'SELECT * FROM `shop_items`';
$itemsQuery = mysqli_query($link, $items) or die();


