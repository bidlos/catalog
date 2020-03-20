<div class="container">
    <div class="row">
        <?php
        if ($_GET['login'] == 'user') {
            if (!$_SESSION) {
                include 'user_panel.php';
            } else echo 'Вы авторизованны';
        }
        if ($_GET['login'] == 'account') {
            if ($_SESSION) {
                include 'account.php';
            } else {
                echo 'Пожалуйста авторизуйтесь!';
            }
        }
        if ($_GET['product'] == 'items') {
            include 'product.php';
        }
        if (isset($_GET['internet'])) {
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <form action="" method="get">
                            <input type="text" class="form-control" name="place" placeholder="Номер участка" required autofocus><br>
                            <input type="text" class="form-control" name="last-name" placeholder="Фамилия" required><br>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" required><br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="add-info">Добавить участок</button>
                        </form>
                    </div>

                    <div class="col-md-9">
                        <?php

                        $internetGet = 'SELECT * FROM `internet`';
                        $internetGetQuery = mysqli_query($link, $internetGet) or die();
                        ?>
                        <ul class="list-group">
                        <?php
                        foreach ($internetGetQuery as $value) {
                            echo '<li class="list-group-item">Номер участка <b>' . $value['place'] . '</b> Фамилия <b>' . $value['last_name'] . '</b> Номер телефона <b>' . $value['phone'] . '</b></li>';
                        }
                        
                    }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>