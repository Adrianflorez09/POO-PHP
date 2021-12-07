<?php
class Conexion
{
    public $con;
    public function conectar()
    {
        $this->con = mysqli_connect("localhost", "root", "", "colegio_pru");
    }
}
