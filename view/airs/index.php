<?php
include '../../scripts/airs/air.php';

$airs= air::all();

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
    <a href="create.php" class="btn btn-success">Crear</a>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($airs as $air) {
                ?>
                <tr class="">
                    <td><?php echo $air['id'];?></td>
                    <td><?php echo $air['level'];?></td>
                    <td><div class="btn-group">
                        <form action="./edit.php" method="post"><input type="hidden" name="id" value="<?php echo $air['id'];?>"><input type="submit" class="btn btn-success" value="Editar"></form>
                        <form action="./delete.php" method="post"><input type="hidden" name="id" value="<?php echo $air['id'];?>"><input type="submit" class="btn btn-danger" value="Eliminar"></form>
                    </div></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
  </div>
</div>

</body>
</html>
