<?php

namespace App\Controllers;

use App\Models\Cliente;

class ClienteController
{
    private Cliente $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {
        return $this->cliente->all();
    }

    public function store(
        $nombre,
        $email,
        $telefono
    )
    {
        return $this->cliente->create(
            $nombre,
            $email,
            $telefono
        );
    }

    public function edit($id)
    {
        return $this->cliente->find($id);
    }

    public function update(
        $id,
        $nombre,
        $email,
        $telefono
    )
    {
        return $this->cliente->update(
            $id,
            $nombre,
            $email,
            $telefono
        );
    }

    public function destroy($id)
    {
        return $this->cliente->delete($id);
    }
}