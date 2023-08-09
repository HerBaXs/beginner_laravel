<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
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
