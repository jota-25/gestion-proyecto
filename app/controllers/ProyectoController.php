<?php

namespace App\Controllers;

use App\Models\Proyecto;

class ProyectoController
{
    private Proyecto $proyecto;

    public function __construct()
    {
        $this->proyecto = new Proyecto();
    }

    public function index()
    {
        return $this->proyecto->all();
    }

    public function edit($id)
    {
        return $this->proyecto->find($id);
    }

    public function store(...$data)
    {
        return $this->proyecto->create(...$data);
    }

    public function update(...$data)
    {
        return $this->proyecto->update(...$data);
    }

    public function destroy($id)
    {
        return $this->proyecto->delete($id);
    }
}