<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class PageController extends Controller
{
    public Function index(){
        return view('home');
    }
}