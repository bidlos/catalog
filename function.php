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

// print_r($_SESSION['id']);

function addItems (){
    
}

function editItems()
{
    global $itemsTblQuery;
    global $userTblQuery;
?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($itemsTblQuery as $items) {
                if ($items['user_id'] == $_SESSION['id']) {
            ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect fill="#55595c" width="100%" height="100%"></rect><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">
                                    <h3><?php echo $items['title']; ?></h3>
                                </p>
                                <p>
                                    <h6><?php echo $items['category']; ?></h6>
                                </p>
                                <p class="card-text"><?php echo mb_strimwidth($items['description'], 0, 100, '...'); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="?product=edit" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </div>
                                    <small class="text-muted"><?php echo $items['date']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

            }
            ?>
            </div>
        </div>
    <?php
        }

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
            $place = (int) $_GET['place'];
            $lastName = htmlspecialchars($_GET['last-name']);
            $phone = (int) $_GET['phone'];
            $internet = "INSERT INTO `internet`(`place`, `last_name`, `phone`) VALUES ('$place', '$lastName', '$phone')";
        }
