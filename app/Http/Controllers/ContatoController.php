<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContatoController extends Controller
{
    public function show(){


        return Inertia::render('Contato');
    }
}
