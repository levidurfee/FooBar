<?php

namespace levidurfee\FooBar;

class FooBar implements FooBarInterface {
    use FooBarTrait;

    private $var;

    public function __construct($arg = null)
    {
        $this->var = $arg;
    }

    /**
     * @return null
     */
    public function getVar()
    {
        return $this->var;
    }

    public function helloWorld()
    {
        return 0;
    }
}
