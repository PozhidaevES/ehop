<?php 
/*
$arr_class = [
    'Unit',
    'User',
    'Good',
    'Post',
];

foreach ($arr_class as $class) {
    include_once($_SERVER['DOCUMENT_ROOT'].'/nordic/sofia/nordic5/Evgeniy/eshop/system/classes/'.$class.'.php');
}
*/

function classLoader($class)
{
	//echo $_SERVER['DOCUMENT_ROOT'].'/nordic/sofia/nordic5/timon/eshop/system/classes/'.$class.'.php';
	include_once($_SERVER['DOCUMENT_ROOT'].'/nordic/sofia/nordic5/Evgeniy/eshop/system/classes/'.str_replace('\\','/',$class).'.php');
}

spl_autoload_register('classLoader');