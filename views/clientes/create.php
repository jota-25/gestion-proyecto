<?php require_once '../views/layouts/header.php'; ?>

<div class="container mt-5">

<div class="card">

<div class="card-body p-4">

<h2>Registrar Cliente</h2>

<form
method="POST"
action="cliente_store.php">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="mb-3">

<label>Teléfono</label>

<input
type="text"
name="telefono"
class="form-control">

</div>

<button
class="btn btn-success">

Guardar

</button>

</form>

</div>

</div>

</div>

<?php require_once '../views/layouts/footer.php'; ?>