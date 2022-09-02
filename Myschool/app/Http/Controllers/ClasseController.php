<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes=Classe::get();
        return view('scolarite',compact('classes'));
    }
    public function getByClass(){
        $classes=Classe::get();
        return view('listeParClasse',compact('classes'));
    }
}


