<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino.php</title>
</head>

<body>
    <?php

    // $a = 1;

    // while($a <= 10)
    //     {
    //         echo $a;
    //         $a++;
    //     }

    // echo '<table border="1" cellpadding="5" cellspacing="0">';
    // echo '<tr><th>X</th>';

    // for ($j=1;$j<=10;$j++){
    //     echo '<th>' . $j . '</th>';
    // }
    // echo '<tr>';

    // for ($i=1;$i<=10;$i++){
    //     echo '<tr><th>' . $i . '</th>'; 

    //     for($j=1;$j<=10;$j++){
    //         echo '<td>' . ($i * $j) . '</td>';
    //     }
    //     echo '</tr>';
    // }

    // echo '</table>'

    // function calcularVolumen($radio, $altura){
    //     $volumen = 3.1416 * ($radio * $radio) * $altura;
    //     return $volumen;
    // }

    // echo calcularVolumen(25, 50);

    // function sacarMayor($a, $b){
    //     if($a > $b){
    //         return $a;
    //     }else return $b;
    // }

    // echo sacarMayor(1, 10);


    // $Nombre = "";
    // $Apellido = "";


    // echo "Variable $Nombre: " . $_POST["Nombre"] . "<br>";

    // echo "Variable $Apellido: " . $_POST["Apellido"] . "<br>";

    // echo "Variable Sexo: " . ($_POST["Sexo"] ?? "Poco") . "<br>";
    // echo "Variable Estado: " . $_POST["Estado"] . "<br>";
    // echo "Variable INFO: " . ($_POST["info"] ?? "NO") . "<br>";
    // echo "Variable TERMINOS: " . ($_POST["terms"] ?? "NO") . "<br>";

    // class Empleado {
    //     private $nombre = "";
    //     private $edad = 0;

    //     function __construct($nombre, $sueldo){
    //         $this->nombre = $nombre;
    //         $this->sueldo = $sueldo;
    //     } 

    //     function pagaImpuesto(){
    //         echo $this->nombre;
    //         if($this->sueldo > 3000 ){
    //             echo " Paga impuestos, pobre tipo " . "<br>";
    //         }else echo " No paga impuestos " . "<br>" ;
    //     }

    // }

    // $e1 = new Empleado("Lucas", 120000);
    // $e2 = new Empleado("Tadeo", 1200);

    // $e1->pagaImpuesto();
    // $e2->pagaImpuesto();

    // class Persona
    // {
    //     private $nombre;
    //     private $edad;

    //     function setNombre($nombre)
    //     {
    //         $this->nombre = $nombre;
    //     }

    //     function setEdad($edad)
    //     {
    //         $this->edad = $edad;
    //     }

    //     function getEdad()
    //     {
    //         return $this->edad ?? 0;
    //     }

    //     function getNombre()
    //     {
    //         return $this->nombre;
    //     }

    //     function mostrar()
    //     {
    //         return $this->nombre . " || " . $this->edad;
    //     }
    // }

    // class Empleado extends Persona
    // {
    //     private $sueldo;


    //     function setSueldo($sueldo)
    //     {
    //         $this->sueldo = $sueldo;
    //     }

    //     function getSueldo()
    //     {
    //         return $this->sueldo ?? 0;
    //     }

    //     function mostrar()
    //     {
    //         return parent::mostrar() . " || "  . $this->sueldo;
    //     }
    // }



    // $e1 = new Empleado();
    // $e1->setSueldo(123456);
    // $e1->setNombre("GERMAN");
    // $e1->setEdad(18);

    // echo $e1->getSueldo();


    // echo "<br>";

    // $p1 = new Persona();
    // $p1->setNombre("Tade");
    // $p1->setEdad(10);
    // echo $p1->getNombre();
    // echo "<br>";
    // echo $p1->getEdad() . "<br>";

    // echo $p1->mostrar();
    // echo "<br>";
    // echo $e1->mostrar();

    // 

    class Tabla {
        private $celdas = array();

        function add($celda){
            $this->celdas[] = $celda; 
        }

        function mostrarCeldas(){
            foreach($celdas as $c){
                echo "Celda numero: " . $c->getNumero();
            }
        }
    }

    class Celda {
        private $nro;
        private $texto;

        function getNumero()
        {
            return $this->nro;
        }

        function getTexto()
            {
                return $this->texto;
            }

        function setNumero($n)
        {
            $this->nro = $n;
        }

        function setTexto($t)
        {
            $this->texto = $t;
        }
    }

        for ($size=1;$size<=10;$size++)
    {
        //continuar aca
    }



    ?>

</body>

</html>