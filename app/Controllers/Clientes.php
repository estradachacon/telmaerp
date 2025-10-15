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

    public function edit($id = null)
    {
        $clientesModel = new ClientesModel();

        if ($id === null) {
            return $this->response->setJSON(['error' => 'ID no proporcionado']);
        }

        $cliente = $clientesModel->find($id);

        if (!$cliente) {
            return $this->response->setJSON(['error' => 'Cliente no encontrado']);
        }

        // Devuelve el cliente como objeto JSON
        return $this->response->setJSON($cliente);
    }

    public function update($id = null)
    {
        $clientesModel = new ClientesModel();

        if ($id === null) {
            return $this->response->setJSON(['error' => 'ID no proporcionado']);
        }

        $data = [
            'cliente_nombre' => $this->request->getPost('cliente_nombre'),
        ];

        if ($clientesModel->update($id, $data)) {
            return $this->response->setJSON(['success' => 'Cliente actualizado correctamente']);
        } else {
            return $this->response->setJSON(['error' => 'No se pudo actualizar el cliente']);
        }
    }

    public function delete($id = null)
    {
        $clientesModel = new ClientesModel();

        if ($id === null) {
            return $this->response->setJSON(['error' => 'ID no proporcionado']);
        }

        $cliente = $clientesModel->find($id);
        if (!$cliente) {
            return $this->response->setJSON(['error' => 'Cliente no encontrado']);
        }

        if ($clientesModel->delete($id)) {
            return $this->response->setJSON(['success' => 'Cliente eliminado correctamente']);
        } else {
            return $this->response->setJSON(['error' => 'No se pudo eliminar el cliente']);
        }
    }
}
