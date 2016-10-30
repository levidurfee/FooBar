<?php

use levidurfee\FooBar\FooBar;

class FooBarTest extends PHPUnit_Framework_TestCase {

    public function testNachHasCheese()
    {
        $fb = new FooBar;
        $this->assertEquals($fb->getVar(), null);
    }

}
