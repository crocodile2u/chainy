<?php

namespace chainy;

class CombineWithValues
{
    /**
     * @var array
     */
    private $values;

    /**
     * Map constructor.
     * @param array $keys
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function __invoke(array $keys)
    {
        return array_combine($keys, $this->values);
    }
}
