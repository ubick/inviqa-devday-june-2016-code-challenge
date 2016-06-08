<?php

namespace Inviqa\Challenge;

use Inviqa\Challenge\Product\Product;

class Basket
{
    /** @var Product[] */
    private $products = [];

    public function addToBasket(Product $product)
    {
        $this->products[] = $product;
    }

    public function totalPrice()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
