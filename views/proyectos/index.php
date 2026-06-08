<?php require_once '../views/layouts/header.php'; ?>



<div class="container mt-4">
<h2 class="page-title">

<i class="bi bi-kanban-fill text-primary"></i>

Proyectos

</h2>

<?php if(isset($_GET['success'])): ?>

    <?php if($_GET['success'] == 'created'): ?>

        <div class="alert alert-success">
            Proyecto registrado correctamente.
        </div>

    <?php elseif($_GET['success'] == 'updated'): ?>

        <div class="alert alert-primary">
            Proyecto actualizado correctamente.
        </div>

    <?php elseif($_GET['success'] == 'deleted'): ?>

        <div class="alert alert-danger">
            Proyecto eliminado correctamente.
        </div>

    <?php endif; ?>

<?php endif; ?>

<a
href="proyecto_create.php"
class="btn btn-primary">

<i class="bi bi-plus-circle"></i>

Nuevo Proyecto

</a>

<a
href="reporte_clientes.php"
target="_blank"
class="btn btn-danger">

<i class="bi bi-file-earmark-pdf-fill"></i>

Exportar PDF

</a>

<table class="table table-hover align-middle">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Cliente</th>
<th>Proyecto</th>
<th>Estado</th>
<th>Inicio</th>
<th>Fin</th>
<th>Acciones</th>

</tr>

</thead>

<tbody>

<?php foreach($proyectos as $proyecto): ?>

<tr>

<td><?= $proyecto['id'] ?></td>

<td><?= htmlspecialchars($proyecto['cliente_nombre']) ?></td>

<td><?= htmlspecialchars($proyecto['nombre']) ?></td>

<td><?= htmlspecialchars($proyecto['estado']) ?></td>

<td><?= $proyecto['fecha_inicio'] ?></td>

<td><?= $proyecto['fecha_fin'] ?></td>

<td>

<a
href="proyecto_edit.php?id=<?= $proyecto['id'] ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a
href="proyecto_delete.php?id=<?= $proyecto['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar proyecto?')">

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