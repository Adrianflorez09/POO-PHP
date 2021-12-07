<?php
include_once "cliente.php";
// CREATE
//$cliente = new Cliente();
//$cliente->id_estudiante = 1231331;
//$cliente->Nombre_estudiante = "holaprueba";
//$cliente->Apellido_estud = "apellidoprueba";
//$cliente->direccion_est = "dirprueba";
//$cliente->telefono_est = "123546557";
//$cliente->acudiente = 21432112;
//$cliente->grupo_est = 12345;
//$cliente->create();

// UPDATE
//$cliente = Cliente::getID(1231331);
//$cliente->Nombre_estudiante = "holacambio";
//$cliente->update();

// DELETE

//$cliente = Cliente::getID(1231331);
//$cliente->delete();

// READ
$clientes = Cliente::all();
?>
<table>
    <thead>
        <tr>
            <th>ID del Estudiante</th>
            <th>Nombre del Estudiante</th>
            <th>Apellido del Estudiante</th>
            <th>Direccion del Estudiante</th>
            <th>Telefono del Estudiante</th>
            <th>Acudiente del Estudiante</th>
            <th>Curso del Estudiante</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) { ?>
            <tr>
                <td><?php echo $cliente->id_estudiante; ?></td>
                <td><?php echo $cliente->Nombre_estudiante; ?></td>
                <td><?php echo $cliente->Apellido_estud; ?></td>
                <td><?php echo $cliente->direccion_est; ?></td>
                <td><?php echo $cliente->telefono_est; ?></td>
                <td><?php echo $cliente->acudiente; ?></td>
                <td><?php echo $cliente->grupo_est; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>