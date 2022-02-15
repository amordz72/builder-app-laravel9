<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {

        return view('layouts.dashboard')->with('page_title', 'Dashboard');
    }
}
