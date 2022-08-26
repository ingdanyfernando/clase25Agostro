<?php
        class Persona
        {
            private $apellidos;
            private $nombre;
            private $telefono;
            private $municipio;
            private $sexo;

            public function __construct($apel,$nomb,$tele,$muni,$sexo)
            {
              $this->apellidos = $apel;
              $this->nombre = $nomb;
              $this->telefono = $tele;
              $this->municipio = $muni;
              $this->sexo = $sexo; 
            }

            public function ListarPersona()
            {
                echo "DATOS RECIBIDOS DE PERSONA <br>";
                echo "<hr>"
            }
        }


?>