<?php

namespace chainy;

class Chain
{
    /**
     * @var callable[]
     */
    private $links = [];
    /**
     * @param callable $link
     * @return $this
     */
    function add(callable $link)
    {
        $this->links[] = $link;
        return $this;
    }
    /**
     * @param callable $callback
     * @return $this
     */
    function map(callable $callback)
    {
        return $this->add(new Map($callback));
    }

    /**
     * @param callable $callback
     * @param mixed $initial
     * @return mixed
     */
    function reduce(callable $callback, $initial = null)
    {
        return $this->add(new Reduce($callback, $initial));
    }

    /**
     * @param callable $callback
     * @param integer $flag
     * @return mixed
     */
    function filter(callable $callback = null, $flag = Filter::FLAG_DEFAULT)
    {
        return $this->add(new Filter($callback, $flag));
    }

    /**
     * @param int $offset
     * @param int $length
     * @param bool $preserveKeys
     * @return $this
     */
    function slice($offset, $length = null, $preserveKeys = null)
    {
        return $this->add(new Slice($offset, $length, $preserveKeys));
    }

    /**
     * @param int $offset
     * @param int $length
     * @param array $replacement
     * @return $this
     */
    function splice($offset, $length = null, $replacement = null)
    {
        return $this->add(new Splice($offset, $length, $replacement));
    }

    /**
     * @param callable $callback
     * @return $this
     */
    function each(callable $callback)
    {
        return $this->add(new Each($callback));
    }

    /**
     * @param \array[] ...$args
     * @return $this
     */
    function merge(array ...$args)
    {
        return $this->add(new Merge(...$args));
    }

    /**
     * @param array $keys
     * @return $this
     */
    function combineWithKeys(array $keys)
    {
        return $this->add(new CombineWithKeys($keys));
    }

    /**
     * @param array $values
     * @return $this
     */
    function combineWithValues(array $values)
    {
        return $this->add(new CombineWithValues($values));
    }

    /**
     * @param string $delimiter
     * @return $this
     */
    function split(string $delimiter)
    {
        return $this->add(new Split($delimiter));
    }

    /**
     * @param string $glue
     * @return $this
     */
    function join(string $glue = "")
    {
        return $this->add(new Join($glue));
    }

    /**
     * @param string $chars
     * @return $this
     */
    function trim($chars = null)
    {
        return $this->add(new Trim($chars));
    }

    /**
     * @param string $chars
     * @return $this
     */
    function ltrim($chars = null)
    {
        return $this->add(new Ltrim($chars));
    }

    /**
     * @param string $chars
     * @return $this
     */
    function rtrim($chars = null)
    {
        return $this->add(new Rtrim($chars));
    }

    /**
     * @param string $allowed
     * @return $this
     */
    function stripTags($allowed = null)
    {
        return $this->add(new StripTags($allowed));
    }

    /**
     * @return $this
     */
    function stripLow()
    {
        return $this->add(new StripLow());
    }

    /**
     * @return $this
     */
    function stripHigh()
    {
        return $this->add(new StripHigh());
    }

    /**
     * @param $search
     * @param $replacement
     * @return $this
     */
    function strReplace($search, $replacement)
    {
        return $this->add(new StrReplace($search, $replacement));
    }

    /**
     * @return $this
     */
    function toLowerCase()
    {
        return $this->add(new LowerCase());
    }

    /**
     * @return $this
     */
    function toUpperCase()
    {
        return $this->add(new UpperCase());
    }

    /**
     * @return $this
     */
    function capitalize()
    {
        return $this->add(new Capitalize());
    }

    /**
     * @return $this
     */
    function ucfirst()
    {
        return $this->add(new Ucfirst());
    }

    /**
     * @param $value
     * @return mixed
     */
    function apply($value)
    {
        foreach ($this->links as $link) {
            $value = $link($value);
        }
        return $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    function __invoke($value)
    {
        return $this->apply($value);
    }
}
