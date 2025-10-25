<?php

namespace App\Controllers;

use App\Models\Contacto;
use Exception;

class ContactosController extends Controller
{

    public function index()
    {
        $rows = Contacto::all();
        return $rows->toJson();
    }

    public function detail($id)
    {
        if (empty($id)) {
            throw new Exception("Id null", 1);
        }
        $row = Contacto::find($id);
        if (empty($row)) {
            throw new Exception("Row null", 2);
        }
        return $row->toJson();
    }

    public function create($data)
    {
        $required = ['nombre', 'telefono', 'email'];
        foreach ($required as $item) {
            if (empty($data[$item])) {
                throw new Exception("$item null", 1);
            }
        }
        $newRow = new Contacto();
        $newRow->nombre = $data['nombre'];
        $newRow->telefono = $data['telefono'];
        $newRow->email = $data['email'];
        if (!$newRow->save()) {
            throw new Exception("Error save", 3);
        }
        return $newRow->toJson();
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
}