<?php

/**
 * Created by PhpStorm.
 * User: pozdny
 * Date: 25.05.2017
 * Time: 13:54
 */
class ShopProduct
{
    public $title               = "Стандартный товар";
    public $producerMainName    = "Фамилия автора";
    public $producerFirstName   = "Имя автора";
    public $price               = 0;

    function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer(){
        return "{$this->producerFirstName} "."{$this->producerMainName}";
    }
}



$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 5.99);
print "Автор: {$product1->getProducer()}";

var_dump(gethostbyaddr('10.2.5.41'));

