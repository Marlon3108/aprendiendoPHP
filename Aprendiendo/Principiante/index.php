<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principiante PHP</title>
</head>

<body>
    <?php
    echo "<h2>Alcance de variables</h2>";
    $x = 9;
    function myTest()
    {
        $x = 5; // Variable con alcance local- Solo la puedo usar dentro de la función, fuera de esta no sirve
        echo "<p>Variable x dentro de la función es: $x</p>";
    }
    myTest();
    // Esta me va a leer la variable que está antes de declarar la función, no puedo usar la que está dentro de la función
    echo "<p>Variable x fuera de la función es: $x</p>";

    function myTest2()
    {
        global $x;
        echo "<p>Usando la varible $x que está fuera de la función como global para acceder a ella</p>";
    }
    myTest2();


    echo "<h2>Variables globales</h2>";
    $a = 5;
    $b = 10;
    function myTest3()
    {
        $GLOBALS['a'] = $GLOBALS['b'] + $GLOBALS['a'];
    }
    //Transformamos $a que antes valía 5 como resultado de la ecuación entre a + b que valía 10 usando $GLOBALS['...']
    myTest3();
    echo "<p>El resultado es: $a</p>"; // Salida debe ser 15


    function myTest4()
    {
        static $x = 0;
        echo $x;
        $x++;
    }
    /*Uso static para que esa variable no se borre una vez cumpla su ciclo en el algoritmo. 
    Cuando la llame de nuevo tendrá el mismo valor de la ultima vez 
    ESTA VARIABLE SIGUE SIENDO LOCAL PARA LA FUNCIÓN Y NADA MAS*/
    myTest4();
    myTest4();
    myTest4();


    //Generar texto junto con variables con echo
    $txt1 = "Aprendiendo PHP";
    $txt2 = "Autodidacta.com";
    $x = 5;
    $y = 4;
    echo "<h2>" . $txt1 . "</h2>";
    echo "Estudiando PHP en " . $txt2 . "<br>";
    echo $x + $y;


    //Puedo hacer lo mismo usando print
    $txt1 = "Aprendiendo PHP";
    $txt2 = "Autodidacta.com";
    $x = 5;
    $y = 4;
    print "<h2>" . $txt1 . "</h2>";
    print "Estudiando PHP en " . $txt2 . "<br>";
    print $x + $y . "<br>";


    //Las cadenas de texto pueden ir en comilla simple o doble
    echo "<h2>Cadenas de texto</h2>";
    $cadena1 = 'Hola mundo';
    $cadena2 = "Hola mundo";
    echo $cadena1 . "<br>";
    echo $cadena2;


    //Tipo de dato int=entero
    echo "<h2>Datos enteros</h2>";
    $entero = 5893;
    var_dump($entero);


    //Datos float=flotantes o decimales
    echo "<h2>Datos flotantes o decimales</h2>";
    $flotante = 15.699;
    var_dump($flotante); //Se usa var_dump() para arrojar el resultado y el tipo de dato que contiene


    //Datos booleanos True or False 
    echo "<h2>Datos booleanos</h2>";
    $booleano = true;
    $booleano2 = false;
    //Cuando es verdadero su dato por defecto es 1 y cuando es falso no tiene nada
    var_dump("El primer dato booleano es: " . $booleano . " y el segundo es: " . $booleano2);


    //Matrices-Almacenan multiples valores en una sola variable
    echo "<h2>Matrices</h2>";
    $carros = array("BMW", "Toyota", "Fiat");
    var_dump($carros);


    //Valor nulo
    echo "<h2>Valor Null</h2>";
    $nulo = "Hola mundo";
    $nulo = null;
    var_dump($nulo);


    //Cadena de caracteres
    echo "<h2>Cadenas de caracteres</h2>";
    echo "<h3>strlen</h3>";
    echo strlen("Hola mundo"); //Esta devuelve la longitud de una cadena
    echo "<h3>str_word_count()</h3>";
    echo str_word_count("Hola mundo"); //Esta cuenta el número de palabras en una cadena
    echo "<h3>strrev()</h3>";
    echo strrev("Hola mundo"); //Esta invierte la cadena de texto
    echo "<h3>strpos()</h3>";
    echo strpos("Hola mundo", "mundo"); /*Busca un texto especifico dentro de la cadena, 
    si lo encuentra devuelve la posición de la primer coincidencia que encuentre. Sino devuelve FALSE*/
    echo "<h3>str_replace()</h3>";
    echo str_replace("mundo", "Marlon", "Hola mundo"); //Reemplaza una palabra por otra


    //Números enteros
    echo "<h2>Enteros en PHP</h2>";
    $entero = 5986;
    var_dump(is_int($entero)); //Función para comprobar si el tipo de una variable es entero
    echo "<br>";
    $entero = 59.86;
    var_dump(is_int($entero));


    //Números flotantes
    echo "<h2>Flotantes en PHP</h2>";
    $flotante = 59.86;
    var_dump(is_float($flotante)); //Función para comprobar si el tipo de una variable es flotante o decimal
    echo "<br>";
    $flotante = 5986;
    var_dump(is_float($flotante));


    //Cadenas númericas
    echo "<h2>Cadenas numericas en PHP</h2>";
    $x = 5985;
    var_dump(is_numeric($x)); //Función que encuentra si una variable es numerica. Es True si la variable es numero o cadena numerica
    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    $x = "Hello";
    var_dump(is_numeric($x)); //Sino es numerica devuelve False


    //Casting de enteros
    echo "<h2>Casting Strings y Floats a Integers</h2>";
    // Convertir Flotante en Entero
    $x = 23465.768;
    $int_cast = (int)$x; // Se usa (int) seguido de la variable a convertir
    echo $int_cast;
    echo "<br>";
    // Convertir String en Entero
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;


    //Operadores matematicos
    echo "<h2>Matemáticas en PHP</h2>";
    echo "<h3>Función pi</h3>";
    echo (pi());


    echo "<h3>Función Min y Max</h3>";
    echo (min(0, 150, 30, 20, -8, -200)); // Encontrar el valor mas bajo
    echo "<br>";
    echo (max(0, 150, 30, 20, -8, -200)); // O más alto de una lista de argumentos


    echo "<h3>Función abs</h3>";
    echo (abs(-6.7)); // Devuelve el valor positivo absoluto de un número


    echo "<h3>Función sqrt</h3>";
    echo (sqrt(64)); // Devulve la raiz cuadrada de un número


    echo "<h3>Función ronda</h3>";
    echo (round(0.60)); // Redondea un flotante a su entero más cercano
    echo (round(0.49));


    echo "<h3>Números al azar</h3>";
    echo (rand()); // Genera números al azar
    echo "<br>";
    echo (rand(10, 100)); // Dar un rango del entero más alto y más bajo que se va a devolver


    //Definición de constantes
    echo "<h2>Constantes en PHP</h2>";
    define("GREETINGS", "Bienvenido a Autodidacta.com!"); // Constante donde se indica el nombre y luego el valor de esta
    echo GREETINGS;
    echo "<br>";
    define("NUMBERS", 898.9);
    echo NUMBERS;


    echo "<h2>Matrices constantes en PHP</h2>"; // Constante de matriz o arreglo 
    define("carros", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo carros[0]; // Imprimo la primera posición de dicho arreglo
    /*Las constantes son globales y se pueden usar en cualquier lugar que yo desee*/


    //Operadores aritmeticos
    echo "<h2>Operadores aritméticos en PHP</h2>";
    echo "<h3>Suma</h3>"; // +
    $x = 8;
    $y = 4;
    $resultado = $x + $y;
    echo $resultado;
    echo "<h3>Resta</h3>"; // -
    $x = 8;
    $y = 4;
    $resultado = $x - $y;
    echo $resultado;
    echo "<h3>Multiplicación</h3>"; // *
    $x = 8;
    $y = 4;
    $resultado = $x * $y;
    echo $resultado;
    echo "<h3>División</h3>"; // /
    $x = 8;
    $y = 4;
    $resultado = $x / $y;
    echo $resultado;
    echo "<h3>Modulo</h3>"; // % 
    $x = 7;
    $y = 4;
    $resultado = $x % $y;
    echo $resultado;
    echo "<h3>Exponenciación</h3>"; // **
    $x = 8;
    $y = 4;
    $resultado = $x ** $y;
    echo $resultado;


    //Operadores para asignar valores
    echo "<h2>Operadores de asignación en PHP</h2>";
    echo "'=' Ejemplo x = y 'Asignar valor de la derecha al de la izquierda' " . "<br>";
    echo "'+=' Ejemplo x += y 'Suma el valor de y a x' " . "<br>";
    echo "'-=' Ejemplo x += y 'Resta el valor de y a x'" . "<br>";
    echo "'*=' Ejemplo x += y 'Multiplica el valor de y a x'" . "<br>";
    echo "'/=' Ejemplo x += y 'Divide por el valor de y a x'" . "<br>";
    echo "'%=' Ejemplo x += y 'Saca el resto de la división entre el valor de y con x'" . "<br>";


    //Operadores para comparar valores
    echo "<h2>Operadores de comparación en PHP</h2>";
    echo "'== Igual' Ejemplo x == y 'Devuelve verdadero si x es igual a y'" . "<br>";
    echo "'=== Idéntico' Ejemplo x === y 'Devuelve verdadero si x es igual a y además sean del mismo tipo de dato'" . "<br>";
    echo "'!= No es igual' Ejemplo x != y 'Devuelve verdadero si x NO es igual a y'" . "<br>";
    echo "'<> Distinto de' Ejemplo x <> y 'Devuelve verdadero si x NO es igual a y'" . "<br>";
    echo "'!== No identicos' Ejemplo x !== y 'Devuelve verdadero si x NO es igual a y o si no son del mismo tipo de dato'" . "<br>";
    echo "'> Mayor que' Ejemplo x > y 'Devuelve verdadero si x es Mayor que y'" . "<br>";
    echo "'< Menor que' Ejemplo x < y 'Devuelve verdadero si x es Menor que y'" . "<br>";
    echo "'>= Mayor o igual que' Ejemplo x >= y 'Devuelve verdadero si x es Mayor o igual que y'" . "<br>";
    echo "'<= Menor o igual que' Ejemplo x <= y 'Devuelve verdadero si x es Menor o igual que y'" . "<br>";
    echo "'<=> Nave espacial' Ejemplo x <=> y 'Devuelve número entero menor, igual o mayor a cero, dependiendo de si x es menor, igual o mayor que y'" . "<br>";


    //Operadores para incrementar o decrementar valores
    echo "<h2>Operadores de incremento y decremento en PHP</h2>";
    echo "++x Preincremento Incrementa x en 1 y luego devuelve x" . "<br>";
    echo "x++ Posincremento Devuelve x y luego lo incrementa en 1" . "<br>";
    echo "--x Predecremento Decrementa x en 1 y luego devuelve x" . "<br>";
    echo "x-- Posdecremento Devuelve x y luego lo Decrementa en 1" . "<br>";


    //Operadores logicos
    echo "<h2>Operadores logicos en PHP</h2>";
    echo "And o && = y Da verdadero si tanto x como y son verdaderos" . "<br>";
    echo "Or o || = o Da verdadero si x o y son verdaderos" . "<br>";
    echo "Xor = o Da verdadero si x o y son verdaderos, pero no aplica sin ambos son falsos" . "<br>";
    echo "Not o ! = no Da verdadero si x NO es verdadero, si lo es entonces da falso" . "<br>";


    //Operadores para cadenas de texto
    echo "<h2>Operadores de cadenas en PHP</h2>";
    echo ". = concatenación de x con y" . "<br>";
    echo ".= asignación de concatenación añade x a y" . "<br>";


    //Operadores para matrices o arrays
    echo "<h2>Operadores para matrices o arrays en PHP</h2>";
    echo "+ = 'unión' Ejemplo x + y unión de x con y" . "<br>";
    echo "== = 'igualdad' Ejemplo x == y Es verdadero si tanto x como y tienen los mismos pares clave, valor" . "<br>";
    echo "=== = 'identidad' Ejemplo x === y Es verdadero si tanto x como y tienen los mismos pares clave, valor, mismo orden y mismo tipo" . "<br>";
    echo "!= = 'desigualdad' Ejemplo x != y Es verdadero si x No es igual a y" . "<br>";
    echo "<> = 'desigualdad' Ejemplo x <> y Es verdadero si x No es igual a y" . "<br>";
    echo "!== = 'sin identidad' Ejemplo x !== y Es verdadero si x no es identico a y" . "<br>";


    //Operadores de asignación condicional
    echo "<h2>Operadores de asignación condicional</h2>";
    echo "?: = 'ternario' Ejemplo x = expr1 ? expr2 : expre3 Devuelve x, pero hace la evaluación si expr1 es True entonces x valdrá expr2 si expr1 es False x valdrá expr3" . "<br>";
    echo "?? = 'Unión nula' Ejemplo x = expr1 ?? expr2 Devuelve x, pero hace la evaluación si expr1 existe y no es Null entonces x valdrá expr1 si expr1 es no existe o el Null x valdrá expr2" . "<br>";


    //Condicionales if, elseif y else
    echo "<h2>Condicionales en PHP</h2>";
    echo "<h3>Declaración if, elseif y else</h3>";
    $t = date("H");
    if ($t < "10") { //Si esto es verdadero se ejecuta lo que hay dentro 
        echo "Ten una buena mañana";
    }elseif ($t < "20") { //Sino se usa elseif para agregar otra condición al codigo
        echo "Ten buen día!";
    } else {
        echo "Ten buena noche!"; //Si lo anterior no es verdadero se ejecuta lo que hay aquí dentro
    }


    //Condicional switch
    echo "<h3>Condicional switch</h3>";
    $colFavorito = "Azul";
    switch ($colFavorito) { //Selecciona uno de los muchos bloques de codigo que son evaluados
        case 'Verde':
            echo "Su color favorito es el Verde";
            break; //Colocar break para que no se siga ejecutando el siguiente bloque sino que rompa ahí
        case 'Rojo':
            echo "Su color favorito es el Rojo";
            break;
        case 'Azul':
            echo "Su color favorito es el Azul";
            break;
        default: //Si ninguna de las condiciones se cumple debe ir este bloque por defecto
            echo "No tiene un color favorito";
            break;
    }


    //Bucle while
    echo "<h2>Bucles en PHP</h2>";
    echo "<h3>Bucle while</h3>";
    $buclewhile = 1;
    while ($buclewhile <= 5) { //Ejecuta el bloque de codigo siempre que la condición sea verdadera
        echo "Su número es: $buclewhile <br>";
        $buclewhile ++; //Incrementa en uno la variable
    }
    //Bucle do while
    echo "<h3>Bucle do while</h3>";
    $bucledowhile = 1;
    do { // Recorre primero el bloque de codigo sin importar si la condición es True o False y luego si valida la condición
        echo "El número es: $bucledowhile <br>";
        $bucledowhile++; //El incremento de la variable va dentro del do
    } while ($bucledowhile <= 5);
    //Bucle for
    echo "<h3>Bucle for</h3>"; //recorre un bloque de código un número especifico de veces y luego incrementa la variable hasta que la condición sea falsa
    for ($buclefor=1; $buclefor <=6 ; $buclefor++) { //variable inicializada; condición para la variable; incremento de la variable 
        echo "El número es: $buclefor <br>" ;
    }
    //Bucle foreach
    echo "<h3>Bucle foreach</h3>";
    $matrizCarros = array("Audi", "Mercedes", "Masserati", "Alpha Romeo");
    foreach ($matrizCarros as $value) { //Recorre un bloque de código para cada elemento de una matriz y cada llave la guarda en $value
        echo "Su carro es: $value <br>" ;
    };
    echo "<br>";
    $matrizEdad = array(
        "Marlon" => "21", //Array con su clave => y su valor
        "Marcela" => "26",
        "María" => "15"
    );
    foreach ($matrizEdad as $key => $value) { //Recorre las claves y los valores del arreglo
        echo "La edad de $key es: $value <br>"; 
    }


    //Pausar o break
    echo "<h2>Romper codigo en bucle for</h2>";
    for ($i=0; $i <=6 ; $i++) { 
        if ($i == 4) {
            break; // Se crea una condición y se indica en que valor quiero que rompa el codigo
        }
        echo "Su número es: $i <br>";
    }
    echo "<br>";


    //Continuar o continue
    echo "<h2>Continuar codigo en bucle for</h2>";
    for ($i=0; $i <6 ; $i++) { 
        if ($i == 4) {
            continue; //Interrumpe o salta una iteración si se cumple la condición especificada y continua con la siguiente iteración
        }
        echo "Su número es: $i <br>";
    }


    echo "<h2>Romper codigo en bucle while</h2>";
    $j = 0;
    while ($j <= 6) {
        if ($i == 4) {
            break; // Se crea una condición y se indica en que valor quiero que rompa el codigo
        }
        echo "Su número es: $i <br>";
        $j++; //No olvidar en bucle while siempre aumentar la variable
    }
    echo "<br>";
    $k = 0;
    while ($k <= 6) {
        if ($i == 4) {
            continue; //Interrumpe o salta una iteración si se cumple la condición especificada y continua con la siguiente iteración
        }
        echo "Su número es: $i <br>";
        $k++; //No olvidar en bucle while siempre aumentar la variable
    }
    ?>
</body>

</html>