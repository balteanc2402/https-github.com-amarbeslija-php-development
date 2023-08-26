<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()

{
    return view('index');
}
   
    public function create()
    {
        return view('create');

    }

    
    public function show(string $id)
    {
        return view('show');
    }

    
    public function edit(string $id)
    {
        return view ('edit');

    }

    
}