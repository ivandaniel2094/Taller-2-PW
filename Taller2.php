<?php
echo "<h3>Taller 2</h3><br>";
echo "1. Ciclo While<br><br>";


	echo "a. Imprimir en pantalla los numeros del 1 al 10.<br>";
	$num = 1;
	while ($num <= 10) {
		echo "Numero: ".$num."<br>";
		$num ++;
	}

	echo "<br>b. Sumar los números del 1 al 100<br>";

	$num1 = 1;
	$num2 = 1;
	$resultado;
	while ($num1 < 100) {
		$resultado = $num1 + $num2;
		echo $num1." + ".$num2." = ".$resultado."<br>";
		$num1++;
	}


	echo "<br>c. Sumar los numeros pares del 1 al 50<br>";

	$pares = 1;
	$cons = 2;
	$resut;

	while ($pares < 50) {
		if ($pares % 2 == 0) {
			$resut = $pares + $cons;
			echo $pares." + ".$cons." = ".$resut."<br>";
			$pares++;
		} else {
			echo "El numero".$pares."no es un mumero par.<br>";
			$pares++;
		}
	}

	echo "<br>d. Sumar los números impares del 1 al 50<br><br>";

	$impar = 1;
	$par = 2;
	$impar1;

	while ($impar < 50) {
		
		if($impar % 2 == 0) {
			echo "El numero ".$impar." es un numero par.<br>";
			$impar++;
		}else {
			$impar1 = $impar + $par;
			echo $impar." + ".$par." = ".$impar1."<br>";
			$impar++;
		}
	}

//--------------------------------------------------------------------
	echo "<br><br>2. Ciclo For<br><br>";
	echo "a. Imprimir los numeros del 1 al 100<br><br>";

	$num6 = 1;

	for($i = 0; $i < 100; $i++) {
		echo "".$num6."<br>";
		$num6 ++;
	}

	echo "<br>b. Imprimir las tablas de multipicar de un número del 1 al 20<br>";

	$mult = 2;
	$num7 = 1;
	$num8;

	for($n = 0; $n < 20; $n++) {
		$num8 = $mult * $num7;
		echo $mult." x ".$num7." = ".$num8."<br>";
		$num7++;
	}

	echo "<br>c. Solucionar el factorial de un número<br>";

	$num3 = 8;
	$fac = 1;

	echo "Factorial de: ".$num3." = ";

	for ($c=1; $c <= $num3; $c++) { 
		$fac *= $c;
		echo $c;

		if ($c == $num3) {
			echo " = ";
		}else {
			echo " X ";
		}
	}
	echo $fac;


	echo "<br><br>d. Solucionar el numero de Fibonacci<br><br>";

	$num4 = 1;
	$num5 = 0;
	$limit = 10;

	echo "El número Fibonacci de: ".$limit."es: <br>";

	for ($d=0; $d <= $limit; $d++) { 
		$suma = $num4 + $num5;
		$num4 = $num5;
		$num5 = $suma;

		echo $suma." <br>";
	}

	//---------------------------------------------------------------------------------

	echo "<br><br>3. Ciclo Foreach<br><br>";

	echo "a. Imprimir en pantalla el siguente array('Alonso','Pedro','Victor','Manuela')<br><br>";

	$name = array('Alonso','Pedro','Victor','Manuela');
	foreach ($name as $name) {
		echo $name."<br>";
	}

	echo "<br>b.Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en orden ascendente<br><br>";
/*
	$aleatorio = array();

	$aleatorio[0] = 20
	$aleatorio[1] = 50
	$aleatorio[2] = 150
	$aleatorio[3] = 200
	$aleatorio[4] = 250

	foreach ($aleatorio as $aleatorio) {
		if
	}*/

echo "c.Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en orden descendente<br><br>";

	$aleatorio = array();

	$aleatorio1[0] = 5;
	$aleatorio2[1] = 10;
	$aleatorio3[2] = 15;
	$aleatorio4[3] = 20;
	$aleatorio5[4] = 25;

echo "d. Pedirle a usuario que ingrese 5 nombres y mostrarlos<br><br>";



echo "4. Funciones<br>";
echo "<br><br>a";
echo "<br><br>b";
echo "<br><br>c";
echo "<br><br>d";



echo "<br>5. Array <br><br>";

echo "Ingrese dos valores:<br><br>";

$valor1 = 20;
$valor2 = 5;

$numerosArray = array($valor1, $valor2);

$c = 0;

	while ($c <= 1) {
		echo decbin($numerosArray[$c])."<br><br>";
		$c++;
	}

echo "<br><br>5. Array<br><br>";
echo "c.Arreglo de dimención 4x4<br><br>";
/*
echo "Por favor ingrese cuatro numeros: <br><br>";

$nume1 = 2;
$nume2 = 5;
$nume3 = 8;
$nume4 = 10;

$eleCuadrado1 = $nume1 ** 2;
$eleCuadrado2 = $nume2 ** 2;
$eleCuadrado3 = $nume3 ** 2;
$eleCuadrado4 = $nume4 ** 2;

$eleCubo1 = $nume1 ** 3;
$eleCubo2 = $nume2 ** 3;
$eleCubo3 = $nume3 ** 3;
$eleCubo4 = $nume4 ** 3;

$eleCuarta1 = $nume1 ** 4;
$eleCuarta2 = $nume2 ** 4;
$eleCuarta3 = $nume3 ** 4;
$eleCuarta4 = $nume4 ** 4;

$miArreglo[0][0][0][0] = $nume1;
$miArreglo[1][0][0][0] = $nume2;
$miArreglo[2][0][0][0] = $nume3;
$miArreglo[3][0][0][0] = $nume4;

$miArreglo[0][0][0][0] = $eleCuadrado1;
$miArreglo[0][1][0][0] = $eleCuadrado2;
$miArreglo[0][2][0][0] = $eleCuadrado3;
$miArreglo[0][3][0][0] = $eleCuadrado4;

$miArreglo[0][0][0][0] = $eleCubo1;
$miArreglo[0][0][1][0] = $eleCubo2;
$miArreglo[0][0][2][0] = $eleCubo3;
$miArreglo[0][0][3][0] = $eleCubo4;

$miArreglo[0][0][0][0] = $eleCuarta1;
$miArreglo[0][0][0][1] = $eleCuarta2;
$miArreglo[0][0][0][2] = $eleCuarta3;
$miArreglo[0][0][0][3] = $eleCuarta4;


	echo $miArreglo[0][0][0][0]."<br><br>";
	echo $miArreglo[1][0][0][0]."<br><br>";
	echo $miArreglo[2][0][0][0]."<br><br>";
	echo $miArreglo[3][0][0][0]."<br><br>";*/

?>