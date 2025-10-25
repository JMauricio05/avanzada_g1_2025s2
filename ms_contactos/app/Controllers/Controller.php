<?php
namespace App\Controllers;

abstract class Controller
{
    /**
     * Para consultar todos los registros o recursos
     * @return string
     */
    abstract function index();

    /**
     * Para crear nuevos registros o recursos
     * @param mixed $data
     * @return string
     */
    abstract function create($data);

    /**
     * Para modificar un registro o recurso
     * @param mixed $id
     * @param mixed $data
     * @return string
     */
    abstract function update($id, $data);

    /**
     * Para eliminar un registro recurso
     * @param mixed $id
     * @return boolean
     */
    abstract function delete($id);
    
    /**
     * Detalle del registro o recurso
     * @param mixed $id
     * @return string
     */
    abstract function detail($id);
}