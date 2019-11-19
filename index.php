<?php

require __DIR__ . '/autoload.php';
//include(__DIR__ . '/App/View/News.php');
//include(__DIR__ . '/App/View/Article.php');

$news = \App\Models\News::lastThree();
foreach ($news as $data) {
    echo $data->title . '<br>';
    echo $data->disc . '<br><br>';
    echo "<a href='App/View/Article.php?id={$data->id}'>Подробнее</a><p>";
}

/*$news = new \App\Models\News();
$news->title = 'Важные новости';
$news->disc = 'не важные новости';
$news->create();*/

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    protected $price = 0;

    public $discount = 0;

    public function __construct(string $title, float $price, string $producerFirstName, string $producerMainName)
    {
        $this->title = $title;
        $this->price = $price;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
    }

    protected function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    protected function getSummaryLine()
    {

        $base = "{$this->title} - {$this->producerMainName} ";
        $base .= "{$this->producerFirstName}";
        return $base;
    }

    public function setDiscount(int $num)
    {
        $this->discount = $num;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

}
class BookProduct extends ShopProduct
{

    public $numPages;

    public function __construct(string $title, float $price, string $producerFirstName, string $producerMainName, int $numPages)
    {
    parent::__construct($title, $price, $producerFirstName, $producerMainName);
    $this->numPages = $numPages;
    }

    public function getNumbersOfPages()
    {
         return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base  = parent::getSummaryLine();
        $base .= ":{$this->numPages} стр.";
        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
    class CdProduct extends ShopProduct
{
        public $playLenght;

         public function __construct(string $title, float $price, string $producerFirstName, string $producerMainName,float $playLenght)
        {
        parent::__construct($title, $price, $producerFirstName, $producerMainName);
        $this->playLenght = $playLenght;
        }

        public function getPlayLenght()
        {
            return $this->playLenght;
        }

        public function getSummaryLine()
        {
            $base  = parent::getSummaryLine();
            $base .= ": Время звучания - {$this->playLenght}";
            return $base;
        }

    }




$product1 = new CdProduct('сердце', 9.99, 'Santana', 'Carlos','2.58');
$product2 = new BookProduct('Властелин Колец', 9.99, 'Толкин', 'Джон','1000');
echo $product1->getSummaryLine();
print $product1->discount;

