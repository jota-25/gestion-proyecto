<!DOCTYPE html>
<html>

<head>

<title>Editar Proyecto</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Editar Proyecto</h2>

<form
method="POST"
action="proyecto_update.php">

<input
type="hidden"
name="id"
value="<?= $proyecto['id'] ?>">

<div class="mb-3">

<label>Cliente</label>

<select
name="cliente_id"
class="form-control">

<?php foreach($clientes as $cliente): ?>

<option
value="<?= $cliente['id'] ?>"
<?= $cliente['id'] == $proyecto['cliente_id']
? 'selected'
: '' ?>>

<?= $cliente['nombre'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="<?= htmlspecialchars($proyecto['nombre']) ?>">

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea
name="descripcion"
class="form-control"><?= htmlspecialchars($proyecto['descripcion']) ?></textarea>

</div>

<div class="mb-3">

<label>Fecha Inicio</label>

<input
type="date"
name="fecha_inicio"
class="form-control"
value="<?= $proyecto['fecha_inicio'] ?>">

</div>

<div class="mb-3">

<label>Fecha Fin</label>

<input
type="date"
name="fecha_fin"
class="form-control"
value="<?= $proyecto['fecha_fin'] ?>">

</div>

<div class="mb-3">

<label>Estado</label>

<select
name="estado"
class="form-control">

<option <?= $proyecto['estado']=='Pendiente'?'selected':'' ?>>
Pendiente
</option>

<option <?= $proyecto['estado']=='En Proceso'?'selected':'' ?>>
En Proceso
</option>

<option <?= $proyecto['estado']=='Finalizado'?'selected':'' ?>>
Finalizado
</option>

</select>

</div>

<button
class="btn btn-success">

Actualizar

</button>

</form>

</div>

</body>

</html>