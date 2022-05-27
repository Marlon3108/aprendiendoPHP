<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Two</title>
</head>
<body>
    <?php
        /*las clases y los objetos estan relacionados a la POO 
        La clase es la platilla de donde saldrán los objetos, estos heredan
        todas las cualidades de dicha clase. Un objeto es una instancia de una clase*/
        echo "<h2>Clases y Objetos</h2>";
        class Carros{
            public $color;
            public $modelo;
            
            public function __construct($color, $modelo) {//PHP llamará automáticamente a esta función cuando cree un objeto de una clase.
                $this->color = $color; //Se usa this para referirse a la variable de esta función y no confundirla con la que está fuera
                $this->modelo = $modelo;
            }
            public function Mensaje()
            {
                return "Mi carro es un ". $this->modelo. " color ". $this->color; 
            }
        }

        $miCarro = new Carros("Negro", "Audi"); //Cada instancia del objeto puede tener datos diferentes
        echo $miCarro -> Mensaje(); //-> se usa para llamar la función Mensaje cuando quiero mostrar algo
        echo "<br>";
        $miCarro = new Carros("Azul", "Mini-Cooper");
        echo $miCarro -> Mensaje();
    ?>
</body>
</html>
