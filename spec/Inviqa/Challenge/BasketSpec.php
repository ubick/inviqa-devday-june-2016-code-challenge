<?php

namespace spec\Inviqa\Challenge;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BasketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Inviqa\Challenge\Basket');
    }
}
