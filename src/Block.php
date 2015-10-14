<?php

namespace gries\Minecraft\Builder;

/**
 * Class Block
 *
 * @package gries\Minecraft\Builder
 */
class Block
{
    /**
     * @var mixed
     */
    protected $type;

    /**
     * @var Position
     */
    protected $position;

    /**
     * @var string
     */
    protected $meta;

    /**
     * @param          $type
     * @param Position $position
     * @param string   $meta
     */
    public function __construct($type, Position $position, $meta = '')
    {
        $this->type     = $type;
        $this->position = $position;
        $this->meta     = $meta;
    }

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function meta()
    {
        return $this->meta;
    }

    /**
     * @return Position
     */
    public function position()
    {
        return $this->position;
    }
}
