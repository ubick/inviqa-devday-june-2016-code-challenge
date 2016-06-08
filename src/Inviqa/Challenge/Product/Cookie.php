<?php

namespace Inviqa\Challenge\Product;

class Cookie implements Product
{
    const PRICE = 1;

    public function getPrice()
    {
        return self::PRICE;
    }
}
