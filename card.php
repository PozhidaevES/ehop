<? require_once('conf_global.php');?>
<? include_once('components/dbconnect/index.php');?>
<? require_once('components/header/index.php');?>
<? require_once('system/classes/autoload.php');?> 

<?

$id = $_GET['id'];

include_once('components/dbconnect/index.php');

//делаем запрос к БД (прокидываем запрос) и сохраняем в переменной
$result = mysqli_query($link,"SELECT * FROM core_goods WHERE id=$id ");  


while($item = mysqli_fetch_assoc($result)){?>  
    <? $good = new \Nordic\Good($item['id']) ?>
    <div class="flex-box flex-horizontal-center flex-vertical-center">
        <div class="item-card">
            <div>
                <img src="<?=$good->getField('foto'); ?>" />
            </div>
            <div class="name-item-card flex-box flex-horizontal-center"> 
                <?=$good->getField('title'); ?>
            </div>
            <div class="articul-item-card flex-box flex-horizontal-center">
                Артикул: <?=$good->getField('articul'); ?>
            </div>
            <div class="price-item-card flex-box flex-horizontal-center">
                <?=$good->getField('price'); ?> руб.
            </div>
            <div class="description-item-card flex-box flex-horizontal-center">
                <?=$good->getField('description'); ?>
            </div> 
            <div class="flex-box flex-horizontal-center">
                <a href="<?=PROJECT_URL?>system/controllers/basket/to_basket.php?id=<?=$item['id']?>" class="button flex-box flex-vertical-center flex-horizontal-center ">
                    ДОБАВИТЬ В КОРЗИНУ
                </a>
            </div>
        </div>
    </div>
<? } ?>


<? require_once('components/footer/index.php');?>

