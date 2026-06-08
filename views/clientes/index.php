<!DOCTYPE html>
<html>
<head>

<title>Clientes</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Clientes</h2>

<?php if(isset($_GET['success'])): ?>

    <?php if($_GET['success'] == 'created'): ?>

        <div class="alert alert-success">
            Cliente registrado correctamente.
        </div>

    <?php elseif($_GET['success'] == 'updated'): ?>

        <div class="alert alert-primary">
            Cliente actualizado correctamente.
        </div>

    <?php elseif($_GET['success'] == 'deleted'): ?>

        <div class="alert alert-danger">
            Cliente eliminado correctamente.
        </div>

    <?php endif; ?>

<?php endif; ?>

<a
href="cliente_create.php"
class="btn btn-success mb-3">

Nuevo Cliente

</a>
<a
href="reporte_clientes.php"
target="_blank"
class="btn btn-danger mb-3">

Exportar PDF

</a>

<table class="table table-bordered">

<thead>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Teléfono</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php foreach($clientes as $cliente): ?>

<tr>

<td><?= $cliente['id'] ?></td>

<td><?= $cliente['nombre'] ?></td>

<td><?= $cliente['email'] ?></td>

<td><?= $cliente['telefono'] ?></td>

<td>

<a
href="cliente_edit.php?id=<?= $cliente['id'] ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a
href="cliente_delete.php?id=<?= $cliente['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar cliente?')">

Eliminar

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<a
href="dashboard.php"
class="btn btn-secondary">

Volver

</a>

</div>

</body>
</html>