<?php

namespace App\Controllers;

use App\Models\Contacto;

class ContactosController
{

    public function index(){
        $rows = Contacto::all();
        return $rows->toJson();
    }

}