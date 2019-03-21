<?

// Подключаем файл с классом для работы с GET параметрами
require_once "RequestHandler.php";

// Создаем экземпляр класса
$obRequestHandler = new RequestHandler();

// Выводим JSON представление на экран
echo $obRequestHandler->showJSONParams();