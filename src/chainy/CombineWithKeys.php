<?php

namespace chainy;

class CombineWithKeys
{
    /**
     * @var array
     */
    private $keys;

    /**
     * Map constructor.
     * @param array $keys
     */
    public function __construct(array $keys)
    {
        $this->keys = $keys;
    }

    public function __invoke(array $values)
    {
        return array_combine($this->keys, $values);
    }
}
