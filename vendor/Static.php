<?php

class Test {
    public static $counter = 0;
    public function __construct()
    {
        seld::$counter++;
    }
}

for ($i=0; i<rand(10,100);$i++){
    new Test();
}

echo Test::$counter;