<?php

namespace chainy;

class Filter
{
    const FLAG_DEFAULT = 0;
    /**
     * @var callable|null
     */
    private $callback;
    /**
     * @var integer|null
     */
    private $flag;

    /**
     * Filter constructor.
     * @param callable $callback
     * @param integer $flag
     */
    public function __construct($callback = null, $flag = self::FLAG_DEFAULT)
    {
        $this->callback = $callback;
        $this->flag = $flag;
    }

    public function __invoke(array $value)
    {
        return $this->callback ? array_filter($value, $this->callback, $this->flag) : array_filter($value);
    }
}
