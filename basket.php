<? require_once('conf_global.php');?>
<? include_once('components/dbconnect/index.php');?>
<? require_once('components/header/index.php');?>
<? require_once('system/classes/autoload.php');?> 


 <div class="border">
        <div class="name name-2 flex-box flex-horizontal-center">
            ВАША КОРЗИНА 
        </div>
        <div class="text text-2 flex-box flex-horizontal-center">
            Товары резервируются на ограниченное время
        </div>
        <div class="flex-box">
            <div class="flex-box basket-categories-l">
                <div class="basket-name">
                    ФОТО
                </div>
                <div class="basket-name">
                    НАИМЕНОВАНИЕ
                </div>
            </div>
            <div class="flex-box flex-box basket-categories-r">
                <div class="basket-name">
                    РАЗМЕР
                </div>
                <div class="basket-name">
                    КОЛИЧЕСТВО
                </div>
                <div class="basket-name">
                    СТОИМОСТЬ
                </div>
                <div class="basket-name">
                    УДАЛИТЬ
                </div>
            </div>
        </div>
        <div class="gray-line"></div>

        <?
        include_once('components/dbconnect/index.php');
        session_start();
        $items = $_SESSION['basket'];

        $str = implode(',',$items);

        $result = mysqli_query($link,"SELECT * FROM core_goods WHERE id IN($str)");

        $sum = 0;

        while($item = mysqli_fetch_assoc($result)){?> 

            <div class="flex-box">
                    <div class="flex-box basket-categories-l">  
                        <div class="photo-basket">
                            <img src="<?=$item['foto']?>" />
                        </div>
                        <div>
                            <div class="flex-box flex-horizontal-center name-item-cotalog">
                                <?= $item['title'] ?> 
                            </div>
                            <div class="flex-box price-item-cotalog">
                                <?= $item['articul'] ?> 
                            </div>
                        </div>
                    </div>
                    <div class="flex-box basket-categories-r">  
                        <div class="flex-box flex-horizontal-center price-item-cotalog basket-position-text-item ">
                            1
                        </div>
                        <div class="flex-box flex-horizontal-center price-item-cotalog basket-position-text-item ">
                            <?= $item['price'] ?> руб.
                        </div>
                        <div class="flex-box flex-horizontal-center basket-position-text-item  ">
                            <a href="<?=PROJECT_URL?>system/controllers/basket/from_basket.php?id=<?=$item['id']?>" class="no-decoration price-item-cotalog">
                                X
                            </a>
                        </div>
                    </div>
            </div>
            <div class="gray-line"></div>
            <?$sum += $item['price']?>
        <? } ?>
        <div class="sum ">
            <div class="sum-end flex-box">
                <div class="price-item-cotalog">
                    Итого : 
                </div>
                <div class="price-basket pbp">
                    <?echo $sum ?> руб.
                </div>
            </div>
        </div>
        <div class="flex-box flex-horizontal-center shape">
            <img src="img/shape.png">
        </div>
        <div class="delivery">
            <div class="name name-2 flex-box flex-horizontal-center">
                АДРЕС ДОСТАВКИ
            </div>
            <div class="text text-2 flex-box flex-horizontal-center">
                Все поля обязательны для заполнения
            </div>
            <form>
                <div class="flex-box flex-horizontal-center">
                    <div class="color">
                        ВЫБЕРИТЕ ВАРИАНТ ДОСТАВКИ<br><br>
                        <select name='deli' class="delivery-form">
                            <option value="500">Курьерская служба - 500 руб.</option>
                            <option value="200">Пункт выдачи - 200 руб.</option>
                            <option value="1000">Срочная доставка - 1000 руб.</option>
                            <option value="0">Самовывоз - бесплатно.</option>
                        </select>
                    </div>
                </div>
                <div class="flex-box flex-horizontal-center">
                    <div class="lef color">
                        ИМЯ<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                    <div class="rig color">
                        ФАМИЛИЯ<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                </div>
                <div class="flex-box flex-horizontal-center">
                    <div class="color">
                        АДРЕС<br><br>
                        <input type="text" class="delivery-form" />
                    </div>
                </div>
                <div class="flex-box flex-horizontal-center">
                    <div class="lef color">
                        ГОРОД<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                    <div class="rig color">
                        ИНДЕКС<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                </div>
                <div class="flex-box flex-horizontal-center">
                    <div class="lef color">
                        ТЕЛЕФОН<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                    <div class="rig color">
                        E-MAIL<br><br>
                        <input type="text" class="delivery-form-min" />
                    </div>
                </div>
            </form>
        </div>
        <div class="flex-box flex-horizontal-center shape">
            <img src="img/shape.png">
        </div>
        <div class="delivery">
            <div class="name name-2 flex-box flex-horizontal-center">
                ВАРИАНТЫ ОПЛАТЫ
            </div>
            <div class="text text-2 flex-box flex-horizontal-center">
                Все поля обязательны для заполнения
            </div>
            <form>
                <div class="flex-box flex-horizontal-center">
                    <div class="color">
                        ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ<br><br>
                        <select class="delivery-form">
                            <option>Банковская карты</option>
                            <option>Электронный кошелек</option>
                            <option>Наличный расчет</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="price-basket-gray flex-box flex-horizontal-center">
                        Cтоимость: <?echo $sum ?> руб.
                    </div>
                    <div class="price-basket-gray flex-box flex-horizontal-center">
                        <?
                            $deli = $_GET['deli']
                        ?>
                        Доставка: <?echo $deli?>

                    </div>
                    <div class="price-basket flex-box flex-horizontal-center ">
                        Итого:  руб.
                    </div>
                </div>
                <div class="flex-box flex-horizontal-center">
                    <button class="button">ЗАКАЗАТЬ</button>
                </div>
            </form>
        </div>
    </div>

<? require_once('components/footer/index.php');?>