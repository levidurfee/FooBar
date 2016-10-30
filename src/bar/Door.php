<?php

namespace levidurfee\FooBar\bar;

use levidurfee\FooBar\Food;

class Door implements DoorInterface
{
    public function eatFood(Food $f)
    {
        return 0;
    }
}
