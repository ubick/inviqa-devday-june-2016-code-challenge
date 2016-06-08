<?php

namespace Inviqa\Challenge\Product;

class Book implements Product
{
    const PRICE = 9;

    public function getPrice()
    {
        return self::PRICE;
    }
}
