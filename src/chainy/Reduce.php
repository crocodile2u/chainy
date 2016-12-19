<?php

namespace chainy;

class Reduce
{
    /**
     * @var callable
     */
    private $callback;
    /**
     * @var mixed
     */
    private $initial;

    /**
     * Map constructor.
     * @param callable $callback
     * @param mixed $initial
     */
    public function __construct(callable $callback, $initial = null)
    {
        $this->callback = $callback;
        $this->initial = $initial;
    }

    public function __invoke(array $value)
    {
        return array_reduce($value, $this->callback, $this->initial);
    }
}