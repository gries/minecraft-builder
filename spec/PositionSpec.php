<?php

namespace spec\gries\Minecraft\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PositionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Builder\Position');
    }


}
