<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome($name="", $lastname="", $age=""){

        return '<h1>Hello '.$name.' '.$lastname.' you are '.$age.' old!</h1>';
    }
}
