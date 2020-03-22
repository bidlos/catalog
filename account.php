<div class="col-md-12">
    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Никому не говорите ваш логин</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
$Login = new Login;
echo $Login->LoginEnter($_GET['login'], $_GET['password']);
?>