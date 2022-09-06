<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bcekb4hpktq02ortvhcy-mysql.services.clever-cloud.com","uzktm3htetksfjtt","8NqdlkDeMLkSdqGYf9N8","bcekb4hpktq02ortvhcy");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }