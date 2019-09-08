<?php 

	class  Persona{
		//Atributos

			public $nombre = "Pedro";


		//Metodos

			public function hablar($mensaje){
				echo $mensaje;

			}
	}

	$persona = new Persona();
	$persona->hablar("Prueba por pantalla de JMAYORA..!!! Lacrita...!!!2")

// operador de resolucion de ambito "::" Token
// class myClass{
// 	public  $mensaje;

// 	public  function mostrar($mensaje){
// 		return $mensaje;
// 	}
// }
// $objmyClass = new myClass();
//   echo $objmyClass->mostrar('hola');

 ?>