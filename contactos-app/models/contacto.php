<?php
class Contacto
{
    private $id = 0;
    private $nombre = null;
    private $telefono = null;
    private $email = null;

    public function get($prop)
    {
        return $this->{$prop};
    }

    public function setId($prop, $value)
    {
        $this->{$prop} = $value;
    }
}