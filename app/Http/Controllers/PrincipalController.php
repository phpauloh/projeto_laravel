<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        echo "Bem vindo a página Home. Acessado pelo controller!";
    }
}
