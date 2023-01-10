<?php
//crear la vista para mostrar todos los registros de la tabla 
//categoria
//consumir el APIl_Restful
$endpoint="http://127.0.0.1/PARCIAL2/api_restful/controllers/categoria.php?op=selectall";

$datos = json_decode(file_get_contents($endpoint), true);

echo"<br>";
echo"<a href = 'nuevoCategoria.php'>nuevo</a>";
echo"<center>";
echo"<h1>Resgistro de catgorias</h1>";
echo"<hr>";

echo"<table border=1>";
echo"<tr>";
echo"<th>No.</th>";
echo"<th>Nombre</th>";
echo"<th>observaciones</th>";
echo"<th>Status</th>";
echo"<th>acciones</th>";
echo"</tr>";

for ($i=0; $i<count($datos);$i++)
{
    echo"<tr>";
echo"<td>".$datos[$i]["cat_id"]."</td>";
echo"<td>".$datos[$i]["cat_nom"]."</td>";
echo"<td>".$datos[$i]["cat_obs"]."</td>";
echo"<td>".$datos[$i]["est"]."</td>";
echo"<td><a href = 'actualizarCategoria.php'>actualizar</a><br><a href = 'eliminarCategoria.php'>eliminar</a></td>";
echo"</tr>";

}


echo"</table>";
echo"<hr>";
echo"</center>";

?>