<?php
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT 
                usuarios.id_usuario AS idUsuario,
                usuarios.usuario AS nombreUsuario,
                roles.nombre AS rol,
                usuarios.id_rol AS idRol,
                usuarios.ubicacion AS ubicacion,
                usuarios.activo AS estado,
                usuarios.id_persona AS idPersona,
                persona.nombre AS nombrePersona,
                persona.paterno AS paterno,
                persona.materno AS materno,
                persona.fecha_nacimiento AS fechaNacimiento,
                persona.sexo AS sexo,
                persona.correo AS correo,
                persona.telefono AS telefono
            FROM
                t_usuarios AS usuarios
                    INNER JOIN
                t_roles AS roles ON usuarios.id_rol = roles.id_rol
                    INNER JOIN
                t_persona AS persona ON usuarios.id_persona = persona.id_persona;";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="table table-sm dt-responsive nowrap" style="width:100%" id="tablaUsuariosDataTable">
    <thead>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Usuario</th>
        <th>Ubicación</th>
        <th>Sexo</th>
        <th>Reset Password</th>
        <th>Estado</th>
        <th>Editar</th> 
        <th>Eliminar</th> 
    </thead>
    <tbody>
        <?php 
            while($mostrar =mysqli_fetch_array($respuesta)){
        ?>
        <tr>
            <td><?php echo $mostrar['paterno']; ?></td>
            <td><?php echo $mostrar['materno']; ?></td>
            <td><?php echo $mostrar['nombrePersona']; ?></td>
            <td><?php echo $mostrar['fechaNacimiento']; ?></td>
            <td><?php echo $mostrar['telefono']; ?></td>
            <td><?php echo $mostrar['correo']; ?></td>
            <td><?php echo $mostrar['nombreUsuario']; ?></td>
            <td><?php echo $mostrar['ubicacion']; ?></td>
            <td><?php echo $mostrar['sexo']; ?></td>
            <td>
                <button class="btn btn-success">
                    <spans class="fas fa-exchange-alt"></spans>
                </button>
            </td>
            <td>
                <?php 
                    if($mostrar['estado']==1){ 
                ?>
                <button class="btn btn-info btn-sm">
                    <span class="fa-solid fa-toggle-on"></span>
                </button>
                <?php 
                    }else{ 
                ?>
                <button class="btn btn-sm btn-danger">
                    <span class="fa-solid fa-toggle-on"></span>
                </button>
                <?php
                    };
                ?>
            </td>
            <td>
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarUsuarios" onclick="obtenerDatosUsuario(<?php echo $mostrar['idUsuario'] ?>)">
                    <span class="fa-solid fa-user-pen"></span>
                </button>
            </td>
            <td>
                <button class="btn btn-danger">
                    <span class="fa-solid fa-delete-left"></span>
                </button>
            </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tablaUsuariosDataTable').DataTable({
            language:{
                url: "../public/datatable/es_es.json"
            },
            dom: 'Bfrtip',
            buttons : {
                buttons : [
                    {
                        extend : 'copy',
                        className : 'btn btn-outline-info',
                        text : '<i class="fa-regular fa-copy"></i> Copiar'
                    },
                    {
                        extend : 'csv',
                        className : 'btn btn-outline-primary',
                        text : '<i class="fa-solid fa-file-csv"></i> CSV'
                    },
                    {
                        extend : 'excel',
                        className : 'btn btn-outline-success',
                        text : '<i class="fa-regular fa-file-excel"></i> Excel'
                    },
                    {
                        extend : 'pdf',
                        className : 'btn btn-outline-danger',
                        text : '<i class="fa-regular fa-file-pdf"></i> PDF'
                    }
                ],
                dom : {
                    button : {
                        className : 'btn'
                    }
                }
            }
        });  
    });
</script>