<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportFormController extends Controller
{
    public function support_form(Request $request)
    {
        dd($request->all());
    }
}
