<?php

namespace chainy;

class Uksort
{
    /**
     * @var callable|null
     */
    private $callback;

    /**
     * Filter constructor.
     * @param callable $callback
     */
    public function __construct($callback = null)
    {
        $this->callback = $callback;
    }

    public function __invoke(array $value)
    {
        uksort($value, $this->callback);
        return $value;
    }
}