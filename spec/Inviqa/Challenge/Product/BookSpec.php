<?php

namespace spec\Inviqa\Challenge\Product;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Inviqa\Challenge\Product\Book');
    }
}