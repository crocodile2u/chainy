<?php

namespace chainy;

class MapKeyValue
{
    /**
     * @var callable
     */
    private $callback;

    /**
     * MapKeyValue constructor.
     * @param callable $callback function($value, $key) {...}
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function __invoke(array $input)
    {
        $retval = [];
        foreach ($input as $key => $val) {
            $retval[$key] = call_user_func($this->callback, $val, $key);
        }
        return $retval;
    }
}
