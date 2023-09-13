<?php
require_once '../../scripts/conexion.php';
class sector{
    
    private $id;
    private $name;
    private $city;
    private $air;
    const TABLA = 'sectors';

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getCity(){
        return $this->city;
    }

    public function getAir(){
        return $this->air;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setCity($city){
        return $this->city = $city;
    }

    public function setAir($air){
        return $this->air = $air;
    }

    public function __construct($name, $city, $air) {
        $this->name = $name;
        $this->city = $city;
        $this->air = $air;
    }

    public function guardar(){
        $conexion = new Conexion();
        {
            $consulta = $conexion -> prepare('INSERT INTO ' . self::TABLA . '(name,city,id_air) VALUES(:name,:city,:air,)');
            $consulta -> bindParam(':name', $this -> name);
            $consulta -> bindParam(':city', $this -> city);
            $consulta -> bindParam(':air', $this -> air);
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