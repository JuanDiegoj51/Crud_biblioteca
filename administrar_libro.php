<?php
//incluye la clase libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');

$crud= new CrudLibro();
$libro= new Libro();

    //si el elemento a insertar no viene nulo llama al crud e insertar libro
    if (isset($_POST['insertar'])){
        $libro->setNombre($_POST['nombre']);
        //llama a la funcion insertar definida en el crud
        $crud->insertar($libro);
        header('Location: index.php');
        //si el elemento de la lista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
    }elseif (isset($_POST['actualizar'])) {
        $libro->setId($_POST['id']);
        $libro->setNombre($_POST['nombre']);
        $crud->actualizar($libro);
        header('Location: index.php');
        //si la variable accion enviada por el GET es == 'e' llama al crud y elimina un libro
    } elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: index.php');
        //si la variable accion enviada por GET es == 'a' envía a la pagina actualizar.php
    } elseif ($_GET['accion']=='a'){
        header('Location: actualizar.php');
    }
?>