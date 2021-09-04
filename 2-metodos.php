<?php
class Persona
{
    /*
     * propiedades son nuestros atributos
     */
    public $edad;
    public $nombre;
    
    /*
     * Metodos son las acciones, sus nombre se escriben con verbos en infinitivo
     */
    public function caminar()
    {
        echo " Estoy caminando ";
    }        
    
    public function correr()
    {
        echo " Estoy corriendo ";
    }        
    
    public function saludar($otra_persona)
    {
        echo " <br>". $this->nombre . ' saluda a ' . $otra_persona;
    }       
    
    public function __construct($nombre, $edad)
    {
      //  echo "Estoy siendo creado <br>";
        $this->nombre = $nombre;
        $this->edad = $edad;
    }        
    
}


$persona = new Persona('Blanca', 10);
echo " <br>". $persona->nombre;
$persona->correr();


$persona2 = new Persona('Marcos', 20);
echo " <br>". $persona2->nombre;
$persona2->caminar();

$persona->saludar('Brenda');