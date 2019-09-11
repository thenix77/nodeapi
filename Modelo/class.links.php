<?php

require_once 'class.conexion.php';

class Consultas extends Conexion
{

    public function index()
    {
        $rows = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'select * from links';
        $statement = $conexion->prepare($sql);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;
    }

    public function insertar($link)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $link['user_id'] = 2;

        $sql = "insert into links (title,url,description,user_id) values(:title, :url, :description, :user_id)";
        
        $statement = $conexion->prepare($sql);
        
        if (!$statement) {

            return 'Error al crear el registro';

        } else {

            $statement->execute($link);

            return 'Registro creado en forma correcta';
        }

    }

    public function editar($id){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'select * from links where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id);


        $statement->execute();

        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }

        return $rows;

    }

    public function update($link)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'update links set title=:title,url=:url,description=:description where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id',    $id);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':url',   $url);
        $statement->bindParam(':description', $description);

        $title          = $link['title'];
        $url            = $link['url'];
        $description    = $link['description'];
        $id             = $link['id'];
        $user_id = 3;



        if (!$statement) {

            return 'Error al crear el registro';

        } else {

            $statement->execute();

            return 'Registro actualizado en forma correcta';
        }

    }

    public function delete($idx)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'delete from links where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id);

        $id = $idx;

        $statement->execute();

    }
}

?>