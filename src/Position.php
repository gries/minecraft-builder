<?php

namespace gries\Minecraft\Builder;


/**
 * Class Position
 *
 * @package gries\Minecraft\Builder
 */
class Position
{
    /**
     * @var mixed
     */
    protected $x;

    /**
     * @var mixed
     */
    protected $y;

    /**
     * @var mixed
     */
    protected $z;

    /**
     * @param $x
     * @param $y
     * @param $z
     */
    public function __construct($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }


    /**
     * Get the mincraft-command Formatted representation of this position.
     */
    public function format()
    {
        return sprintf('%s %s %s', $this->x(), $this->y(), $this->z());
    }

    /**
     * Get a new Position with a modified X-Coordinate.
     *
     * @param $xModifier
     *
     * @return Position
     */
    public function modifyX($xModifier)
    {
        $newX = $this->x() + $xModifier;

        return new Position($newX, $this->y(), $this->z());
    }

    /**
     * Get a new Position with a modified Y-Coordinate.
     *
     * @param $yModifier
     *
     * @return Position
     */
    public function modifyY($yModifier)
    {
        $newY = $this->y() + $yModifier;

        return new Position($this->x(), $newY, $this->z());
    }

    /**
     * Get a new Position with a modified Z-Coordinate.
     *
     * @param $zModifier
     *
     * @return Position
     */
    public function modifyZ($zModifier)
    {
        $newZ = $this->z() + $zModifier;

        return new Position($this->x(), $this->y(), $newZ);
    }

    /**
     * Get the X-CoordinateValue.
     *
     * @return mixed
     */
    public function x()
    {
        return $this->x;
    }

    /**
     * Get the Y-CoordinateValue.
     *
     * @return mixed
     */
    public function y()
    {
        return $this->y;
    }

    /**
     * Get the Z-CoordinateValue.
     *
     * @return mixed
     */
    public function z()
    {
        return $this->z;
    }
}
