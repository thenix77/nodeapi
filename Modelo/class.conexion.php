<?php

class Conexion
{
    private $user = 'root';
    private $pwd =  '1234nix';


    protected function get_conexion()
    {
        $server = "localhost";
        $db     = "tiendas";

        try {
            $conexion = new PDO(
                "mysql:host=$server; dbname=$db",
                $this->user,
                $this->pwd
            );
            return $conexion;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getDesconectar(){
       $this->get_conexion()->closeCursor();
        
    }
}
 