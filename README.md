# Sistema de Gestión de Clientes y Proyectos

Este sistema fue desarrollado como una aplicación de gestión de clientes y proyectos enfocada en demostrar conceptos de desarrollo backend con PHP.
## Descripción

Aplicación web desarrollada en PHP utilizando Programación Orientada a Objetos (POO), patrón MVC y PDO para la gestión de clientes y proyectos empresariales.

El sistema permite administrar clientes, registrar proyectos asociados, generar reportes PDF y controlar el acceso mediante autenticación segura.

La administración de usuarios se mantiene fuera del alcance de esta versión para mantener el enfoque en la gestión de clientes y proyectos. El sistema incluye autenticación mediante una cuenta administrativa inicial y una estructura preparada para futuras ampliaciones, como roles, permisos y gestión completa de usuarios.

## Características

* Autenticación de usuarios
* Gestión de clientes (CRUD)
* Gestión de proyectos (CRUD)
* Relación Cliente - Proyecto
* Reportes PDF
* Arquitectura MVC
* Migraciones automáticas
* Seeder para usuario administrador
* Uso de PDO y consultas preparadas

## Tecnologías Utilizadas

* PHP 8
* MySQL
* PDO
* Bootstrap 5
* Composer
* FPDF
* HTML5
* CSS3
* JavaScript

## Instalación

### 1. Clonar el repositorio

git clone gh repo clone jota-25/gestion-proyecto

### 2. Instalar dependencias

composer install

### 3. Crear la base de datos

CREATE DATABASE gestion_proyectos;

### 4. Configurar variables de entorno

Copiar:

.env.example

como:

.env

y configurar los datos de conexión.

### 5. Ejecutar migraciones

php database/migrate.php

### 6. Ejecutar seeders

php database/seed.php

## Usuario Inicial

Correo:
[admin@empresa.com]

Contraseña:
admin123

## Arquitectura

app/
controllers/
models/
config/

views/

database/
migrations/
seeders/

public/

reports/

## Prueba

Despues de configurar y que se cree la database y hacer que se creen las tablas para empezar a probar el sistema hacerlo desde el endpoint

.../public/index.php

y iniciar seccion con el usuario inicial 
