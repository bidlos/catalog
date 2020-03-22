<div class="col-md-12">

    <form method="post" action="#">
        <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Никому не говорите ваш логин</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="submit" name="unset" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
class Login
{
    public function LoginEnter($login, $password)
    {
        global $userQuery;
        foreach ($userQuery as $key) {
            if (htmlspecialchars($login) == $key['user_login'] || md5($password) == $key['user_password']) {
                $_SESSION['login'] = $login;
                $_SESSION['id'] = $key['id'];
            }
        }
    }
    public function LogOut()
    {
        session_unset();
    }
}

$Login = new Login;

if (isset($_POST['submit'])) {
    echo '<meta http-equiv="refresh" content="0.01">';
    echo $Login->LoginEnter($_POST['login'], $_POST['password']);
}
if (isset($_POST['unset'])) {
    echo '<meta http-equiv="refresh" content="0.01">';
    $Login->LogOut();
}
?>