function loginUsuario() {
  console.log("¡La función sí se está ejecutando!");
  $.ajax({
    type: "POST",
    data: $("#frmLogin").serialize(),
    url: "procesos/usuarios/login/loginUsuario.php",
    success: function (respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
        window.location.href = "views/inicio.php";
      } else {
        Swal.fire(":(", "Error al entrar " + respuesta, "error");
      }
    },
  });

  return false;
}
