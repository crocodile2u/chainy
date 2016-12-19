<?php

namespace chainy;

class Merge
{
    /**
     * @var array[]
     */
    private $args;

    /**
     * Map constructor.
     * @param array[] $args
     */
    public function __construct(array ...$args)
    {
        $this->args = $args;
    }

    public function __invoke(array $value)
    {
        $callArgs = $this->args;
        array_unshift($callArgs, $value);
        return call_user_func_array("array_merge", $callArgs);
    }
}