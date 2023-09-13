<?php
include '../../scripts/airs/air.php';
$id = $_POST['id'];
$airs= air::find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Modulo de aires</h1>
</div>
  
<div class="container mt-5">
  <div class="row">
  <div class="card text-white bg-dark">
    <div class="card-body">
        <p>Deseas eliminarlo permanentemente?</p>
    <form action="../../scripts/airs/delete.php" method="POST">
    <input type="hidden" class="form-control" id="level" name="id" value="<?php echo $airs['id'] ?>">
  <button type="submit" class="btn btn-danger">Eliinar</button>
  <a href="./" class="btn btn-primary">Cancelar</a>
    </form>
    </div>
  </div>
    
  </div>
</div>

</body>
</html>
