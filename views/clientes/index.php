<?php require_once '../views/layouts/header.php'; ?>

<div class="container mt-4">
<h2 class="page-title">

<i class="bi bi-people-fill text-success"></i>

Clientes

</h2>

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
class="btn btn-success">

<i class="bi bi-plus-circle"></i>

Nuevo Cliente

</a>
<a
href="reporte_clientes.php"
target="_blank"
class="btn btn-danger">

<i class="bi bi-file-earmark-pdf-fill"></i>

Exportar PDF

</a>

<table class="table table-hover align-middle">

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

<?php require_once '../views/layouts/footer.php'; ?>