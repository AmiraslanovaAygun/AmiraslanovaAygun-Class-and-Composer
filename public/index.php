<?php

include __DIR__ . '/../vendor/autoload.php';

use App\Counter\Count;

for ($i = 0; $i < 10; $i++) {
    Count::increment();
    print_r(Count::$count);
    echo "<br>";
}

// -------------------------------------------------

use App\Controllers\UserController;

$user = new UserController();
echo $user->getUserNameSurname();
