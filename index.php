<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usando lenguaje PHP resuelve los puntos 1 al 4. </h1>
    <hr>

    <p>1 Recorrer los números del 1 al 100 e imprimir:</p>
    <p>Si es divisible por 3, escribir fizz</p>
    <p>Si es divisible por 2 buzz</p>

    <?php
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 3 === 0) {
                echo "<p>$i --- Fizz</p>";
            } elseif ($i % 2 === 0) {
                echo "<p>$i --- Buzz</p>";
            }
        }
    ?>

    <p>2. Dado una cadena de texto, imprimir la primera letra que se repite, no distinguiendo entre mayúsculas y minúsculas. No utilizar strpos, strstr y substr. </p>

    <p>a. Ejemplo: “zapato” la primera letra que más se repite es a. </p>

    <?php
        $cadena_de_texto = " 'tacos, Tortas, tamales, Tinga, tostadas' ";
        echo "La cadena para usada para este ejercicio es " . $cadena_de_texto . "<br>";
        $cadena_de_texto = strtolower($cadena_de_texto);

        echo "La T se repite " . substr_count($cadena_de_texto, "t",) . " veces";
    ?>

    <p>3. Imprimir los valores del arreglo [ 1, 2, 3, 4, 5, 6, 7, 8, 9] usando recursividad. No  utilizar while, do while, for y foreach.</p>

    <?php
        $numeros = [ 1, 2, 3, 4, 5, 6, 7, 8, 9];

        function imprimirArregloDeNumeros($numeros) {
            echo '<pre>';
            var_dump($numeros);
            echo '</pre>';
        }

        imprimirArregloDeNumeros($numeros);

    ?>

    <p>4. Dado una matriz cualquiera, calcular su transpuesta. </p>

    <p>Antes</p>
    <?php

        $arreglo_multidimensional = [
            'nombre' => ['Goku', 'Gohan', 'Goten'],
            'edad'  => [ 30 ,  20 ,  10]
        ];

        echo '<pre>';
        var_dump($arreglo_multidimensional);
        echo '</pre>';

        $resultado = [];
        $claves   = array_keys($arreglo_multidimensional);
        foreach($arreglo_multidimensional[$claves[0]] as $indice => $temp) {
            $data = [];
            foreach($claves as $i => $clave) {
                $data[$clave] = $arreglo_multidimensional[$clave][$indice];
            }
            $resultado[] = $data;
        }

        echo "<p>Después</p>";

        echo '<pre>';
        var_dump($resultado);
        echo '</pre>';

    ?>



</body>
</html>