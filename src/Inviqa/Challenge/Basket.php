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

    /*
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Inviqa June 2016 Coding Challenge                                                 *
     *                                                                                   *
     * Calculate the total price of the basket                                           *
     *                                                                                   *
     * 2 for 1 discount: 2 products of the same kind only cost the price of 1            *
     *                                                                                   *
     * A product can only be one of:                                                     *
     *  - Inviqa\Challenge\Product\Book                                                  *
     *  - Inviqa\Challenge\Product\Cookie                                                *
     *  - Inviqa\Challenge\Product\Pen                                                   *
     *                                                                                   *
     * Individual prices are also exposed as constants:                                  *
     *  - Cookie::PRICE                                                                  *
     *  - Book::PRICE                                                                    *
     *  - Pen::PRICE                                                                     *
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     */
    public function totalPrice()
    {
        // TODO Write your solution here!
    }
}
