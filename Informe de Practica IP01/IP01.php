<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IP01</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<?php

	//*** FUNCIONES **//
	function getExiste($a_, $b_, $c_)
	{
        //Condiciones para verificar la existencia de un triangulo
		$condicionA = ($a_ > abs($b_ - $c_)) && ($a_ < ($b_ + $c_));
        $condicionB = ($b_ > abs($a_ - $c_)) && ($b_ < ($a_ + $c_));
        $condicionC = ($c_ > abs($b_ - $a_)) && ($c_ < ($b_ + $a_));

        //Si se cumplen las tres condiciones, el triangulo existe
        $existe = $condicionA && $condicionB && $condicionC;
		return $existe;
	}
	function getPerimetro($a_, $b_, $c_)
	{
        //Si el triangulo existe, se calcula el perimetro
		if (getExiste($a_, $b_, $c_)) {
            $resultado = $a_ + $b_ + $c_;
        } else {
            //sino se muestra un mensaje de error
            $resultado = "No existe el triangulo";
        }
        return $resultado;
	}
	function getArea($a_, $b_, $c_)
	{
		if (getExiste($a_, $b_, $c_)) {
            // Calcular el área usando la fórmula de Heron
            // Semiperímetro
            $s = ($a_ + $b_ + $c_) / 2;
            $resultado = sqrt($s * ($s - $a_) * ($s - $b_) * ($s - $c_));
        } else {
            $resultado = "No existe el triangulo";
        }
        return $resultado;
	}
    function getTipo($a_, $b_, $c_)
    {
        if (getExiste($a_, $b_, $c_)) {
            // Determinar el tipo de triángulo
            if ($a_ == $b_ && $b_ == $c_) {
                $resultado = "Equilátero";
            } elseif ($a_ == $b_ || $a_ == $c_ || $b_ == $c_) {
                $resultado = "Isósceles";
            } else {
                $resultado = "Escaleno";
            }
        } else {
            $resultado = "No existe el triangulo";
        }
        return $resultado;
    }
	?>


	<h1>Triangulo</h1>
	<p>A partir del ingreso de los tres lados de un triangulo Verificar su existencia y en caso de existir, calcular el perimetro, area y el tipo de triangulo.</p>
	<?php
		//Verificar la existencia del elemento del array
		if(isset($_GET['txtA']))
		{
			//Leer el valor enviado
			$a = $_GET['txtA'];
			$b = $_GET['txtB'];
            $c = $_GET['txtC'];
		}
		else
		{
			//Definir valores predeterminados
			$a = 0;
			$b = 0;
            $c = 0;
		}
	?>

	<!-- Declarar un Formulario -->
	<form>
        <!-- Ingresar los lados del triangulo -->
		<label>Lado "a"</label>
		<input type="text" name="txtA" value="<?php echo $a ?>">

		<label>Lado "b"</label>
		<input type="text" name="txtB" value="<?php echo $b ?>">

        <label>Lado "c"</label>
        <input type="text" name="txtC" value="<?php echo $c ?>">

        <!-- Boton para enviar el formulario -->
		<input type="submit" value="Calcular">

        <!-- Mostrar los resultados -->
		<label>Perimetro</label>
		<input type="text" value="<?php echo getPerimetro($a, $b, $c);?>">
		<label>Area</label>
		<input type="text" value="<?php echo getArea($a, $b, $c);?>">
		<label>Tipo</label>
		<input type="text" value="<?php echo getTipo($a, $b, $c);?>">

        <?php
        // Mostrar la imagen del tipo de triangulo
        if (getTipo($a, $b, $c) == "Equilátero") {
            echo "<img src='equilatero.png' alt='Triángulo Equilátero'>";
        } elseif (getTipo($a, $b, $c) == "Isósceles") {
            echo "<img src='isosceles.png' alt='Triángulo Isósceles'>";
        } elseif (getTipo($a, $b, $c) == "Escaleno") {
            echo "<img src='escaleno.png' alt='Triángulo Escaleno'>";
        } else {
            echo "<p>No existe el triángulo con los lados ingresados.</p>";
        } 
        ?>
	</form>

</body>
</html>