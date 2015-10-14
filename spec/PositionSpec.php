<?php

namespace spec\gries\Minecraft\Builder;

use gries\Minecraft\Builder\Position;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PositionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->shouldHaveType('gries\Minecraft\Builder\Position');
    }

    function it_should_render_as_formatted_string()
    {
        $this->beConstructedWith(2, 3, 2);

        $this->format()->shouldBe('2 3 2');
    }

    function it_stores_coordinations_correctly()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->x()->shouldBe(2);
        $this->y()->shouldBe(3);
        $this->z()->shouldBe(2);
    }

    function adding_another_position_creates_a_new_position()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->add(new Position(1, -2, 0));

        $this->shouldMatchPosition(new Position(3, 1, 2));
    }

    function it_lets_us_modify_x()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->modifyX(-1)->shouldMatchPosition(new Position(1, 3, 2));
    }

    function it_lets_us_modify_y()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->modifyY(-1)->shouldMatchPosition(new Position(2, 2, 2));
    }

    function it_lets_us_modify_z()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->modifyZ(-1)->shouldMatchPosition(new Position(2, 3, 1));
    }

    function it_can_be_converted_to_an_array()
    {
        $this->beConstructedWith(2, 3, 2);
        $this->toArray()->shouldBeLike(['x' => 2, 'y' => 3, 'z' => 2]);
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
