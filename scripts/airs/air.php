<?php
require_once '../../scripts/conexion.php';
class air{
    
    private $id;
    public $level;
    const TABLA = 'airs';

    public function getId(){
        return $this->id;
    }

    public function getLevel(){
        return $this->level;
    }

    public function setId(){
        return $this -> id = $id;
    }

    public function setLevel($level){
        return $this -> level = $level;
    }

    public function __construct($level) {
        
        $this->level = $level;
    }

    public function guardar(){
        $conexion = new Conexion();
        {
            $consulta = $conexion -> prepare('INSERT INTO ' . self::TABLA . '(level) VALUES(:level)');
            $consulta -> bindParam(':level', $this -> level);
            $consulta -> execute();
            $this -> id = $conexion -> lastInsertId();
        }
        $conexion = null;
    }
    public static function all(){
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .'');
            $consulta->execute();
            $airs = $consulta->fetchAll();
            return $airs;
    }

    public static function find($id){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .' WHERE id =:id');
            $consulta -> bindParam(':id', $id);
            $consulta->execute();
            $airs = $consulta->fetchAll();
            return $airs[0];
    }

    public static function edit($id, $level){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('UPDATE `airs` SET `level`=:level WHERE id=:id');
            $consulta -> bindParam(':id', $id);
            $consulta -> bindParam(':level', $level);
            $consulta->execute();
            return $consulta;
    }

    public static function delete($id){
        $conexion = new Conexion();
            $consulta = $conexion->prepare('DELETE FROM `airs` WHERE id=:id');
            $consulta -> bindParam(':id', $id);
            $consulta->execute();
            return $consulta;
    }
}
    

?>