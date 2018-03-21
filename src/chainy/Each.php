<?php

namespace chainy;

class Each
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
        foreach ($value as $key => $item) {
            call_user_func_array($this->callback, [$item, $key]);
        }
        return $value;
    }
}
