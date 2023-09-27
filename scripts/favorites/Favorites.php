<?php
include_once '../conexion.php';

class Favorites{
    public $usuario;
    public $sector;
    const TABLA = 'favorites';

    public function __construct($usuario, $sector) {
        $this->usuario = $usuario;
        $this->sector = $sector;
    }

    public static function all($id){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT favorites.*, sectors.name, sectors.amount_trees, airs.level FROM `favorites` INNER JOIN sectors ON sectors.id = favorites.id_sectors INNER JOIN airs ON airs.id = sectors.id_airs WHERE favorites.id_users=$id;");
        $consulta->execute();
        $locality = $consulta->fetchAll();
        return $locality;
}


public static function create($sector, $user){
    $conexion = new Conexion();
    $consulta = $conexion->prepare("INSERT INTO `favorites`(`id_users`, `id_sectors`) VALUES ('$user','$sector')");
    $consulta->execute();
    return $consulta;
}

public static function delete($id){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("DELETE FROM `favorites` WHERE id=$id");
        $consulta->execute();
        return $consulta;
}
}
?>