<?php

//CLASE QUE UTILIZARA PARA CREAR EL MODELO QUE INTERACTUA CON LA BD api_restful

class Productos extends Conectar
{
    //funcion para traer todos los registros de la tabla categoria

    public function getProductos()
    {

        //LLAMAR LA CADENA DE CONEXION A LA BD
        $conectar=parent::Conexion();

        $sql="select * from productos";

        $sql=$conectar->prepare($sql);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

    
    public function getProductos_id($Id)
    {

      
        $conectar=parent::Conexion();
        $sql="select * from productos where Id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$Id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
    public function postProductos($nombre, $pu, $cantidad)
    {

      
        $conectar=parent::Conexion();
        $sql="insert into productos values (null,?,?,?,1)";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$pu);
        $sql->bindValue(3,$cantidad);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
    public function putProductos($nombre, $pu, $cantidad, $Id)
    {

      
        $conectar=parent::Conexion();
        $sql="update productos set nombre=?,pu=? ,cantidad=? where id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$pu);
        $sql->bindValue(3,$cantidad);
        $sql->bindValue(4,$Id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
    public function deleteProductos($Id)
    {

      
        $conectar=parent::Conexion();
        $sql="delete from productos where Id=?";
        $sql=$conectar->prepare($sql);
        //UTILIZAR LOS PRAMETROS EN LA CONSULTA
        $sql->bindValue(1,$Id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }
}
?>