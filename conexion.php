<?php
    class Conexion{
        public function conectar(){
            try{
                return mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'heroes'
                );
            }catch(\Throwable $th){
                return $th->getMessage();
            }
        }
    }
?>