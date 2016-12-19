<?php

namespace chainy;

class BaseTrim
{
    const DEFAULT_CHARLIST = "\t\n\r \v";
    protected $chars;

    public function __construct($chars = null)
    {
        $this->chars = $chars ?? self::DEFAULT_CHARLIST;
    }
}