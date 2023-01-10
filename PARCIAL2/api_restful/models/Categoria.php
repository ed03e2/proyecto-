<?php

//CLASE QUE UTILIZARA PARA CREAR EL MODELO QUE INTERACTUA CON LA BD api_restful

class Categoria extends Conectar
{
    //funcion para traer todos los registros de la tabla categoria

    public function getCategoria()
    {

        //LLAMAR LA CADENA DE CONEXION A LA BD
        $conectar=parent::Conexion();

        $sql="select * from categoria where est=1";

        $sql=$conectar->prepare($sql);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    
    public function getCategoria_id($cat_id)
    {

      
        $conectar=parent::Conexion();
        $sql="select * from categoria where est=1 and cat_id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }



//Funcion para agregar un registro en la tabla categoria
    public function postCategoria($cat_nom,$cat_obs)
    {

    
        $conectar=parent::Conexion();
        $sql="insert into categoria values (null,?,?,1)";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }


    //Funcion para actualizar un registro en la tabla categoria
    public function putCategoria($cat_nom,$cat_obs,$cat_id)
    {

    
        $conectar=parent::Conexion();
        $sql="update categoria set cat_nom=?,cat_obs=? where cat_id=?";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->bindValue(3,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    //Funcion para eliminar un registro en la tabla categoria
    public function deleteCategoria($cat_id)
    {

    
        $conectar=parent::Conexion();
        $sql="delete from categoria where cat_id=?";
        $sql=$conectar->prepare($sql);
        //Para indicar en el string del SQL el parametro que utilizara
        $sql->bindValue(1,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }


}
?>