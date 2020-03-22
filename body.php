<div class="container">
    <div class="row">
        <?php
            if($_GET['login']=='user'){
                include 'account.php';
            }
            print_r($_SESSION);
        ?>
    </div>
</div>