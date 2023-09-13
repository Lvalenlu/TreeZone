<?php
require_once '../../scripts/conexion.php';
class locality{
    
    private $id;
    public $locality;
    const TABLA = 'locality';

    public function getId(){
        return $this->id;
    }

    public function getlocality(){
        return $this->locality;
    }

    public function setId($id){
        return $this -> id = $id;
    }

    public function setlocality($locality){
        return $this -> locality = $locality;
    }

    public function __construct($locality) {
        
        $this->locality = $locality;
    }

    public function guardar(){
        $conexion = new Conexion();
        {
            $consulta = $conexion -> prepare('INSERT INTO ' . self::TABLA . '(locality) VALUES(:locality)');
            $consulta -> bindParam(':locality', $this -> locality);
            $consulta -> execute();
            $this -> id = $conexion -> lastInsertId();
        }
        $conexion = null;
    }
    public static function all(){
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .'');
            $consulta->execute();
            $locality = $consulta->fetchAll();
            return $locality;
    }

    public static function find($id){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .' WHERE id =:id');
            $consulta -> bindParam(':id', $id);
            $consulta->execute();
            $locality = $consulta->fetchAll();
            return $locality[0];
    }

    public static function edit($id, $locality){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('UPDATE `locality` SET `locality`=:locality WHERE id=:id');
            $consulta -> bindParam(':id', $id);
            $consulta -> bindParam(':locality', $locality);
            $consulta->execute();
            return $consulta;
    }

    public static function delete($id){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('DELETE FROM `locality` WHERE id=:id');
            $consulta -> bindParam(':id', $id);
            $consulta->execute();
            return $consulta;
    }
}
    

?>