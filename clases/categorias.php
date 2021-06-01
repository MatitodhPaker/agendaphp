<?php
  require_once "conexion.php";
  class Categorias extends Conexion{
    public function agregarCategoria($datos){
      $conexion=Conexion::conectar();
      $sql= "INSERT INTO t_categorias (nombre, descripcion) VALUES (?, ?)";
      $query=$conexion->prepare($sql);
      $query->bind_param('ss', $datos['nombre'], $datos['descripcion']);
      $respuesta= $query->execute();
      return $respuesta;
    }
  }
?>