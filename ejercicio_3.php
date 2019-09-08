
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>arrays</title>
	<?php include 'heard/header.php'; ?>

</head>
<body>
	<div class="container">
		<!-- //fila 1		 -->
		<div class="row justify-content-md-center" style="border:1px solid red ; padding: 4% ;">
			<!-- columna 1 -->
			<div class="col-md-5" style="border: 1px solid green;">
				<p>columna 1</p>
				<?php 
				echo "Linea " . __LINE__ ." ". dirname(__FILE__ ) ;
				echo "</br>";
				echo "Linea " .  __FILE__ . "\n" . "</br>"; 

				echo __LINE__ . "\n" . "</br>";

				echo "Linea " . __LINE__ ." ". "array Unidimencional:". "</br>";

				echo "Linea " . __LINE__ ." ". $a[0] = "abc ";
				echo "Linea " . __LINE__ ." ". $a[1] = "def". "</br>";
				echo"Linea " . __LINE__ ." ".  $b["foo"] = 13;

				echo "</br>";

				echo "Linea " . __LINE__ ." ". $a[] = "hola";
				echo "Linea " . __LINE__ ." ". $a[] = "mundo";

				echo "</br>" . "</br>";

				echo "Linea " . __LINE__ ." ". "<h5>Array Multidimencional</h5>";
				echo "</br>";
				$f = "peo";
echo "Linea " . __LINE__ ." ". $a[1] = $f;// ejemplo de una dimención
echo "Linea " . __LINE__ ." ". $a["foo"] = $f;

echo "</br>" . "</br>";
echo "Linea " . __LINE__ ." ". "<h5>forma dos</h5>";
echo "</br>";

echo '"Rellenar Arrays  Multidimencionales"' . "\n" ."</br>";
echo "#Ejemplo 1: "."</br>";
echo $a["color"] = "rojo". "\n" ;
echo $a["sabor"] = "dulce". "\n" ;
echo $a["forma"] = "redondeada". "\n" ;
echo $a["nombre"] = "manzana". "\n" ;
echo $a["3"] = 4;
echo "</br>" ."</br>";
echo "mostrar 2:". "\n" . $a["nombre"].$a["color"] ;
echo "</br>" ."</br>";

echo "#Ejemplo 2:";

// $a = array(
// 	'color' => "rojo" ,
// 	'sabor' => "dulce",
// 	'froma' => "redondeada",
// 	'nombre' => "manzana",
// 	'3'=> "4"
// );
echo "</br>";
$a = array( "rojo" , "dulce", "redondeada","manzana","4");
echo "\n \n". $a[0].",". $a[1].",". $a[2]." y " . $a[3];
?>

</div>
<!-- columna 2 -->
<div class="col-md-5" style="border:1px solid blue;  ;">
	<p>Columna 2: Programación orientada a objetos.</p>

	<?php 
	class simpleClass{
		//Declaración de propiedades
		public $var = 'valor por defaul '.'nuestra la clase';

		//Declaración del metodo
		public function FunctionDisplayVar()
		{
			# code...
			echo $this->var;
		}
	}

	//Crear una instancia de una clase
	$instancia = new simpleClass();
//echo var_dump($instancia);

	 //mostrar por pantalla una funcion en especifico de una clase
	 $instancia->FunctionDisplayVar();//nuetra el contenido de la funcion

//llamar a una propiedad de la clase
	 echo "</br>";
	 echo "llamr ala propiedad de una clase: ".$instancia->var;

	 echo "</br>";
//forma 2:

	 echo "froma 2 de llamar a una clase con '::' ";echo "</br>";echo "</br>";
	//$instancia::FunctionDisplayVar() ;
	 //esto tambien se puede hacer con variables:
	// $simpleClass = 'Foo';
	 //$instancia = new $simpleClass();

	 echo "2. Visibilidad de propiedades: ";echo "</br>";
	 /**
	  * 
	  */
	 class MyClass
	 {
	 	public $publico = 'Publico';
	 	protected $protejido = 'Protegido';
	 	private   $privado = 'privado';
	 	function printhola()
	 	{
	 		# code...
	 		echo $this->publico;
	 		echo $this->protejido;
	 		echo $this->privado;
	 	}
	 }
$obj = new MyClass();
echo $obj->publico;echo "</br>";
//echo $obj->protejido;
//echo $obj->privado;
$obj->printhola();
	 ?>

	</div>
</div>

</div>
<?php  include 'footer/footer.php'; ?> 
</body>
</html>
