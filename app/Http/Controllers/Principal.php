<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    public function principal_vista()
    {
        return view("layouts/todo");
    }
}
