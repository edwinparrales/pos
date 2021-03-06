<?php


/**
 * Clase realizada para realizar pruebas de funcionamiento
 */
class Prueba
{
    private $nombre;
    private $apellido;

    /**
     * Prueba constructor.
     * @param $nombre
     * @param $apellido
     */
    public function __construct()
    {

    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }



}

$prueba = new Prueba();
$prueba->setNombre("Edwin Parrales");
$prueba->setApellido("Parrales Vargas");

echo $prueba->getApellido();