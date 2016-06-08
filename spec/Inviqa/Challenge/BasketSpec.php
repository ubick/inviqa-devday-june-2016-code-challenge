<?php

namespace spec\Inviqa\Challenge;

use Inviqa\Challenge\Product\Book;
use Inviqa\Challenge\Product\Cookie;
use Inviqa\Challenge\Product\Pen;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasketSpec extends ObjectBehavior
{
    function it_returns_the_price_of_1_cookie_when_the_basket_contains_1_cookie()
    {
        $this->addToBasket(new Cookie);

        $this->totalPrice()->shouldReturn(Cookie::PRICE);
    }

    function it_returns_the_price_of_1_pen_when_the_basket_contains_1_pen()
    {
        $this->addToBasket(new Pen);

        $this->totalPrice()->shouldReturn(Pen::PRICE);
    }

    function it_returns_the_price_of_1_book_when_the_basket_contains_1_book()
    {
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(Book::PRICE);
    }

    function it_returns_the_price_of_2_books_when_the_basket_contains_2_books()
    {
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(2 * Book::PRICE);
    }

    

}
