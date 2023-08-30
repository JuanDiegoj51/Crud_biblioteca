<?php
//incluye la clase autor y crudautor
require_once('crud_autor.php');
require_once('autor.php');
$crud= new CrudAutor();
$autor= new Autor();
//busca el libro utilizando el id, que es enviado al GET desde la vista mostrar.php
$autor=$crud->obtenerAutor($_GET['id']); 
?>

<html>
    <head>
        <title>Actualizar Autor</title>
        <link rel="stylesheet" href="src/style-i.css">
    </head>
    <body>
        <header>
            Actualizar datos de autor
        </header>
        <div class="content clearfix">
            <form action='administrar_autor.php' method='post'>
                <table>
                    <tr>
                        <input type="hidden" name='id' value='<?php echo $autor->getId()?>'>
                        <td>Nombre:</td>
                        <td> <input type="text" name='nombre' value='<?php echo $autor->getNombre()?>'></td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td> <input type="text" name='apellido' value='<?php echo $autor->getApellido()?>'></td>
                    </tr>
                    <tr>
                        <td>Direccion:</td>
                        <td> <input type="text" name='direccion' value='<?php echo $autor->getDireccion()?>'></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td> <input type="text" name='telefono' value='<?php echo $autor->getTelefono()?>'></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td> <input type="text" name='email' value='<?php echo $autor->getEmail()?>'></td>
                    </tr>
                    <tr>
                        <td>Ciudad:</td>
                        <td> <input type="text" name='ciudad' value='<?php echo $autor->getCiudad()?>'></td>
                    </tr>
                    <input type="hidden" name='actualizar' value='actualizar'>
                </table>
                <input type="submit" class="btn-guardar" value='Guardar' onclick="return confirm('¿Estás seguro de que deseas actualizar los datos?')">
                <a type="submit" class="btn-volver" href="index.php">Volver</a>
            </form>
        </div>
        <footer>            
            Administrador libro 2023
        </footer>
    </body>
</html>