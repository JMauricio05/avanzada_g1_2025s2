<?php
namespace App\controllers;

use App\models\Contacto;

class ContactosController
{
    public function getContactos()
    {
        $rows = Contacto::all();
        if (count($rows) == 0) {
            return null;
        }
        return $rows->toJson();
    }
}