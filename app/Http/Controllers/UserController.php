<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return "hola soy index";
    }

    public function store(Request $request)
    {
        return "hola soy store";
    }

    public function show($id)
    {
        return "hola soy show";
    }

    public function update(Request $request, $id)
    {
        return "hola soy update";
    }

    public function destroy($id)
    {
        return "hola soy delete";
    }
}
