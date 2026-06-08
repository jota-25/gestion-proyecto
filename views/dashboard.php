<?php require_once '../views/layouts/header.php'; ?>

<div class="container mt-5">

<h1 class="page-title">

<i class="bi bi-speedometer2"></i>

Panel de Administración

</h1>

<div class="row g-4">

<div class="col-md-6">

<div class="card">

<div class="card-body text-center p-5">

<i
class="bi bi-people-fill text-success"
style="font-size:60px;">
</i>

<h2 class="mt-3">

<?= $totalClientes ?>

</h2>

<h4>

Clientes Registrados

</h4>

<a
href="clientes.php"
class="btn btn-success mt-3">

Gestionar Clientes

</a>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card">

<div class="card-body text-center p-5">

<i
class="bi bi-kanban-fill text-primary"
style="font-size:60px;">
</i>

<h2 class="mt-3">

<?= $totalProyectos ?>

</h2>

<h4>

Proyectos Registrados

</h4>

<a
href="proyectos.php"
class="btn btn-primary mt-3">

Gestionar Proyectos

</a>

</div>

</div>

</div>

</div>

</div>

<?php require_once '../views/layouts/footer.php'; ?>