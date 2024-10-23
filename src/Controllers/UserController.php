<?php

namespace App\Controllers;

use App\Models\User;

class UserController {

    public static function getUserNameSurname(){

        $newUser = new User("Aygun", "Amiraslanova");

        return $newUser->name . ' ' . $newUser->surname ;
    }

}

?>