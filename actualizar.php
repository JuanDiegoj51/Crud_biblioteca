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
        <link rel="stylesheet" href="src/style-i.css">
    </head>
    <body>
        <header>
        Actualizar nombre de Libro
        </header>
        <div class="content clearfix">
            <form action='administrar_libro.php' method='post'>
                <table>
                    <tr>
                        <td colspan="2"><h2>Rellene los campos</h2></td>
                    </tr>
                    <tr>
                        <input type="hidden" name='id' value='<?php echo $libro->getId()?>'>
                        <td>Nombre Libro:</td>
                        <td> <input type="text" name='nombre' value='<?php echo $libro->getNombre()?>' required></td>
                    </tr>
                    <input type="hidden" name='actualizar' value='actualizar'>
                </table>
                <div class="boton-container">
                        <input type="submit" class="btn-guardar" value="Guardar" onclick="return confirm('¿Estás seguro de que deseas actualizar los datos?')">
                        <a type="submit" class="btn-volver" href="index.php">Volver</a>
                </div>
            </form>
        </div>
        <footer>
            Administrador libro 2023
        </footer>
    </body>
</html>