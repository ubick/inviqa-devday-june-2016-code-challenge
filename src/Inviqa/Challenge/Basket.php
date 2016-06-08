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
        $total = 0;
        $books = 0;
        $pens = 0;
        $cookies = 0;

        foreach ($this->products as $product) {
            if ($product instanceof Book) $books++;
            if ($product instanceof Pen) $pens++;
            if ($product instanceof Cookie) $cookies++;

            $total += $product->getPrice();
        }

        $booksDiscount = (int)($books / 2) * Book::PRICE;
        $pensDiscount = (int)($pens / 2) * Pen::PRICE;
        $cookiesDiscount = (int)($cookies / 2) * Cookie::PRICE;

        $discount = $booksDiscount + $pensDiscount + $cookiesDiscount;

        return $total - $discount;
    }
}
