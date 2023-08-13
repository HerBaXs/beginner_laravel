<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $age = 10;

        $person = new \stdClass();
        $person->age = $age;
//        return view("index", ['age' => $age]);
//        return view('index', compact('age'));
//        return view('index', compact('age'))->with('age', $age);
//        return view('index')->with('age', $age)->with('sercan', 'Recep');
//        return view('index')->with(['age' => $age, 'sercan' => 'Recep']);
        return view('index', compact("person"));
    }

    public function about()
    {
        return view("front.about");
    }

    public function contact()
    {
        return view("front.contact");
    }

    public function user(Request $request, int $id, string $name = null)
    {
        dd($request->name);
        dd($request->all());
    }


}
