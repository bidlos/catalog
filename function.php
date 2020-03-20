<?php
session_start();

require_once 'config.php';

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$userTbl = 'SELECT * FROM `shop_user`';
$userTblQuery = mysqli_query($link, $userTbl) or die();

$shopTbl = 'SELECT * FROM `shop_user_shop`';
$shopTblQuery = mysqli_query($link, $shopTbl) or die();

$itemsTbl = 'SELECT * FROM `shop_items`';
$itemsTblQuery = mysqli_query($link, $itemsTbl) or die();

// print_r($_SESSION);

function refreshPage()
{
    echo '<meta http-equiv="refresh" content="0.01">';
}

if (isset($_POST['submit'])) {
    foreach ($userTblQuery as $key => $value) {
        if ($value['user_login'] == $_POST['login'] && $value['user_password'] == md5(htmlspecialchars($_POST['password']))) {
            $_SESSION['login'] = htmlspecialchars($_POST['login']);
            $_SESSION['id'] = htmlspecialchars($value['id']);
            refreshPage();
        }
    }
}

if (isset($_POST['unset'])) {
    session_unset('login');
    refreshPage();
}

if (isset($_GET['add-info'])) {
    $place = (int)$_GET['place'];
    $lastName = htmlspecialchars($_GET['last-name']);
    $phone =(int)$_GET['phone'];
    $internet = "INSERT INTO `internet`(`place`, `last_name`, `phone`) VALUES ('$place', '$lastName', '$phone')";

}
