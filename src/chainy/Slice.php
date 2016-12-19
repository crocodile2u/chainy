<?php

namespace chainy;

class Slice
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $length;
    /**
     * @var bool
     */
    private $preserveKeys;

    /**
     * Map constructor.
     * @param int $offset
     */
    public function __construct($offset, $length = null, $preserveKeys = null)
    {
        $this->offset = $offset;
        $this->length = $length;
        $this->preserveKeys = $preserveKeys;
    }

    public function __invoke(array $value)
    {
        return array_slice($value, $this->offset, $this->length, $this->preserveKeys);
    }
}