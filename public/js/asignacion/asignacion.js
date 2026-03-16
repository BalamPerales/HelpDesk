function asignarEquipo() {
  $.ajax({
    type: "POST",
    data: $("#frmAsignarEquipo").serialize(),
    url: "../procesos/asignacion/asignar.php",
    success: function (respuesta) {
      respuesta = respuesta.trim();

      if (respuesta == 1) {
        $("#frmAsignaEquipo")[0].reset();
        Swal.fire(":D", "Asignado con exito!", "success");
      } else {
        Swal.fire(":(", "Fallo al asignar!" + respuesta, "error");
      }
    },
  });
  return false;
}
