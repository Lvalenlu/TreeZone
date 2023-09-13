<?php
require_once 'conexion.php';
class user{
    
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $passwd;
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

    public function getPasswd(){
        return $this->passwd;
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
        return $this->passwd;
    }

    public function setConfirmPassword(){
        return $this->confirmPassword;
    }

    public function __construct($name, $lastName, $email, $passwd, $id = null) {
        
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->passwd = $passwd;
        $this->id = $id;
    }

    public function guardar(){
        $conexion = new Conexion();
        {
            $consulta = $conexion -> prepare('INSERT INTO ' . self::TABLA . '(name, lastName, email, passwd) VALUES(:name, :lastName, :email, :passwd)');
            $consulta -> bindParam(':name', $this -> name);
            $consulta -> bindParam(':lastName', $this -> lastName);
            $consulta -> bindParam(':email', $this -> email);
            $consulta -> bindParam(':passwd', $this -> passwd);
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
}
    

?>