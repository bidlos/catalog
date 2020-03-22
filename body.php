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
        if ($_GET['product'] == 'edit') {
            editItems();
        }
        foreach ($itemsTblQuery as $key) {
            if ($_GET['product'] == $key['id']) {
        ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><?php echo $key['title']; ?></h3>
                        </div>
                        <div class="col-md-12">
                            <?php echo $key['date'] . ' | ' . $key['category']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                        <?php echo $key['description']; ?>
                        </div>
                        <div class="col-md-4">
                            <! -- Список категорий или изображение -->
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        if ($_GET['product'] == 'add') {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title items">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"> </div>
                </div>
            </div>

        <?php
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