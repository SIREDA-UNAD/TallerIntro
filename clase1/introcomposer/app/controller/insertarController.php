<?php 
    namespace App\controller;

    class insertarController{
        public static $nombre="Humberto";
        public function __construct(){
            echo "Activando constructor";
        }

        public static function saludar(){
            echo "<br><br>Saludando......";
        }
    }

    
?>