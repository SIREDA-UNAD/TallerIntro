<?php 
    /*
        //echo "Hola Mundo!!!!";
        $miarreglo=[2,2,2,2,5,8,5];
        //var_dump($miarreglo);
        foreach ($miarreglo as $valor) {
            echo $valor."\n";
        }
    */
    use const miespacio1\PI;
    use function miespacio1\saludo;
    use miespacio1\animal;

    include("carga1.php");
    include("carga2.php");
    echo "\n".PI;
    saludo();
    $animal1=new animal();

?>