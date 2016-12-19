<?php

namespace chainy;

class StrReplace
{
    /**
     * @var string|array
     */
    private $search, $replacement;

    /**
     * Replace constructor.
     * @param string|array $search
     * @param string|array $replacement
     */
    public function __construct($search, $replacement)
    {
        $this->search = $search;
        $this->replacement = $replacement;
    }

    public function __invoke($target)
    {
        return str_replace($this->search, $this->replacement, $target);
    }
}