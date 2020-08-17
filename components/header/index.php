
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css" ></link>
        <link rel="stylesheet" href="components/header/style.css" ></link>
        <link href = "fonts/stylesheet.css" rel = "stylesheet" type = "text/css" />
        <script src="js/script.js"></script>  
    </head>

    <body>
        <div class="menu border">
            <div class="flex-box">
                <div class="menu-left flex-box flex-vertical-center ">
                    <a href="index.php"> <img src="img/icons/logo.jpg"></a>
                    <a href="catalog.php?category_id=1" class="menu-style-text">Женщинам</a>
                    <a href="catalog.php?category_id=2" class="menu-style-text">Мужчинам</a>
                    <a href="catalog.php?category_id=3" class="menu-style-text">Детям</a>
                    <a href="catalog.php" class="menu-style-text">Новинки</a>
                    <a href="index.php" class="menu-style-text">О нас</a>
                </div>
                <div class="menu-right flex-box flex-vertical-center flex-end">
                    <div>
                        <?
                            include_once(PROJECT_ROOT.'system/classes/autoload.php');
                            $user = new \Nordic\User($_COOKIE['user_id']);
                            echo $user->getField('login'); 
                        ?>
                    </div>
                    <img src="img/icons/account.png">
                    <a href="auth/index.php" class="menu-style-text">
                        Войти
                    </a>
                    <img src="img/icons/bascet.png">
                    <a href="basket.php" class="menu-style-text">
                            <?session_start()?>
                            Корзина (<?=count($_SESSION['basket']) ?>)
                    </a>
                </div>
            </div>
            <div class="gray-line"></div>
        </div>

    