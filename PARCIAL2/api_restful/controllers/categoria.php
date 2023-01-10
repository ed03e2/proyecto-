<?php

//CREAR EL CONTROLADOR QUE SE COMUNIQUE CON EL MODELO PARA ACCEDER A LO METODOS DEL MODELO ATRAVES DE LOS END POINT

//AGREGAR LA SIG. LINEA PARA QUE LA APLI. SEPE QUE SE UTILIZARAN JSON
header('Content-Type:application/json');

require_once("../config/conexion.php");
require_once("../models/Categoria.php");

//CREAR UN OBJETO DE TIPO CATEGORIA PARA INSTANCIAR LOS METODOS DEL MODELO

$categoria=new Categoria();

//RECIBIR LA INFORMACIÓN EN JSON QUE HAY QUE PREPARAR EN EL OBJETO BODY

$body=json_decode(file_get_contents("php://input"),true);

//CREAR UN SWITCHPARA NAVEGAR ENTRE LOS DIFERENTES SERVICIOS QUE OFRECE EL API ATRAVES DE LOS END POINT
switch($_GET["op"])
    {
        //CASE ES PARA REGRRESAR TODOS LOS REGISTROS DE CATEGORIA
         case "selectall": $datos=$categoria->getCategoria();
                            echo json_encode($datos);
                            break;

        //CASE ES PARA REGRRESAR UN REGISTRO DE CATEGORIA
         case "selectid": $datos=$categoria->getCategoria_id($body["cat_id"]);
                            echo json_encode($datos);
                            break;

         //CASE ES PARA INSERTAR UN REGISTRO DE CATEGORIA
         case "insert": $datos=$categoria->postCategoria($body["cat_nom"],$body["cat_obs"]);
                            echo json_encode("Registro con Exito");
                            break;

        //CASE ES PARA Actualizar UN REGISTRO DE CATEGORIA
         case "update": $datos=$categoria->putCategoria($body["cat_nom"],$body["cat_obs"],$body["cat_id"]);
                            echo json_encode("Registro con Exito");
                            break;

        //CASE ES PARA Actualizar UN REGISTRO DE CATEGORIA
        case "delete": $datos=$categoria->deleteCategoria($body["cat_id"]);
                            echo json_encode("Registro con Exito");
                            break;
    }

?>