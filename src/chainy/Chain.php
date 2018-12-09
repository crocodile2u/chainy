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
     * @return self
     */
    function add(callable $link)
    {
        $retval = clone $this;
        $retval->links[] = $link;
        return $retval;
    }

    /**
     * @param callable $callback
     * @param bool $keys whether to pass the input array keys to the callback
     * @return self
     */
    function map(callable $callback, bool $keys = false)
    {
        $link = $keys ? new MapKeyValue($callback) : new Map($callback);
        return $this->add($link);
    }

    /**
     * @param callable $callback
     * @param mixed $initial
     * @param bool $keys whether to pass the input array keys to the callback
     * @return mixed
     */
    function reduce(callable $callback, $initial = null, bool $keys = false)
    {
        $link = $keys ? new ReduceKeyValue($callback, $initial) : new Map($callback, $initial);
        return $this->add($link);
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
     * @return self
     */
    function slice($offset, $length = null, $preserveKeys = null)
    {
        return $this->add(new Slice($offset, $length, $preserveKeys));
    }

    /**
     * @param int $offset
     * @param int $length
     * @param array $replacement
     * @return self
     */
    function splice($offset, $length = null, $replacement = null)
    {
        return $this->add(new Splice($offset, $length, $replacement));
    }

    /**
     * @param callable $callback
     * @return self
     */
    function each(callable $callback)
    {
        return $this->add(new Each($callback));
    }

    /**
     * @param \array[] ...$args
     * @return self
     */
    function merge(array ...$args)
    {
        return $this->add(new Merge(...$args));
    }

    /**
     * @param array $keys
     * @return self
     */
    function combineWithKeys(array $keys)
    {
        return $this->add(new CombineWithKeys($keys));
    }

    /**
     * @param array $values
     * @return self
     */
    function combineWithValues(array $values)
    {
        return $this->add(new CombineWithValues($values));
    }

    /**
     * @param string $delimiter
     * @return self
     */
    function split(string $delimiter)
    {
        return $this->add(new Split($delimiter));
    }

    /**
     * @param string $glue
     * @return self
     */
    function join(string $glue = "")
    {
        return $this->add(new Join($glue));
    }

    /**
     * @param string $chars
     * @return self
     */
    function trim($chars = null)
    {
        return $this->add(new Trim($chars));
    }

    /**
     * @param string $chars
     * @return self
     */
    function ltrim($chars = null)
    {
        return $this->add(new Ltrim($chars));
    }

    /**
     * @param string $chars
     * @return self
     */
    function rtrim($chars = null)
    {
        return $this->add(new Rtrim($chars));
    }

    /**
     * @param string $allowed
     * @return self
     */
    function stripTags($allowed = null)
    {
        return $this->add(new StripTags($allowed));
    }

    /**
     * @return self
     */
    function stripLow()
    {
        return $this->add(new StripLow());
    }

    /**
     * @return self
     */
    function stripHigh()
    {
        return $this->add(new StripHigh());
    }

    /**
     * @param $search
     * @param $replacement
     * @return self
     */
    function strReplace($search, $replacement)
    {
        return $this->add(new StrReplace($search, $replacement));
    }

    /**
     * @return self
     */
    function toLowerCase()
    {
        return $this->add(new LowerCase());
    }

    /**
     * @return self
     */
    function toUpperCase()
    {
        return $this->add(new UpperCase());
    }

    /**
     * @return self
     */
    function capitalize()
    {
        return $this->add(new Capitalize());
    }

    /**
     * @return self
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
