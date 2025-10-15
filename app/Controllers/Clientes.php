<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ClientesModel;

class clientes extends BaseController
{
    public function index(): string
    {
        $clientesModel = new ClientesModel();
        
        $porPagina = $this->request->getGet('por_pagina') ?? 10;
        $data['clientes'] = $clientesModel->paginate(perPage: $porPagina);
        $data['pager'] = $clientesModel->pager;
        $data['porPagina'] = $porPagina;
        $data['title'] = 'Listado de clientes';
        return view('clientes/index', $data);
    }

    public function create()
    {
        $clientesModel = new ClientesModel();
        $clientesModel->insert([
            'cliente_nombre' => $this->request->getPost('cliente_nombre')
        ]);
        return redirect()->to('/clientes')
                ->with('mensaje', 'Cliente creado con éxito')
                ->with('tipo', 'success'); //para el sweetalert2, este es el mensaje en toast
    }
}
