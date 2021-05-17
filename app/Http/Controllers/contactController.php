<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function contact() {
        return view('contact');
    }
}