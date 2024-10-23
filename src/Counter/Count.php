<?php

namespace App\Counter;

class Count {

    public static $count = 0;

    public static function increment() {
        self::$count++;
    }

}