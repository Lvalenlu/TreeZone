<?php
require_once 'conexion.php';
class user{
    
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $password;
    private $confirmPassword;
    const TABLA = 'users';

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getConfirmPassword(){
        return $this->confirmPassword;
    }

    public function setId(){
        return $this -> id = $id;
    }

    public function setNombre(){
        return $this -> name = $name;
    }

    public function setLastName(){
        return $this -> lastName = $lastName;
    }

    public function setPassword(){
        return $this->password;
    }

    public function setConfirmPassword(){
        return $this->confirmPassword;
    }

    public function __construct($name, $lastName, $email, $password, $id = null) {
        
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
    }

    public function guardar(){
        $conexion = new Conexion();
        {
            $consulta = $conexion -> prepare('INSERT INTO ' . self::TABLA . '(name, lastName, email, password) VALUES(:name, :lastName, :email, :password)');
            $consulta -> bindParam(':name', $this -> name);
            $consulta -> bindParam(':lastName', $this -> lastName);
            $consulta -> bindParam(':email', $this -> email);
            $consulta -> bindParam(':password', $this -> password);
            $consulta -> execute();
            $this -> id = $conexion -> lastInsertId();
        }
        $conexion = null;
    }
    public function recuperarTodos(){
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .'');
            $consulta->execute();
            $registros = $consulta->fetchAll();  
            return $registros;
        
    }

    public static function verificarInicioSesion($email, $password){
        $conexion = new Conexion();
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        if ($stmt != null) {
                while ($fila= $stmt->fetchAll()) {
                    $usuario[] =$fila;
                }
                return $usuario[0];
        }else{
            return false;
        }
    }
}
    

?>