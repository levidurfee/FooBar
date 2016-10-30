<?php

use levidurfee\FooBar\Food;
use levidurfee\FooBar\bar\Door;

class DoorTest extends PHPUnit_Framework_TestCase {

    public function testDoor()
    {
        $f = new Food;
        $d = new Door;
        $this->assertEquals($d->eatFood($f), 0);
    }
}
