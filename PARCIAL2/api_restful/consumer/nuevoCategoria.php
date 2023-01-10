
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nueva categoria</title>
</head>
<body>
    <a href="clienteCategoria.php">administrar</a>
    <center>
    <h1>nueva categoria</h1>
    <hr>
    <?php
$endpoint="http://127.0.0.1/PARCIAL2/api_restful/controllers/categoria.php?op=insert";

$datos = json_decode(file_get_contents($endpoint), true);
for ($i=0; $i<count($datos);$i++)
{

?>
    <table border=1>
        <form action="clienteCategoria.php" method="post">
            <tr>
            
                <td><label for="cat_nom">Nombre</label></td>
                <td><input <?php $datos[$i]["cat_nom"]?>type="text" name ="cat_nom" placeholder="Nombre de categoria" required></td>
            </tr>
            <tr>
                <td><label for="cat_nom">Observaciones</label></td>
                <td><input <?php $datos[$i]["cat_obs"]?> type="text" name ="cat_obs" placeholder="observaciones de catgoria" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" value="Enviar"></td>
                <td><input type="reset" name="borrar" value="Borrar"></td>
            </tr>
        </form>
    </table>
    <?php
}
    ?>
    </center>
</body>
</html>