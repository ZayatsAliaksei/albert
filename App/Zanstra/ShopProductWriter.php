<?php


namespace App;


abstract class ShopProductWriter
{
    private $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }
    public function write()
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= " {$shopProduct->title} :";
            $str .= $shopProduct->getProducer();
            $str .= "({$shopProduct->getPrice()})<br />\n";
        }
        print $str;
    }
}