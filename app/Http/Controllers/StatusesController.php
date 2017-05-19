<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['store', 'destroy']
        ]);
    }

    public function index()
    {
        return view('statuses.index');
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
