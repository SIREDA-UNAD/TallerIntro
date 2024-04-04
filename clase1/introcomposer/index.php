<?php
    //use App\controller\insertarController;

use App\controller\insertarController;



    include("vendor/autoload.php");
    saludo();
    carga2();

    //$objeto=new insertarController;

   // insertarController::saludar();
   echo insertarController::$nombre;
    
