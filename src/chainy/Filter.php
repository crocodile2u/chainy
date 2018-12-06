<?php

namespace chainy;

class Filter
{
    /**
     * @var callable|null
     */
    private $callback;
    /**
     * @var int|null
     */
    private $flag;

    /**
     * Filter constructor.
     * @param callable $callback
     * @param int $flag
     */
    public function __construct($callback = null, $flag = 0)
    {
        $this->callback = $callback;
        $this->flag = $flag;
    }

    public function __invoke(array $value)
    {
        return array_filter($value, $this->callback, $this->flag);
    }
}
