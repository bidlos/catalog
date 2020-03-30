<div class="container">
    <div class="row">
        <?php
        if ($_GET['login'] == 'user') {
            include 'login.php';
        }
        if (isset($_GET['internet'])) {
        ?>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="file[]" multiple>
                <input type="submit" value="Отправить">
            </form>
        <?php
        }

        $img = 'SELECT * FROM `shop_img`';
        $imgQuery = mysqli_query($link, $img) or die();
        foreach ($imgQuery as $img) {
            echo '<img src="/uploads/' . $img['img_name'] . '">';
        }

        ?>
    </div>
</div>