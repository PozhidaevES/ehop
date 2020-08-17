<?php

session_start();

$goods = $_SESSION['basket'];

$id = $_GET['id'];

if(in_array($id,$goods)){
    for($i=0; $i<count($goods); $i++){
        if($goods[$i] == $id){
            unset($goods[$i]);
        }
    }

    sort($goods);
}

$_SESSION['basket'] = $goods;

header('Location: '.$_SERVER['HTTP_REFERER']);