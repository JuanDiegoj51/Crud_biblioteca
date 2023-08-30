<?php
//incluye la clase libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');

$crud=new CrudLibro();
$libro=new libro();
//obtiene todos los libros con el metodo mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>

<html>
    <head>
        <title>Mostrar Libros</title>
        <link href="src/style-s.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            Listado de datos generales de libros
        </header>
        <div class="content clearfix">
            <table border=1>
                <head>
                    <td>Nombre del libro</td>
                    <td>ACTUALIZAR</td>
                    <td>ELIMINAR</td>
                </head>
                <body>
                    <?php foreach ($listaLibros as $libro) {?>
                        <tr>
                            <td><?php echo $libro->getNombre() ?> </td>
                            <td><a class="btn-actualizar" href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
                            <td><a class="btn-eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar los datos?')" href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
                        </tr>
                        <?php } ?> 
                </body>
            </table>
            <a href="index.php" class="btn-volver">Volver</a>
        </div>
        <footer>            
        Administrador libro 2023
        </footer>
    </body>
    
</html>