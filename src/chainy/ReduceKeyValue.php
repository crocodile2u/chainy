<?php

namespace chainy;

class ReduceKeyValue
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

    public function __invoke(array $input)
    {
        $carry = $this->initial;
        foreach ($input as $key => $val) {
            $carry = call_user_func($this->callback, $carry, $val, $key);
        }
        return $carry;
    }
}
