<?php

namespace Inviqa\Challenge\Product;

class Pen implements Product
{
    const PRICE = 3;

    public function getPrice()
    {
        return self::PRICE;
    }
}
