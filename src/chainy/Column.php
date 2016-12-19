<?php

namespace chainy;

class Column
{
    /**
     * @var mixed
     */
    private $column;

    /**
     * Column constructor.
     * @param mixed $column
     */
    public function __construct($column)
    {
        $this->column = $column;
    }

    public function __invoke(array $value)
    {
        return array_column($value, $this->column);
    }
}