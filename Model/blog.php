<?php

/**
 * Description of usuario
 *
 * @author admin
 */
include "Model/connection.php";
class blog {
  public $owner;
  public $description;
  public $blog;
  private $id;

  /**
   * 
   * @param type $powner
   * @param type $pdescription
   * @param type $pblog
   * @param integer $pid
   */

  public function __construct($powner= "", $pdescription = "", $pblog = "", $pid = 0) {
    $this->owner = $powner;
    $this->description = $pdescription;
    $this->blog = $pblog;
    $this->id = $pid;
  }

  public function last5(){
    $rows = [];
    try{
      $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 5";

      $pdo = new conection();
      $pdo = $pdo->open();
      $result = $pdo->query($sql);

      foreach ($result->fetchAll() as $value){
        $rows [] = new blog($value['owner'], $value['description'], $value['blog'], $value['id']);
      }
    } catch (Exception $ex) {
      error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
    }
    return $rows; 
  }

  public function create(){
    try{
      $sql = "INSERT INTO blogs (owner, description, blog) VALUES"
        . " ('$this->owner', '$this->description', '$this->blog')";
      // print_r($sql);
      $pdo = new conection();
      $pdo = $pdo->open();
      $pdo->query($sql);
    } catch (PDOException $ex) {
      print_r("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
      error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
    }
    return false;
    
  }
  public function select($id = 0){
    $rows = [];
    try{
      $sql = "SELECT * FROM blogs";

      if($id){
        $sql .= " WHERE id='$id'";
      }
      $pdo = new conection();
      $pdo = $pdo->open();
      $result = $pdo->query($sql);
      
      // recorrer cada elemento en un un arreglo
      foreach ($result->fetchAll() as $value){
        $rows [] = new blog($value['owner'], $value['description'], $value['blog'], $value['id']);
      }
      
    } catch (Exception $ex) {
      error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
    }
    return $rows; 
  }
  
  public function delete($id = 0){
    $id =  ($id) ? $id : $this->id;
    $sql = "DELETE FROM blogs WHERE id = '$id'";
    // echo $sql;
    $pdo = new conection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }
  public function update(){
    $sql = "UPDATE blogs SET owner = '$this->owner', description = '$this->description',"
        . " blog='$this->blog' WHERE id='$this->id'";
    echo $sql;
    $pdo = new conection();
    $pdo = $pdo->open();
    return $pdo->query($sql);
  }
  
  public function get_attribute($name){
    try{
      return $this->$name;
    } catch (Exception $ex) {
      return NULL;
    }
  }
}
