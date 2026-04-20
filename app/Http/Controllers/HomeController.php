<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{

    public function index()
    {
        $cars = Car::get();
        // dd($cars);
        $carPublished = Car::where('published_at', '!=', null)->first();
        dump($carPublished);
        return view('home.index', [
            'name' => 'eshrak',
        ]);
    }
}
