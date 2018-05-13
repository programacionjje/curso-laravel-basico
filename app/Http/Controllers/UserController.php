<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      return 'Soy un ruta';
    }

    public function show($id)
    {
      return 'usuario: '. $id;
    }

    public function create()
    {
      return 'formulario de crear un nuevo usuario';
    }
}
