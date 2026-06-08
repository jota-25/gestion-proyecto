<?php require_once '../views/layouts/header.php'; ?>

<div class="login-container">

<div class="card login-card">

<div class="card-body p-5">

<div class="text-center mb-4">

<i
class="bi bi-shield-lock-fill text-primary"
style="font-size:60px;">
</i>

<h3 class="mt-3">

Iniciar Sesión

</h3>

</div>

<form
action="authenticate.php"
method="POST">

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Contraseña</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
class="btn btn-primary w-100">

Ingresar

</button>

</form>

</div>

</div>

</div>

<?php require_once '../views/layouts/footer.php'; ?>