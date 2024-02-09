<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class CapitulosController extends Controller
{
    public function mostrarTituloAutor()
    {
        Session::flush();
        return view('header').view('portada', [
            'title' => 'The choices of three servants',
            'author' => 'The Nazarene'
        ]).view('footer');
    }

    public function capitulo1()
    {
        return view('header').view('capitulo1').view('footer');
    }

    public function capitulo2()
    {
        Session::put('talent', 1);
        return view('header').view('capitulo2').view('footer');
    }

    public function choice1()
    {
        Session::forget('talent');
        Session::put('talent', 0);
        return view('header').view('choice1').view('footer');
    }

    public function TheEnd_goodChoice()
    {
        Session::put('talent', 1);
        return view('header').view('TheEnd_goodChoice').view('footer');
    }

    public function TheEnd_badChoice()
    {
        Session::put('talent', 0);
        return view('header').view('TheEnd_badChoice').view('footer');
    }
}
