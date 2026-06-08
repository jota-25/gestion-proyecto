<?php require_once '../views/layouts/header.php'; ?>
<div class="container mt-5">

<div class="card">

<div class="card-body p-4">

<h2>Nuevo Proyecto</h2>

<form
method="POST"
action="proyecto_store.php">

<div class="mb-3">

<label>Cliente</label>

<select
name="cliente_id"
class="form-control"
required>

<?php foreach($clientes as $cliente): ?>

<option
value="<?= $cliente['id'] ?>">

<?= $cliente['nombre'] ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="mb-3">

<label>Nombre Proyecto</label>

<input
type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea
name="descripcion"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Fecha Inicio</label>

<input
type="date"
name="fecha_inicio"
class="form-control">

</div>

<div class="mb-3">

<label>Fecha Fin</label>

<input
type="date"
name="fecha_fin"
class="form-control">

</div>

<div class="mb-3">

<label>Estado</label>

<select
name="estado"
class="form-control">

<option>Pendiente</option>
<option>En Proceso</option>
<option>Finalizado</option>

</select>

</div>

<button
class="btn btn-primary">

Guardar

</button>

</form>

</div>
</div>
</div>
<?php require_once '../views/layouts/footer.php'; ?>