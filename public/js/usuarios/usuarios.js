$(document).ready(function () {
  $("#tablaUsuariosLoad").load("usuarios/tablaUsuarios.php");
});

function agregarNuevoUsuario() {
  $.ajax({
    type: "POST",
    data: $("#frmAgregarUsuario").serialize(),
    url: "../procesos/usuarios/login/crud/agregarNuevoUsuario.php",
    success: function (respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
        $("#tablaUsuariosLoad").load("usuarios/tablaUsuarios.php");
        $("#frmAgregarUsuario")[0].reset();
        Swal.fire(":D", "Agregado con éxito", "success");
      } else {
        Swal.fire(":(", "Error al agregar" + respuesta, "error");
      }
    },
  });

  return false;
}
