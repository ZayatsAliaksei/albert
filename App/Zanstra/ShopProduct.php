<?php


namespace App;


 class ShopProduct
{

    private $id = 0;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price = 0;
    private $discount = 0;

    public function __construct(string $title, float $price, string $producerFirstName, string $producerMainName)
    {
        $this->title = $title;
        $this->price = $price;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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

    public function getDiscount(int $num)
    {
        return $this->discount;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    public static function getInstance(int $id, \PDO $PDO): ShopProduct
    {
        $stmt = $PDO->prepare("select*from products where id = {$id}");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();

        if (empty($row)) {
            return null;
        }

        if ($row['type'] == 'book') {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['numpages']
            );
        } elseif ($row['type' == 'cd']) {
            $product = new CdProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['playlenght']
            );
        } else {
            $firstname = (is_null($row['firstname'])) ? "": $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstname,
                $row['mainname'],
                $row['price']
            );
        }
        $product->setId($row['id']);
        $product->setDiscount($row['discount']);
        return $product;

    }

}
