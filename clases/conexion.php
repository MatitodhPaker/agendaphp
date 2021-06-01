<?php
  class Conexion{
    public function conectar(){
      $servidor = "localhost";
      $usuario = "root";
      $password = "";
      $bd = "agendacontactos";

      $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
      return $conexion;
    }
  }
  /*-->para comprobrar que si se conecto 
  $obj = new Conexion();
  if ($obj->conectar()) {
    echo "Conectado con exito";
  }else{
    echo "fallo de conexion";
  } */
?>