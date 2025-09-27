<?php
namespace App\Models\SQLModels;

abstract class Model
{
    abstract public function all();
    abstract public function find($id);
    abstract public function insert();
    abstract public function update($id, $data);
    abstract public function delete($id);
}