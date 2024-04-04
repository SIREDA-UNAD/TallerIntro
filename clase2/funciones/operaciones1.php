<?php 
    namespace funciones;
    class Operaciones1{
        public $nombre="Angie Nayerli";
        public function __construct(){
            echo "<hr>Activando Constructor<hr>";
        }
        public function saludar(){
            echo "Hola desde la función Saludar...";
        }
        public static function caminar(){
            echo "Hola desde la función Caminar...";
        }
    }
?>