<? require_once('../conf_global.php');?>
<link href = "../fonts/stylesheet.css" rel = "stylesheet" type = "text/css" />

<style>

    .flex-box{
        display: flex;
    }

    .flex-horizontal-center {
        justify-content: center;
        font-family: 'Myriad Pro';
        padding-top: 300px;
        
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

    a {
        text-decoration: none;
        color: gray;
        transition: 0.3s;
    }

    a:hover {
        color: #f86403 ;
    }

    .a {
        padding-top: 5px;
        font-size: 18px;  
        margin-bottom: 10px;
        
    }


</style>

<div class="flex-box flex-horizontal-center">
    <form action="<?=PROJECT_URL?>system/controllers/user/login.php" method="get">
        <div>
            <input type="text" name="login" placeholder="Логин" class="inp"/>
        </div>
        <div>
            <input type="password" name="password" placeholder="Пароль" class="inp" /> 
        </div>
        <? if (isset($_GET['wrong'])) {?>
            <div>
                Неверный логин или пароль
            </div>
        <?}?>
        <div class="a">
            <a href="reg/index.php">зарегистрироваться</a>
        </div>
        <div>
            <button class="but">Войти</buttom>
        </div>

        
    </form>
        </div>
