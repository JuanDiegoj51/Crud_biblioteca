<?php
//incluye la clase libro y CrudLibro
require_once('crud_autor.php');
require_once('autor.php');

$crud=new CrudAutor();
$autor=new Autor();
//obtiene todos los libros con el metodo mostrar de la clase crud
$listaAutor=$crud->mostrar();
?>

<html>
    <head>
        <title>Mostrar Libros</title>
    </head>
    <body>
        <table border=1>
            <head>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Ciudad</td>
                <td>actualizar</td>
                <td>Eliminar</td>
            </head>
            <body>
                <?php foreach ($listaAutor as $autor) {?>
                    <tr>
                        <td><?php echo $autor->getId() ?> </td>
                        <td><?php echo $autor->getNombre() ?> </td>
                        <td><?php echo $autor->getApellido() ?> </td>
                        <td><?php echo $autor->getDireccion() ?> </td>
                        <td><?php echo $autor->getTelefono() ?> </td>
                        <td><?php echo $autor->getEmail() ?> </td>
                        <td><?php echo $autor->getCiudad() ?> </td>
                        <td><a href="actualizar_autor.php?id=<?php echo $autor->getId()?>&accion=a">Actualizar</a></td>
                        <td><a onclick="return confirm('¿Estás seguro de que deseas eliminar los datos?')" href="administrar_autor.php?id=<?php echo $autor->getId()?>&accion=e">Eliminar </a></td>
                    </tr>
                    <?php } ?> 
            </body>
        </table>
        <a href="index.php">Volver</a>
    </body>
</html>