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
        $valor = $statement->execute();

        if($valor){
            while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
               // $rows['data'][] = $result;
            }
            
            echo json_encode($rows);
        
        }else{
            echo 'error';
        }

        $statement->closeCursor();
        $conexion = null;
       
    }

    public function insertar($link)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $link['user_id'] = 1;

        $sql = "insert into links (title,url,description,user_id) values(:title, :url, :description, :user_id)";

        $statement = $conexion->prepare($sql);
        /*
        $statement->bindParam(':title', $title , PDO::PARAM_STR);
        $statement->bindParam(':url', $url);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':user_id', $user_id , PDO::PARAM_INT);

        $title = $link['title'];
        $url = $link['url'];
        $description = $link['description'];
        $user_id = 3;
        */
       
        
        if($statement){
            
            $statement->execute($link);
            echo json_encode($link);
        
        }else{
            echo 'error';
        }

    }


    public function editar($idx)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'select * from links where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        
        $id = $idx;

        $valor = $statement->execute();
       
        if ($valor) {
            while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
               // $rows['data'][] = $result;
            }
            echo json_encode($rows);

        } else {
            echo 'error';
        }

        $statement->closeCursor();
        $conexion = null;

    }

    public function update($link)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'update links set title=:title,url=:url,description=:description where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':url', $url);
        $statement->bindParam(':description', $description);

        $title = $link['title'];
        $url = $link['url'];
        $description = $link['description'];
        $id = $link['id'];
        $user_id = 3;



        if (!$statement) {

            return 'Error al crear el registro';

        } else {

            $statement->execute();

            return 'Registro actualizado en forma correcta';
        }

    }

    public function borrar($idx)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'select * from links where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $id = $idx;

        $valor = $statement->execute();

        if ($valor) {
            while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
               // $rows['data'][] = $result;
            }
            echo json_encode($rows);

        } else {
            echo 'error';
        }

        $statement->closeCursor();
        $conexion = null;

    }

    public function delete($idx)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = 'delete from links where id=:id';
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $id);
       
        $id = $idx;
        
        if (!$statement) {

            return 'Error al crear el registro';

        } else {

            $statement->execute();

            return 'Registro actualizado en forma correcta';
        }

    }

}


?>