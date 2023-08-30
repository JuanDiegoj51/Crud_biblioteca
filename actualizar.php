<?php
//incluye la clase libro y crudlibro
require_once('crud_libro.php');
require_once('libro.php');
$crud= new CrudLibro();
$libro=new Libro();
//busca el libro utilizando el id, que es enviado al GET desde la vista mostrar.php
$libro=$crud->obtenerLibro($_GET['id']); 
?>

<html>
    <head>
        <title>Actualizar libro</title>
    </head>
    <body>
        <header>
        Actualizar Libro
        </header>
        <form action='administrar_libro.php' method='post'>
            <table>
                <tr>
                    <input type="hidden" name='id' value='<?php echo $libro->getId()?>'>
                    <td>Nombre Libro:</td>
                    <td> <input type="text" name='nombre' value='<?php echo $libro->getNombre()?>' required></td>
                </tr>
                <input type="hidden" name='actualizar' value='actualizar'>
            </table>
            <input type="submit" value='Guardar'>
            <a href="index.php">Volver</a>
        </form>
    </body>
</html>