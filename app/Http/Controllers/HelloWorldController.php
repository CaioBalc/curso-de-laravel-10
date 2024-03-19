<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld(){
        return 'hello-world';
    }

    public function hello($name = 'Fulano'){
        if ($name == 'Abacate'){
            return 'Ótima fruta!';
        }
        return 'Hello, ' . $name;
    }
}
