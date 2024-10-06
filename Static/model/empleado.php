<?php 
    class Empleado {

        private $noEmpleado;
        private $nombre;
        private $apellido;
        private $sexo;
        private $fechaNac;
        private $fechaIngreso;
        private $sueldo;
        private $cargo;
        private $telefono;
        private $direccion;
        private $urlFotoPerfil;

        public function __construct($noEmpleado, $conn){
            $SQL = "select * from empleado where noEmpleado=$noEmpleado;";
            $result = mysqli_query($conn, $SQL);
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_array($result);
                $this->nombre = $row['nombre'];  
                $this->apellido = $row['apellido'];
                $this->sexo = $row['sexo'];
                $this->fechaNac = $row['fechaNac'];
                $this->fechaIngreso = $row['fechaIngreso'];
                $this->sueldo = $row['sueldo'];
                $this->cargo = $row['cargo'];
                $this->telefono = $row['telefono'];
                $this->direccion = $row['direccion'];
                $this->urlFotoPerfil = $row['urlFotoPerfil'];
            }
        }

        // Getters
        public function getNoEmpleado() {
            return $this->noEmpleado;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function getFechaNac() {
            return $this->fechaNac;
        }

        public function getFechaIngreso() {
            return $this->fechaIngreso;
        }

        public function getSueldo() {
            return $this->sueldo;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function getUrlFotoPerfil() {
            return $this->urlFotoPerfil;
        }

        // Setters
        public function setNoEmpleado($noEmpleado) {
            $this->noEmpleado = $noEmpleado;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function setFechaNac($fechaNac) {
            $this->fechaNac = $fechaNac;
        }

        public function setFechaIngreso($fechaIngreso) {
            $this->fechaIngreso = $fechaIngreso;
        }

        public function setSueldo($sueldo) {
            $this->sueldo = $sueldo;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        public function setUrlFotoPerfil($urlFotoPerfil) {
            $this->urlFotoPerfil = $urlFotoPerfil;
        }

    }

?>
