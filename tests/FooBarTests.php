<?php

use levidurfee\FooBar\FooBar;

class FooBarTest extends PHPUnit_Framework_TestCase {

    public function testConstruct()
    {
        $fb = new FooBar;
        $this->assertEquals($fb->getVar(), null);
    }

    public function testWorld()
    {
        $fb = new FooBar;
        $this->assertEquals($fb->helloWorld(), 0);
    }
}
