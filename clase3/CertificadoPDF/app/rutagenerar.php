<?php 
    use App\generar\Generadorpdf;
    function generar($indice){
        $miobjeto=new Generadorpdf();
        $datos=$miobjeto->extraerdato($indice);
        $contenido=$miobjeto->contenido($datos);
        $miobjeto->generarpdf($contenido,"documento1");
    }
