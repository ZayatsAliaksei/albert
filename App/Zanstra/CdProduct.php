<?php


namespace App;


class CdProduct extends ShopProduct
{
    private $playLenght;

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