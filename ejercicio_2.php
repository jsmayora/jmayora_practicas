<?php 

class Persona{

   	//Atributo
	public	$nombre   = array();
	public 	$apellido = array();

	//Metodos
	//Metodo en donde se guardaran los datos para mostrarlos luego
	public function guardar($nombre, $apellido){
		$this->nombre[]   = $nombre;
		$this->apellido[] = $apellido;
	}

   	//Metodo que mostrara los datos que contienen los atributos(variables)
	public function mostrar(){
		for ($i = 0; $i <  count($this->nombre); $i++) { 
   	  	// mostrara la lista de persona que hemos registraso
   	  	//llamar a un metodo dentro de otro metodo con self::
			self::formato($this->nombre[$i] , $this->apellido[$i]) ;

			//Persona::formato($this->nombre[$i] , $this->apellido[$i]) ;

			//$this->formato($this->nombre[$i] , $this->apellido[$i]) ;
		}

	}

   	 //Metodo llamado formato contendra el formato que se mostrara por pantalla

	public function formato($nombre,$apellido){
		echo "Nombre: " . $nombre . " | apellido: " . $apellido . "<br> ";

	}

}



$persona = new Persona();

$persona->guardar("Gustavo", "Mayora");

$persona->guardar("José", "Mayora");

$persona->guardar("Gustavo", "Mayora");

$persona->guardar("José", "Mayora");
$persona->guardar("Gustavo", "Mayora");

$persona->guardar("José", "Mayora");
$persona->guardar("Gustavo", "Mayora");

$persona->guardar("José", "Mayora");
$persona->guardar("Gustavo", "Mayora");

$persona->guardar("José", "Mayora");

$persona->mostrar();


?>