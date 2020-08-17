<?php

session_start();

$goods = $_SESSION['basket'];

$id = $_GET['id'];

if(!in_array($id, $goods)){
    if($goods) {
        $goods[] = $id;
    }else {
        $goods = [];
        $goods[] = $id;
    }
}

$_SESSION['basket'] = $goods;

header('Location: '.$_SERVER['HTTP_REFERER']);