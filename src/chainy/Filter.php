<?php

namespace chainy;

class Filter
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
        return $this->callback ? array_filter($value, $this->callback) : array_filter($value);
    }
}
