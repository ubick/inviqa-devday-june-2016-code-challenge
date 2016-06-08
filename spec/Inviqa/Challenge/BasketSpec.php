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

    function it_returns_the_price_of_1_book_when_the_basket_contains_1_book()
    {
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(Book::PRICE);
    }

    function it_returns_the_price_of_1_pen_when_the_basket_contains_1_pen()
    {
        $this->addToBasket(new Pen);

        $this->totalPrice()->shouldReturn(Pen::PRICE);
    }

    function it_returns_the_price_of_1_cookie_when_the_basket_contains_2_cookies()
    {
        $this->addToBasket(new Cookie);
        $this->addToBasket(new Cookie);

        $this->totalPrice()->shouldReturn(Cookie::PRICE);
    }

    function it_returns_the_price_of_1_book_when_the_basket_contains_2_books()
    {
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(Book::PRICE);
    }

    function it_returns_the_price_of_1_pen_when_the_basket_contains_2_pens()
    {
        $this->addToBasket(new Pen);
        $this->addToBasket(new Pen);

        $this->totalPrice()->shouldReturn(Pen::PRICE);
    }

    function it_returns_the_price_of_2_books_when_the_basket_contains_3_books()
    {
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(2 * Book::PRICE);
    }

    function it_returns_the_price_of_2_books_when_the_basket_contains_4_books()
    {
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);

        $this->totalPrice()->shouldReturn(2 * Book::PRICE);
    }

    function it_returns_the_price_of_1_book_and_2_cookies_when_the_basket_contains_2_books_and_3_cookies()
    {
        $this->addToBasket(new Book);
        $this->addToBasket(new Book);
        $this->addToBasket(new Cookie);
        $this->addToBasket(new Cookie);
        $this->addToBasket(new Cookie);

        $this->totalPrice()->shouldReturn(Book::PRICE + 2 * Cookie::PRICE);
    }

    function it_returns_the_price_of_15_books_and_13_cookies_and_7_pens_when_the_basket_contains_29_books_26_cookies_and_13_pens()
    {
        for ($i = 0; $i < 29; $i++) $this->addToBasket(new Book);
        for ($i = 0; $i < 26; $i++) $this->addToBasket(new Cookie);
        for ($i = 0; $i < 13; $i++) $this->addToBasket(new Pen);

        $this->totalPrice()->shouldReturn(15 * Book::PRICE + 13 * Cookie::PRICE + 7 * Pen::PRICE);
    }
}
