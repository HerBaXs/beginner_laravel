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
//        return redirect()->route("contact");
    }

    public function contact()
    {
//        dd($request->$id());
//        dd($request->all());
        return view("front.contact");
    }

    public function user(Request $request, int $id, string $name = null)
    {
        dd($request->name);
        dd($request->all());
    }


}
