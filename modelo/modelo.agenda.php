<?php 
  
   require 'modelo.conexion.php';
  
  class Agenda{

    Private $nombre;
    Private $domicilio;
    Private $telefono;
    Private $comentarios;
    Private $id;

  public function __construct($nom,$dom,$tel,$com,$id=''){
  	   
      $this->nombre =$nom;
      $this->domicilio =$dom;
      $this->telefono =$tel;
      $this->comentarios =$com;
      $this->id =$id;
  }   

  static function ningundato(){
  	return new self('','','','','');
  }

  static function soloId($id){
  	return new self('','','','',$id);
  }

  public function insert(){

      $db = new Conexion();

      $sql = "INSERT INTO `contactos`(`nombre`, `domicilio`, `telefono`, `comentarios`) VALUES ('$this->nombre', '$this->domicilio','$this->telefono','$this->comentarios')";

       $db->query($sql) ? header("location: index.php?res=insertado"):header("location:index.php?res=error");

     }

     public function update(){

      $db = new Conexion();

      $sql = "UPDATE `contactos` SET `nombre`='$this->nombre',`domicilio`='$this->domicilio',`telefono`='$this->telefono',`comentarios` ='$this->comentarios' WHERE `id` = $this->id";

      $db->query($sql);

     }
     
      public function delete(){

          $db = new Conexion();
          $sql= "DELETE FROM `contactos` WHERE `id` = $this->id";
          $db->query($sql) ? header("location: index.php?res=eliminado"):header("location:index.php?res=error");
      
      }

     public function selectId(){
   	    $db = new Conexion();

   	    $sql = "SELECT * FROM `contactos` WHERE `id` = $this->id";
   	    $result = $db->query($sql);

   	    return $result;

     } 

   public function select(){
   	    $db = new Conexion();

   	    $sql = "SELECT * FROM contactos";
   	    $result = $db->query($sql);
   	    return $result;
    } 
             
  }

