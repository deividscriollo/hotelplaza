<?php      
    class MySQL{        
        private $conexion; private $total_consultas;
        public function MySQL(){ 
            //$host = "localhost";
            //$usuario = "root";
            //$pass = "root";
            //$db = "hotel_plaza";
            $host = "localhost";
            $usuario = "root";
            $pass = "root";
            $db = "hotel_plaza";
            if(!isset($this->conexion)){
                $this->conexion = (mysql_connect($host,$usuario,$pass))
                    or die(mysql_error());
                mysql_select_db($db,$this->conexion) or die(mysql_error());
            }
        }
        public function consulta($consulta){ 
            $this->total_consultas++; 
            $resultado = mysql_query($consulta,$this->conexion);
            if(!$resultado){ 
                echo 'MySQL Error: ' . mysql_error();
            exit;
            }
            return $resultado;
        }
        public function fetch_array($consulta){
            return mysql_fetch_array($consulta);
        }
        public function fetch_row($consulta){
            return mysql_fetch_row($consulta);
        }
        public function fetch_assoc($consulta){
            return mysql_fetch_assoc($consulta);
        }
        public function num_rows($consulta){
            return mysql_num_rows($consulta);
        }
        public function getTotalConsultas(){
            return $this->total_consultas; 
        }
    }        
?>