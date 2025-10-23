<?php
namespace App\Models;

require __DIR__ . "/sql_models/model.php";
require __DIR__ . "/sql_models/sql_usuario.php";
require __DIR__ . "/databases/grupo-avanzada-db.php";

use App\Models\SQLModels\Model;
use App\Models\SQLModels\SqlUsuario;
use App\Models\Databases\GrupoAvanzadaDB;

class Usuario extends Model
{
    private $id = 0;
    private $username = null;
    private $password = null;

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
    }
    public function delete()
    {
    }
    public function find()
    {
        $sql = SqlUsuario::selectByUserPwd();
        $db = new GrupoAvanzadaDB();
        $result = $db->execSQL(
            $sql,
            true,
            "ss",
            $this->username,
            $this->password
        );
        $user = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = new Usuario();
                $user->set('id', $row['id']);
                $user->set('username', $row['username']);
                $user->set('password', $row['password']);
                break;
            }
        }
        $db->close();
        return $user;
    }
    public function insert()
    {
    }
    public function update()
    {
    }
}
