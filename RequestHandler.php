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

    /**
     * Валидация значений GET-параметров
     * @return $this
     */
    public function validate(){
        foreach ($this->arGet as $key => &$param){
            $param = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $this;
    }

}