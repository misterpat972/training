<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// ma classe hérite de la classe Controller de Laravel qui permet d'accéder à des méthodes et propriétés de Laravel
class PremierController extends Controller
{
    public function home($name)
    {   
        $transformedName = strtoupper($name);
        return view('home', [
            'name' => $transformedName
        ]);
    }


    public function second()
    {   
        $age = 25;
        return view('second',[
            'age' => $age
        ]);
    }
}