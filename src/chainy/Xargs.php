<?php

namespace chainy;

class Xargs
{
    /**
     * @var callable
     */
    private $callback;

    /**
     * Xargs constructor.
     * @param callable $callback
     */
    function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    function __invoke($args)
    {
        if (null === $args) {
            $args = [null];
        } else {
            $args = (array) $args;
        }
        return ($this->callback)(...$args);
    }
}
