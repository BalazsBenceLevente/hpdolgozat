<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return "characters.index";
    }
    
    public function show()
    {
        return "characters.show";
    }
    
    public function create()
    {
        return "characters.create";
    }

    public function store()
    {
        return "characters.store";
    }

    public function destroy()
    {
        return "characters.destroy";
    }
}
