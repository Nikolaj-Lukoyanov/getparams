<?

/**
 * Class RequestHandler - Обрабатывает GET запросы веб-страницы
 */
class RequestHandler
{

    /**
     * @var - Свойство экземпляра класса, которое хранит в себе массив GET параметров
     */
    private $arGet;

    /**
     * RequestHandler constructor.
     */
    public function __construct()
    {
        $this->arGet = $_GET;
    }

    /**
     * Возвращает JSON представление GET параметров
     * @return false|string
     */
    public function showJSONParams(){
        return json_encode($this->arGet);
    }

}