<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118118,
            "name" => "Sabrina Nur A Z",
            "gender" => "Perempuan",
            "phone" => 6282323884972,
            "class" => "XII RPL 4"
        ];
    }
}
