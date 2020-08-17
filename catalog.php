<? require_once('conf_global.php');?>
<? include_once('components/dbconnect/index.php');?>
<? require_once('components/header/index.php');?>
<? require_once('system/classes/autoload.php');?> 

<div class="flex-box flex-horizontal-center flex-wrap">
<?
$filter_str ='';
if($category_id = $_GET['category_id']){
    $filter_str .="AND category_id=$category_id";
}
if($price = $_GET['price']){
    $filter_str .="AND price=$price";
}
//делаем запрос к БД (прокидываем запрос) и сохраняем в переменной
$result = mysqli_query($link,"SELECT * FROM core_goods WHERE id>0 $filter_str");

    while($item = mysqli_fetch_assoc($result)){?> 
        <? $good = new \Nordic\Good($item['id']) ?>
        <div class="item-catalog">
            <a href="<?=PROJECT_URL?>card.php?id=<?=$item['id']?>" class="no-decoration">     
                <div>
                    <img src="<?=$good->getField('foto'); ?>" />
                </div>
                <div class="flex-box flex-horizontal-center name-item-cotalog">
                    <?=$good->getField('title'); ?>
                </div>
                <div class="flex-box flex-horizontal-center price-item-cotalog">
                    <?=$good->getField('price'); ?> руб.
                </div>
            </a>
        </div>
    <? } ?>
</div>

<? require_once('components/footer/index.php');?>
