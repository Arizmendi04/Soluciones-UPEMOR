<?php 
    class Cliente {

        private $noCliente;
        private $clienteRFC;
        private $nombreC;
        private $razonSocial;
        private $email;
        private $telefonoC;
        private $calle;
        private $colonia;
        private $localidad;
        private $municipio;
        private $estado;
        private $clienteCP;
        private $diasCredito;
        private $montoCredito;
        private $urlFotoPerfil;

        public function __construct($noCliente, $conn) {
            $SQL = "SELECT * FROM cliente WHERE noCliente = $noCliente;";
            $result = mysqli_query($conn, $SQL);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $this->noCliente = $row['noCliente'];
                $this->clienteRFC = $row['clienteRFC'];
                $this->nombreC = $row['nombreC'];
                $this->razonSocial = $row['razonSocial'];
                $this->email = $row['email'];
                $this->telefonoC = $row['telefonoC'];
                $this->calle = $row['calle'];
                $this->colonia = $row['colonia'];
                $this->localidad = $row['localidad'];
                $this->municipio = $row['municipio'];
                $this->estado = $row['estado'];
                $this->clienteCP = $row['clienteCP'];
                $this->diasCredito = $row['diasCredito'];
                $this->montoCredito = $row['montoCredito'];
                $this->urlFotoPerfil = $row['urlFotoPerfil'];
            }
        }

        // Getters
        public function getNoCliente() {
            return $this->noCliente;
        }

        public function getClienteRFC() {
            return $this->clienteRFC;
        }

        public function getNombreC() {
            return $this->nombreC;
        }

        public function getRazonSocial() {
            return $this->razonSocial;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getTelefonoC() {
            return $this->telefonoC;
        }

        public function getCalle() {
            return $this->calle;
        }

        public function getColonia() {
            return $this->colonia;
        }

        public function getLocalidad() {
            return $this->localidad;
        }

        public function getMunicipio() {
            return $this->municipio;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function getClienteCP() {
            return $this->clienteCP;
        }

        public function getDiasCredito() {
            return $this->diasCredito;
        }

        public function getMontoCredito() {
            return $this->montoCredito;
        }

        public function getUrlFotoPerfil() {
            return $this->urlFotoPerfil;
        }

        // Setters
        public function setNoCliente($noCliente) {
            $this->noCliente = $noCliente;
        }

        public function setClienteRFC($clienteRFC) {
            $this->clienteRFC = $clienteRFC;
        }

        public function setNombreC($nombreC) {
            $this->nombreC = $nombreC;
        }

        public function setRazonSocial($razonSocial) {
            $this->razonSocial = $razonSocial;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setTelefonoC($telefonoC) {
            $this->telefonoC = $telefonoC;
        }

        public function setCalle($calle) {
            $this->calle = $calle;
        }

        public function setColonia($colonia) {
            $this->colonia = $colonia;
        }

        public function setLocalidad($localidad) {
            $this->localidad = $localidad;
        }

        public function setMunicipio($municipio) {
            $this->municipio = $municipio;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

        public function setClienteCP($clienteCP) {
            $this->clienteCP = $clienteCP;
        }

        public function setDiasCredito($diasCredito) {
            $this->diasCredito = $diasCredito;
        }

        public function setMontoCredito($montoCredito) {
            $this->montoCredito = $montoCredito;
        }

        public function setUrlFotoPerfil($urlFotoPerfil) {
            $this->urlFotoPerfil = $urlFotoPerfil;
        }
    }
?>
