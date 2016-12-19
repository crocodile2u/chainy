<?php

namespace chainy;

class Map
{
    /**
     * @var callable
     */
    private $callback;

    /**
     * Map constructor.
     * @param callable $callback
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function __invoke(array $value)
    {
        return array_map($this->callback, $value);
    }
}