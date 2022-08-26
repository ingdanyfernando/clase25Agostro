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
                echo "<h2>DATOS RECIBIDOS DE PERSONA</h2> <br>";
                echo "<hr>";
                echo $this->nombre."  ".$this->apellidos."<br>";
                echo $this->telefono."  ".$this->municipio."  ".$this->sexo;

            }
        }


?>