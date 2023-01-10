<?php
//crear la vista para mostrar todos los registros de la tabla 
//categoria
//consumir el APIl_Restful
$endpoint="http://127.0.0.1/PARCIAL2/api_restful/controllers/productos.php?op=selectall";

$datos = json_decode(file_get_contents($endpoint), true);

echo"<br>";
echo"<a>nuevo</a>";
echo"<center>";
echo"<h1>Resgistro de productos</h1>";
echo"<hr>";

echo"<table border=1>";
echo"<tr>";
echo"<th>No.</th>";
echo"<th>Nombre</th>";
echo"<th>Pu</th>";
echo"<th>cantidad</th>";
echo"<th>acciones</th>";
echo"</tr>";

for ($i=0; $i<count($datos);$i++)
{
    echo"<tr>";
echo"<td>".$datos[$i]["id"]."</td>";
echo"<td>".$datos[$i]["nombre"]."</td>";
echo"<td>".$datos[$i]["pu"]."</td>";
echo"<td>".$datos[$i]["cantidad"]."</td>";
echo"<td><a href = 'actualizar.php'>actualizar</a><br><a href = 'eliminar.php'>eliminar</a></td>";
echo"</tr>";

}


echo"</table>";
echo"<hr>";
echo"</center>";

?>