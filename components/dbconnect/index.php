<?

//создаем ключ для подключения к БД
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//задаем кодировку обмена данными
mysqli_set_charset($link , "utf8");