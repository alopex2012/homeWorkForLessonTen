<?php

namespace StringHelper;

class StringHelper
{
    public $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function toUpper()
    {
        return strtoupper($this->string);
    }

    public function toLower()
    {
        return strtolower($this->string);
    }

    public function startsWith($string)
    {
        return str_starts_with($this->string, $string);
    }

    public function endWith($string)
    {
        return str_ends_with($this->string, $string);
    }
}
