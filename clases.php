<?php

interface Model{
    function get($nameProperty);
    function set($nameProperty, $valueProperty);
}

abstract class Persona implements Model {
    protected $nombre;
    private $id;

    abstract function toString();

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($value){
        $this->nombre = $value;
    }

    public function get($nameProperty){
        return $this->{$nameProperty};
    }

    public function set($nameProperty, $valueProperty){
        $this->{$nameProperty} = $valueProperty;
    }
}

class Estudiante extends Persona {
    private $codigo;

    public function __construct(){
        $this->codigo = "";
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($value){
        $this->codigo = $value;
    }

    public function toString(){
        return 'Nombre: '.$this->nombre. ', Código:'.$this->codigo;
    }
    
}

class Docente extends Persona{
    
    public function __construct($nombre, $codigo){
        $this->nombre = $nombre;
        parent::set('id', $codigo);
    }
    public function getCodigo(){
        return parent::get('id');
    }
    public function setCodigo($value){
        parent::set('id', $value);
    }
    public function toString(){
        return $this->nombre. ' '.parent::get('id');
    }
}

$estudiente = new Estudiante();
$estudiente->setNombre("Pepe");
$estudiente->setCodigo('12345');
echo $estudiente->getNombre().'<br>';
echo $estudiente->toString().'<br>';

$docente = new Docente('Ana', '65478');
echo $docente->toString().'<br>';
?>