<?php 
  include "header.php"; 
  if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == 1 || $_SESSION['usuario']['id'] == 2 || $_SESSION['usuario']['id'] == 3) {
?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="fw-light">Inicio</h1>
      <p class="lead">Content on the page</p>
    </div>
  </div>
</div>

<?php 
  include "footer.php" ;
  } else {
    header("location:../index.html");
  }
?>
