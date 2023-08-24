<?php
    class Autor{
        private $id;
        private $nombre;
        private $apellido;
        private $direccion;
        private $telefono;
        private $email;
        private $ciudad;

        function __construct(){}
        
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }
?>