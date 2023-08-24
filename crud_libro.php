<?php
//incluye la clase Db
require_once('conexion.php');

    class CrudLibro{
        //constructor de la clase
        public function __construct(){}

        //metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($libro){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO libros values(null,:nombre)');
            $insert->bindValue('nombre',$libro->getNombre());
            $insert->execute();
        }

        //metodo para mostrar todos los libros
        public function mostrar(){
            $db=Db::conectar();
            $listaLibros=[];
            $select=$db->query('SELECT * FROM libros');

            foreach ($select->fetchAll() as $libro) {
                $myLibro = new Libro();
                $myLibro->setId($libro['id']);
                $myLibro->setNombre($libro['nombre']);
                $listaLibros[]=$myLibro;
            }
            return $listaLibros;
        }

        //metodo para eliminar un libro, recibe como parametro el id del libro
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }

        //metodo para buscar un libro, recibe como parametro el id del libro
        public function obtenerLibro($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $libro=$select->fetch();
            $myLibro = new Libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            return $myLibro;
        }

        //Metodo para actualizar un libro, recibe como parametro el libro
        public function actualizar($libro){
            $db=Db::conectar();
            $actualizar=$db->prepare('UPDATE libros SET nombre=:nombre WHERE ID=:id');
            $actualizar->bindValue('id',$libro->getId());
            $actualizar->bindValue('nombre',$libro->getNombre());
            $actualizar->execute();
        }
    }
?>