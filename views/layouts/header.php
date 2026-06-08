<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Sistema Gestión Proyectos</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
rel="preconnect"
href="https://fonts.googleapis.com">

<link
rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<link
rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">

<div class="container">

<a class="navbar-brand">

<i class="bi bi-kanban-fill"></i>

Sistema Gestión

</a>

<?php if(isset($_SESSION['user_id'])): ?>

<div>

<span class="text-white me-3">

<i class="bi bi-person-circle"></i>

<?= $_SESSION['user_name'] ?>

</span>

<a
href="logout.php"
class="btn btn-danger btn-sm">

Cerrar Sesión

</a>

</div>

<?php endif; ?>

</div>

</nav>