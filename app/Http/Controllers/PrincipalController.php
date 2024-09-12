<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function teste()
    {
        return view('site/principal');
    }
    public function contato()
    {
        return view('site/contato');
    }
    public function bemvindo(){
        return view('welcome');
    }
}