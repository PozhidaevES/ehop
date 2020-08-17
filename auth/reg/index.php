
<?require_once('../../conf_global.php'); ?>
<link href = "../../fonts/stylesheet.css" rel = "stylesheet" type = "text/css" />

<style>

    .flex-box{
        display: flex;
    }

    .flex-horizontal-center {
        justify-content: center;
        padding-top: 300px;
        font-family: 'Myriad Pro';
    }

    .inp {
        width: 300px;
        height: 30px;
        border: solid #bbbbbb 1px;
        font-size: 18px;
        margin-bottom: 5px;
        font-family: 'Myriad Pro';
    }

    .but {
        width: 300px;
        height: 30px;
        font-size: 18px;
        color: #ffffff;
        background-color: #f68236;
        cursor: pointer;
        text-decoration: none;
        transition: 0.3s;
        border: solid #f68236 1px;
        font-family: 'Myriad Pro';
    }

    .but:hover {
        box-shadow: 0 0 10px 2px #f68236;
        background-color: #f86403;
    }

</style>

<div class="flex-box flex-horizontal-center">
    <form action="<?=PROJECT_URL?>system/controllers/user/registration.php" method="get">

        <div>
            <input type="text" required name="login"  placeholder="Логин" class="inp"/>
        </div>
        <div>
            <input type="email" required  name="email"  placeholder="E-mail" class="inp"/>
        </div>
        <div>
            <input type="password" required name="password" placeholder="Пароль" class="inp"/>
        </div>
        <div>
        <?if ($_GET['wrong'] == 1) {?>
                Вы не ввели данные 
            <?} elseif ($_GET['wrong'] == 2) {?>
                Такой логин или email уже существуют
            <?} else {?>
                
            <?}?>
        </div>
        <div>
            <button class="but">Зарегистрироваться</button>
        </div>
    </form >
</div>