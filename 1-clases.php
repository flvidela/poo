<?php
/*
 * Clases es una abstracción de algo en la vida reeal a algo que necesitamos modelar en un sistema, son modelos. 
 * Ej: plano de una construcción
 */
class Persona
{
    /*
     * Variables son nuestros atributos
     */
    public $edad;
    public $nombre;
    
    /*
     * Metodos son las acciones
     */
    public function correr()
    {
        echo '<br> Estoy corriendo';
    }        
    
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }        
    
}

/*
 * Objeto es una instancia de una clase
 * Ej. una casa seria un objeto una casa con sus caracteristicas que implementa los planos
 */
$persona = new Persona('Blanca', 10);
echo $persona->nombre;
$persona->correr();


$persona2 = new Persona('Marcos', 20);
echo $persona2->nombre;
$persona2->correr();