<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        dd($request->all());
    }

    public function updateAll(Request $request)
    {
        dd($request->all());
    }

    public function users(Request $request)
    {
        echo "Hello World";
    }

    public function show(Request $request, $id)
    {
        dd($id);
    }

    public function showName(Request $request, $name)
    {
        dd($name);
    }

    public function roleCheck(Request $request, $role)
    {
        dd($role);
    }
}
