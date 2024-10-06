<?php 
    class Proveedor {

        private $idProveedor;
        private $razonSocial;
        private $nombreComercial;
        private $telefono;
        private $correo;

        public function __construct($idProveedor, $conn) {
            $SQL = "SELECT * FROM proveedor WHERE idProveedor = $idProveedor;";
            $result = mysqli_query($conn, $SQL);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $this->idProveedor = $row['idProveedor'];
                $this->razonSocial = $row['razonSocial'];
                $this->nombreComercial = $row['nombreComercial'];
                $this->telefono = $row['telefono'];
                $this->correo = $row['correo'];
            }
        }

        // Getters
        public function getIdProveedor() {
            return $this->idProveedor;
        }

        public function getRazonSocial() {
            return $this->razonSocial;
        }

        public function getNombreComercial() {
            return $this->nombreComercial;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function getCorreo() {
            return $this->correo;
        }

        // Setters
        public function setIdProveedor($idProveedor) {
            $this->idProveedor = $idProveedor;
        }

        public function setRazonSocial($razonSocial) {
            $this->razonSocial = $razonSocial;
        }

        public function setNombreComercial($nombreComercial) {
            $this->nombreComercial = $nombreComercial;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        public function setCorreo($correo) {
            $this->correo = $correo;
        }
        
    }
?>
