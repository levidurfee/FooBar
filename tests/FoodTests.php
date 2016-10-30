<?php

use levidurfee\FooBar\FooBar;
use levidurfee\FooBar\Food;

class FoodTest extends PHPUnit_Framework_TestCase {

    public function testConstruct()
    {
        $fb = new FooBar;
        $f = new Food;
        $f->checkFood($fb);
    }
}