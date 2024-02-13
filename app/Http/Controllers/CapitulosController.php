<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session; // Importa la clase Session desde el namespace Illuminate\Support\Facades

class CapitulosController extends Controller // Define la clase CapitulosController que extiende de Controller
{
    public function mostrarTituloAutor() // Método para mostrar el título y el autor
    {
        Session::flush(); // Limpia todos los datos de la sesión actual
        // Devuelve la vista del encabezado, la portada con el título y el autor, y la vista del pie de página
        return view('header').view('portada', [
            'title' => 'The choices of three servants',
            'author' => 'The Nazarene'
        ]).view('footer');
    }

    public function capitulo1() // Método para mostrar el capítulo 1
    {
        // Devuelve la vista del encabezado, la vista del capítulo 1 y la vista del pie de página
        return view('header').view('capitulo1').view('footer');
    }

    public function capitulo2() // Método para mostrar el capítulo 2
    {
        Session::put('talent', 1); // Establece un valor en la sesión con la clave 'talent'
        // Devuelve la vista del encabezado, la vista del capítulo 2 y la vista del pie de página
        return view('header').view('capitulo2').view('footer');
    }

    public function choice1() // Método para mostrar choice1
    {
        Session::forget('talent'); // Elimina el valor 'talent' específico de la sesión
        Session::put('talent', 0); // Establece un nuevo valor en la sesión con la clave 'talent'
        // Devuelve la vista del encabezado, la vista de la elección 1 y la vista del pie de página
        return view('header').view('choice1').view('footer');
    }

    public function TheEnd_goodChoice() // Método para mostrar el final bueno
    {
        Session::put('talent', 1); // Establece un valor en la sesión con la clave 'talent'
        // Devuelve la vista del encabezado, la vista del final bueno y la vista del pie de página
        return view('header').view('TheEnd_goodChoice').view('footer');
    }

    public function TheEnd_badChoice() // Método para mostrar el final malo
    {
        Session::put('talent', 0); // Establece un valor en la sesión con la clave 'talent'
        // Devuelve la vista del encabezado, la vista del final malo y la vista del pie de página
        return view('header').view('TheEnd_badChoice').view('footer');
    }
}
