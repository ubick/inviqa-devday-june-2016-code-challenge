<?php

namespace Inviqa\Challenge;

use Inviqa\Challenge\Product\Book;
use Inviqa\Challenge\Product\Cookie;
use Inviqa\Challenge\Product\Pen;
use Inviqa\Challenge\Product\Product;

class Basket
{
    /** @var Product[] */
    private $products;

    public function addToBasket(Product $product)
    {
        $this->products[] = $product;
    }

    public function totalPrice()
    {
        // TODO Write your solution here!
    }
}
