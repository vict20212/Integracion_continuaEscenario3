<?php

include_once "../modelo/productoModelo.php";

class productoControl{
 
    public $idProducto;
    public $codigo;
    public $nombre;
    public $precio;
    public $cantidadStock;
    public $descripcion;
    public $imagen;
    public $imagenAnterior;
    public $estado;
    public $opcion;
    public $idSubcategoria;


    public function ctrlInsertar(){

        $objRespuesta=productoModelo::mdlInsertarProducto($this->imagen);

        echo json_encode($objRespuesta);


    }

    public function ctrlCargarTabla(){
        $objRespuesta= productoModelo::mdlCargarTabla();
        echo json_encode($objRespuesta);

    }

    public function ctrlEliminar(){

        $objEliminar = productoModelo::mdlEliminar($this->idProducto,$this->imagen);
        echo json_encode($objEliminar);
    }

    public function ctlModificar(){

        $objModificar= productoModelo::mdlModificar($this->idProducto,$this->codigo,$this->nombre,$this->precio,$this->cantidadStock,$this->descripcion,$this->imagen,$this->$estado,$this->opcion,$this->imagenAnterior);
        echo json_encode($objModificar);


    }


}

if (isset($_POST["codigo"]) ) {
   $objInsertar = new productoControl();
  
   $objInsertar->imagen=$_FILES["imagen"];
   $objInsertar->ctrlInsertar();
}

if(isset($_POST["cargar"])=="ok"){
    $objCargar= new productoControl();
    $objCargar->ctrlCargarTabla();


} 

if(isset($_POST["idEliminar"]) && isset($_POST["imagenEliminar"])){
 $objEliminar = new productoControl();
 $objEliminar->idProducto=$_POST["idEliminar"];
 $objEliminar->imagen=$_POST["imagenEliminar"];

 $objEliminar->ctrlEliminar();

}

if (isset($_POST["anteriorImagen"])) {

    $objModificar = new productoControl();
    $objModificar->codigo=$_POST["codigoMod"];
    $objModificar->nombre=$_POST["nombreMod"];
    $objModificar->precio=$_POST["precioMod"];
    $objModificar->cantidadStock=$_POST["cantidadStockMod"];
    $objModificar->descripcion=$_POST["descripcionMod"];
    $objModificar->imagen=$_POST["anteriorImagen"];
    $objModificar->estado=$_POST["estadoMod"];
    $objModificar->idProducto=$_POST["idModificar"];
    $objModificar->opcion="1";
    $objModificar->ctlModificar();

   
}
else if (isset($_FILES["imagenMod"])) {
    $objModificar = new productoControl();
    $objModificar->codigo=$_POST["codigoMod"];
    $objModificar->nombre=$_POST["nombreMod"];
    $objModificar->precio=$_POST["precioMod"];
    $objModificar->cantidadStock=$_POST["cantidadStockMod"];
    $objModificar->descripcion=$_POST["descripcionMod"];
    $objModificar->imagen=$_FILES["imagenMod"];
    $objModificar->estado=$_POST["estadoMod"];
    $objModificar->idProducto=$_POST["idModificar"];
    $objModificar->imagenAnterior=$_POST["imagenAnteriorMod"];
    $objModificar->opcion="2";
    $objModificar->ctlModificar();





}
