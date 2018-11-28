<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo
 * Date: 27/11/2018
 * Time: 14:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    // tramite la il metodo input della class request, prendo parametri GET (Query String)
    public function index(Request $request){
        return 'Hello World! ' .$request->input('name');
    }
}