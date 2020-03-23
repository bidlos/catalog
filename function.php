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

class Login
{
    public function loginEnter($login, $password)
    {
        global $userQuery;
        foreach ($userQuery as $key) {
            if (htmlspecialchars($login) == $key['user_login'] || md5($password) == $key['user_password']) {
                $_SESSION['login'] = $login;
                $_SESSION['id'] = $key['id'];
            }
        }
    }
    public function registerUser()
    {
        $regLogin = htmlspecialchars($_POST['login']);
        $regName = htmlspecialchars($_POST['name']);
        $regEmail = htmlspecialchars($_POST['email']);
        $regPassword = md5($_POST['password']);
        $registerUser1 = "INSERT INTO `shop_user`(`user_login`, `user_name`, `user_email`, `user_password`) VALUES (`$regLogin`, `$regName`, `$regEmail`, `$regPassword`)";
        return $registerUser1;
    }
    public function logOut()
    {
        session_unset();
    }
}


$Login = new Login();


echo 'test';
