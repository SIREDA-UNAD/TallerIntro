<?php 
  namespace App\generar;

  use Dompdf\Dompdf;

  class Generadorpdf{
    public $datos=[
        "nombres"=>["Humberto","Andres","Steven","Mario"],
        "cargos"=>["Docente","Gerente","Analista","Docente"]
    ];

    public $datoextraido=[];

    public function extraerdato($indice){
        $this->datoextraido[]=$this->datos["nombres"][$indice]; 
        $this->datoextraido[]=$this->datos["cargos"][$indice]; 
        return $this->datoextraido; 
        
    }

    public function contenido($arreglo){
        ob_start();
            include("../vistas/contenido.php");
        return $salida=ob_get_clean();
    }

    public function generarpdf($contenido,$documento){
        $objetopdf=new Dompdf();
        $objetopdf->loadHtml($contenido);
        $objetopdf->setPaper("letter","landscape");
        $objetopdf->render();
        $objetopdf->stream($documento);
    }

  }