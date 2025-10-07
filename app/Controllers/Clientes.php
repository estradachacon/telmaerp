<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function index(): string
    {
        return view('clientes/index', [
            'title' => 'Listado de clientes'
        ]);
    }
}
