<?php 
    namespace App\controller;
    class InsertarController{
        public $nombre;
        public $edad;
        public $correo;
        public $fecha;
      
        public function __construct(){
            echo "Hola desde insertar Controller...";
        }

        public function saludar(){
            echo "hola desde el metodo saludar";
        }

      
    }