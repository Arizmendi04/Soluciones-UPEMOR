<?php include "Static/connect/db.php" ?>

<?php 
    class Empleado{

        private $nombre;
        private $numero;

        public function __construct($id){
            $conn = new mysqli("","","","");
            
        }

        public function getNom(){
            return $this->nombre;
        }

    }

?>