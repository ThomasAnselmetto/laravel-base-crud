<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

// creato un controller per il controllo delle pagine senza logica
// diciamo che si occupa di tutte le pagine che non sono una risorsa
class PageController extends Controller
{
    public Function index(){
        return view('home');
    }
}