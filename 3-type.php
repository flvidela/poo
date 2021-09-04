<?php
/*
 * Los tipos en php5 solo funciona para arreglos y clases
 */

class Mascota
{
    public $nombre = 'Duque';
}

class Persona
{
    public $edad;
    public $nombre;
    
    public function caminar()
    {
        echo " Estoy caminando ";
    }        
    
    public function correr()
    {
        echo " Estoy corriendo ";
    }        
    
    /*
     * Vamos a enviar como parametro al metodo saludar la variable $otra_persona que es del tipo: Persona
     */
    public function saludar(Persona $otra_persona) 
    {
        echo " <br> Hola, " . $otra_persona->nombre;
    }       
    
    /*
     * El metodo adoptar recibe como parametro la variable $instancia_mascota que es del tipo: Mascota
     */
    public function adoptar(Mascota $instancia_mascota) // $otra_persona es una instancia de persona
    {
        echo " <br> Hey, adopte a " . $instancia_mascota->nombre;
    }       
    
    public function __construct($nombre, $edad)
    {      
        $this->nombre = $nombre;
        $this->edad = $edad;
    }        
    
}

$persona = new Persona('Blanca', 10);
$persona2 = new Persona('Marcos', 20);
$mascota = new Mascota();

/*
 * esta la ejecucion del metodo saludar que realizamos en el ejercicio anterior
 * da error, porque le estamos pasando un string y no un objeto 
 */
//$persona->saludar('Brenda');  

/*
 * Los siguientes metodos reciben como parametros dos objetos uno del tipo Persona y el otro del tipo Mascota
 */
$persona->saludar($persona2);   

$persona->adoptar($mascota);   