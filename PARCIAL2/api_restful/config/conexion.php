<?php
//Archivo de conexion a la bd de mysql api_restful

class Conectar
{
    protected $dbh;

    protected function Conexion()
    {
        try
        {
            $conectar=$this->dbh=new PDO("mysql:local=localhost;
            dbname=api_restful","root","");
            return $conectar;
        }
        catch(Exception $e)
        {
            print "Error en la bd".$e->getMessage()."</br>";
            die("verifica por favor");
        }
    }
}
?>