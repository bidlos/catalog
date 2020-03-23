<div class="container">
    <div class="row">
        <?php
            if($_GET['login']=='user'){include 'login.php';}
            print_r($_SESSION);
        ?>
    </div>
</div>