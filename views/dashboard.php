<?php require_once '../views/layouts/header.php'; ?>

<div class="container mt-5">

<h1 class="page-title">

Panel de Administración

</h1>

<div class="row">

<div class="col-md-6">

<div class="card dashboard-card">

<i class="bi bi-people-fill text-success"></i>

<h3>Clientes</h3>

<p>
Administrar clientes registrados
</p>

<a
href="clientes.php"
class="btn btn-success">

Gestionar

</a>

</div>

</div>

<div class="col-md-6">

<div class="card dashboard-card">

<i class="bi bi-kanban-fill text-primary"></i>

<h3>Proyectos</h3>

<p>
Administrar proyectos registrados
</p>

<a
href="proyectos.php"
class="btn btn-primary">

Gestionar

</a>

</div>

</div>

</div>

</div>

<?php require_once '../views/layouts/footer.php'; ?>