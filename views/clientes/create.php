<!DOCTYPE html>
<html>
<head>

<title>Nuevo Cliente</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

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

</body>
</html>