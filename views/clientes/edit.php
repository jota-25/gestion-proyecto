<!DOCTYPE html>
<html>

<head>

<title>Editar Cliente</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Editar Cliente</h2>

<form
method="POST"
action="cliente_update.php">

<input
type="hidden"
name="id"
value="<?= $cliente['id'] ?>">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
value="<?= htmlspecialchars($cliente['nombre']) ?>"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
value="<?= htmlspecialchars($cliente['email']) ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Teléfono</label>

<input
type="text"
name="telefono"
value="<?= htmlspecialchars($cliente['telefono']) ?>"
class="form-control">

</div>

<button
class="btn btn-primary">

Actualizar

</button>

<a
href="clientes.php"
class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</body>

</html>