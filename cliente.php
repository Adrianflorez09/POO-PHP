<?php
include_once "conexion.php";
class Cliente extends Conexion
{

    public $id_estudiante;
    public $Nombre_estudiante;
    public $Apellido_estud;
    public $direccion_est;
    public $telefono_est;
    public $acudiente;
    public $grupo_est;

    //CRUD

    //CREATE
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO estudiantes_col(id_estudiante,Nombre_estudiante,Apellido_estud,direccion_est,telefono_est,acudiente,grupo_est) VALUES (?,?,?,?,?,?,?)");
        $pre->bind_param("issssii", $this->id_estudiante, $this->Nombre_estudiante, $this->Apellido_estud, $this->direccion_est, $this->telefono_est, $this->acudiente, $this->grupo_est);
        $pre->execute();
    }
    //READ
    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM estudiantes_col");
        $pre->execute();
        $res = $pre->get_result();
        $clientes = [];
        while ($cliente = $res->fetch_object(Cliente::class))
            array_push($clientes, $cliente);

        return $clientes;
    }
    //UPDATE
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE estudiantes_col SET Nombre_estudiante=?, Apellido_estud=?, direccion_est=?, telefono_est=?, acudiente=?, grupo_est=? WHERE id_estudiante=?");
        $pre->bind_param("ssssiii", $this->Nombre_estudiante, $this->Apellido_estud, $this->direccion_est, $this->telefono_est, $this->acudiente, $this->grupo_est, $this->id_estudiante);
        $pre->execute();
    }
    //DELETE
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM estudiantes_col WHERE id_estudiante = ?");
        $pre->bind_param("i", $this->id_estudiante);
        $pre->execute();
    }
    //OBTENER UN ALUMNO POR SU ID DE ESTUDIANTE
    public static function getID($id_estudiante)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM estudiantes_col WHERE id_estudiante = ?");
        $pre->bind_param("i", $id_estudiante);
        $pre->execute();
        $res = $pre->get_result();

        return $res->fetch_object(Cliente::class);
    }
}
