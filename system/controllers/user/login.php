<?php

require_once('../../../conf_global.php');

$login = $_GET['login'];
$password = $_GET['password'];

require_once(PROJECT_ROOT.'components/dbconnect/index.php');

$request = "SELECT id FROM core_users WHERE (login='$login' OR email='$login') AND password ='$password' ";
//$request = "SELECT id FROM core_users WHERE login='$login' AND password ='$password' ";

$result = mysqli_query($link,$request);

$user = mysqli_fetch_assoc($result);

if($user['id'] != 0){
    setcookie('user_id',$user['id'], time() + 3600, '/');
    //echo 'Вы успешно вошли';
    header('Location: '.PROJECT_URL.'catalog.php');
}else{
    header('Location: '.$_SERVER['HTTP_REFERER'].'?wrong=1');
}

?>