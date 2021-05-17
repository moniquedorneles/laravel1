<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Models\Tarefa;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(){
        
        return view('site.admin');
    }
}
