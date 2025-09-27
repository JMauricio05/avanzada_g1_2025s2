<?php
namespace App\Controllers;

require __DIR__ . "/../models/contacto.php";

use App\Models\Contacto;

class ContactosController
{

    public function queryAllContactos()
    {
        $contacto = new Contacto();
        return $contacto->all();
    }

}
