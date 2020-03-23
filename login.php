<div class="col-md-6">
    <form method="post" action="#">
        <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputLogin1">
            <small id="emailHelp" class="form-text text-muted">Никому не говорите ваш логин</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
<div class="col-md-6">
<form method="post" action="#">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputLogin1">
            <small id="emailHelp" class="form-text text-muted">Ваш логин</small>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1">
            <small id="emailHelp" class="form-text text-muted">Ваше имя</small>
        </div></div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Ваша почта</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submitReg" class="btn btn-primary">Регистрация</button>
    </form>
</div>
<?php

if (isset($_POST['submit'])) {
    echo '<meta http-equiv="refresh" content="0.01">';
    echo $Login->loginEnter($_POST['login'], $_POST['password']);
}
if (isset($_POST['submitReg'])) {
    echo '<meta http-equiv="refresh" content="0.01">';
    echo $Login->registerUser();
}


?>