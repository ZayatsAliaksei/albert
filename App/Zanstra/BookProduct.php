<?php


namespace App;


class BookProduct extends ShopProduct
{

    private $numPages;

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