<?php

namespace spec\gries\Minecraft\Builder;

use gries\Minecraft\Builder\Position;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BlockSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('minecraft:air', new Position(1, 2, 3), 'my-meta');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Builder\Block');
    }

    function it_lets_us_get_its_type()
    {
        $this->type()->shouldBe('minecraft:air');
    }

    function it_lets_us_get_its_meta_data()
    {
        $this->meta()->shouldBe('my-meta');
    }

    function it_lets_us_get_its_position()
    {
        $this->position()->shouldMatchPosition(new Position(1, 2, 3));
    }

    public function getMatchers()
    {
        return [
            'matchPosition' => function(Position $position1, Position $position2) {

                return
                    $position1->x() === $position2->x() &&
                    $position1->y() === $position2->y() &&
                    $position1->z() === $position2->z();
            }
        ];
    }
}
