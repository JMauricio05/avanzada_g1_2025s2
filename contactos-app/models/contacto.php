<?php
namespace App\Models;

require __DIR__ . "/sql_models/model.php";
require __DIR__ . "/sql_models/sql_contacto.php";
require __DIR__ . "/databases/grupo-avanzada-db.php";

use App\Models\SQLModels\Model;
use App\Models\SQLModels\SqlContacto;
use App\Models\Databases\GrupoAvanzadaDB;

class Contacto extends Model
{
    private $id = 0;
    private $nombre = null;
    private $telefono = null;
    private $email = null;

    public function get($prop)
    {
        return $this->{$prop};
    }

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    public function all()
    {
        $sql = SqlContacto::selectAll();
        $db = new GrupoAvanzadaDB();
        $result = $db->execSQL($sql, true);
        $contactos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $contacto = new Contacto();
                $contacto->set('id', $row["id"]);
                $contacto->set('nombre', $row["nombre"]);
                $contacto->set('telefono', $row["telefono"]);
                $contacto->set('email', $row["email"]);
                array_push($contactos, $contacto);
            }
        }
        return $contactos;
    }
    public function find($id)
    {
    }
    public function insert($contacto)
    {
    }
    public function update($id, $contacto)
    {
    }
    public function delete($id)
    {
    }
}